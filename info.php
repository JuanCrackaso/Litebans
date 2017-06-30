<?php
require_once './inc/page.php';

abstract class Info {
    /**
     * @param $row PDO::PDORow
     * @param $page Page
     */
    public function __construct($row, $page) {
        $this->row = $row;
        $this->page = $page;
        $this->table = $page->table;
    }

    static function create($row, $page, $type) {
        switch ($type) {
            case "ban":
                return new BanInfo($row, $page);
            case "mute":
                return new MuteInfo($row, $page);
            case "warn":
                return new WarnInfo($row, $page);
            case "kick":
                return new KickInfo($row, $page);
        }
        return null;
    }

    function name() {
        return ucfirst($this->page->type);
    }

    function permanent() {
        return ((int)$this->row['until']) <= 0;
    }

    function punished_avatar($player_name, $row) {
        return $this->page->get_avatar($player_name, $row['uuid'], true, $this->history_link($player_name, $row['uuid']), $name_left = false);
    }

    function history_link($player_name, $uuid, $args = "") {
        return "<a href=\"history.php?uuid=$uuid$args\">$player_name</a>";
    }

    function moderator_avatar($row) {
        $banner_name = $this->page->get_banner_name($row);
        return $this->page->get_avatar($banner_name, $row['banned_by_uuid'], true, $this->history_link($banner_name, $row['banned_by_uuid'], "&staffhistory=1"), $name_left = false);
    }

    abstract function basic_info($row, $player_name);
}

class BanInfo extends Info {
    function basic_info($row, $player_name) {
        $page = $this->page;

        return array(
            $page->lang->info_banned_player => $this->punished_avatar($player_name, $row),
            $page->lang->info_banned_by     => $this->moderator_avatar($row),
            $page->lang->info_banned_reason => $page->clean($row['reason']),
            $page->lang->info_banned_when   => $page->millis_to_date($row['time']),
            $page->lang->info_banned_expiry => $page->expiry($row),
        );
    }
}

class MuteInfo extends Info {
    function basic_info($row, $player_name) {
        $page = $this->page;
        return array(
            $page->lang->info_muted_player => $this->punished_avatar($player_name, $row),
            $page->lang->info_muted_by     => $this->moderator_avatar($row),
            $page->lang->info_muted_reason => $page->clean($row['reason']),
            $page->lang->info_muted_when   => $page->millis_to_date($row['time']),
            $page->lang->info_muted_expiry => $page->expiry($row),
        );
    }
}

class WarnInfo extends Info {
    function name() {
        return $this->page->lang->info_warn_name;
    }

    function basic_info($row, $player_name) {
        $page = $this->page;
        return array(
            $page->lang->info_warn_player => $this->punished_avatar($player_name, $row),
            $page->lang->info_warn_by     => $this->moderator_avatar($row),
            $page->lang->info_warn_reason => $page->clean($row['reason']),
            $page->lang->info_warn_when   => $page->millis_to_date($row['time']),
            $page->lang->info_warn_expiry => $page->expiry($row),
        );
    }
}

class KickInfo extends Info {
    function basic_info($row, $player_name) {
        $page = $this->page;
        return array(
            $page->lang->info_kick_player => $this->punished_avatar($player_name, $row),
            $page->lang->info_kick_by     => $this->moderator_avatar($row),
            $page->lang->info_kick_reason => $page->clean($row['reason']),
            $page->lang->info_kick_when   => $page->millis_to_date($row['time']),
        );
    }
}

// check if info.php is requested, otherwise it's included
if ((substr($_SERVER['SCRIPT_NAME'], -strlen("info.php"))) !== "info.php") {
    return;
}

isset($_GET['type'], $_GET['id']) && is_string($_GET['type']) && is_string($_GET['id']) or die($page->lang->info_error_missingarg);

$type = $_GET['type'];
$id = $_GET['id'];
$page = new Page($type);

($page->type !== null) or die($page->lang->info_error_unknown);

filter_var($id, FILTER_VALIDATE_INT) or die($page->lang->info_error_invalidid);

$id = (int)$id;

$type = $page->type;
$table = $page->table;
$sel = $page->get_selection($table);
$query = "SELECT $sel FROM $table WHERE id=? LIMIT 1";

$st = $page->conn->prepare($query);

if ($st->execute(array($id))) {
    ($row = $st->fetch()) or die($page->lang->info_error_notfound1 . $type . $page->lang->info_error_notfound2);
    $st->closeCursor();

    $player_name = $page->get_name($row['uuid']);

    ($player_name !== null) or die($page->lang->info_error_notplayer);

    $info = Info::create($row, $page, $type);

    $name = $info->name();
    $permanent = $info->permanent();

    $page->name = $page->title = "$name #$id";
    $page->print_title();

    $header = $page->name;

    if (!($info instanceof KickInfo)) {
        $style = 'style="margin-left: 13px; font-size: 16px;"';
        $active = $page->active($row);
        if ($active === true) {
            $header .= "<span $style class='label label-danger'>Active</span>";
            if ($permanent) {
                $header .= "<span $style class='label label-danger'>Permanent</span>";
            }
        } else {
            $header .= "<span $style class='label label-warning'>Inactive</span>";
        }
    }
    $page->print_header(true, $header);

    $map = $info->basic_info($row, $player_name);

    $permanent_val = $info->page->permanent[$type];

    $page->table_begin();

    foreach ($map as $key => $val) {
        if ($permanent &&
            ($key === $page->lang->info_banned_expiry || $key === $page->lang->info_muted_expiry || $key === $page->lang->info_warn_expiry) &&
            $val === $permanent_val
        ) {
            // skip "Expires" row if punishment is permanent
            continue;
        }
        echo "<tr><td>$key</td><td>$val</td></tr>";
    }

    $page->table_end(false);

    $page->print_footer();
}
