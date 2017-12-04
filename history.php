<?php
require_once './inc/page.php';
require_once './info.php';

class History {
    /**
     * Appends COUNT(*) from $table matching $uuid to $counts,
     * then appends all rows from $table matching $uuid to $array
     * @param Page $page
     * @param array $array
     * @param string $type
     * @param string $uuid
     * @param string $field
     * @param array $counts
     */
    static function push($page, &$array, $type, $uuid, $field, &$counts) {
        $table = $page->settings->table[$type];
        $count_st = $page->conn->prepare("SELECT COUNT(*) AS count FROM $table WHERE $field=:uuid");
        $count_st->bindParam(":uuid", $uuid, PDO::PARAM_STR);
        if ($count_st->execute() && ($row = $count_st->fetch()) !== null) {
            $counts[$type] = $row['count'];
        }
        $count_st->closeCursor();
        $sel = $page->get_selection($table);

        $limit = $page->settings->limit_per_page;

        $offset = History::get_offset($type);

        $st = $page->conn->prepare("SELECT $sel FROM $table WHERE $field=:uuid ORDER BY time DESC LIMIT :limit OFFSET :offset");
        $st->bindParam(":uuid", $uuid, PDO::PARAM_STR);
        $st->bindParam(":limit", $limit, PDO::PARAM_INT);
        $st->bindParam(":offset", $offset, PDO::PARAM_INT);

        if ($st->execute()) {
            while ($row = $st->fetch(PDO::FETCH_ASSOC)) {
                $row['__table__'] = $type;
                array_push($array, $row);
            }
        }
        $st->closeCursor();
    }

    /**
     * usort() function for rows in the database
     * @param PDORow $a
     * @param PDORow $b
     * @return int
     */
    static function cmp_row_date($a, $b) {
        $a = $a['time'];
        $b = $b['time'];
        if ($a === $b) {
            return 0;
        }
        return ($a < $b) ? 1 : -1;
    }

    static function get_offset($table) {
        $v = $table[0];
        if (isset($_GET[$v]) && is_string($_GET[$v])) {
            if (filter_var($_GET[$v], FILTER_VALIDATE_INT)) {
                return (int)$_GET[$v];
            }
        }
        return 0;
    }
}

$page = new Page("history");

isset($_GET['uuid']) && is_string($_GET['uuid']) or die($page->t("history_missinguuid"));

$staffhistory = (isset($_GET['staffhistory']) && $_GET['staffhistory'] === "1");

$uuid = $_GET['uuid'];
$name = $page->get_name($uuid);

$name !== null or die($page->t("history_playernotfound"));

if ($staffhistory) {
    $page->title = $page->t("history_recentby") . $name;
} else {
    $page->title = $page->t("history_recentfor") . $name;
}


$page->print_title();
$page->print_header();

$from = null;
$from_title = null;
$from_href = null;

if (isset($_GET['from'])) {
    // sanitize $_GET['from']
    $info = $page->type_info($_GET['from']);
    if ($info['type'] !== null) {
        $from_title = $info['title'];
        $from = Page::lc_first($from_title);
        $from_href = "$from.php";
    }
}

try {
    $all = array();
    $counts = array();

    $field = "uuid";
    if ($staffhistory) {
        $field = "banned_by_uuid";
    }

    History::push($page, $all, 'bans', $uuid, $field, $counts);
    History::push($page, $all, 'mutes', $uuid, $field, $counts);
    History::push($page, $all, 'warnings', $uuid, $field, $counts);
    History::push($page, $all, 'kicks', $uuid, $field, $counts);

    $total = 0;
    foreach ($counts as $count) {
        $total += $count;
    }

    usort($all, array("History", "cmp_row_date"));

    if (!empty($all)) {
        $page->table_begin();

        $limit = $page->settings->limit_per_page;

        /*$offset = 0;
        if ($page->settings->show_pager) {
            $current_page = $page->page - 1;
            $offset = ($limit * $current_page);
            $limit += $offset;
        }*/

        $totalb = 0;
        $totalm = 0;
        $totalw = 0;
        $totalk = 0;

        $i = 0;
        foreach ($all as $row) {
            $i++;
            /*if ($page->settings->show_pager && $i < $offset) {
                continue;
            }*/
            if ($i > $limit) break;

            $type = $row['__table__'];

            if ($type == 'bans') $totalb++;
            elseif ($type == 'mutes') $totalm++;
            elseif ($type == 'warnings') $totalw++;
            elseif ($type == 'kicks') $totalk++;

            $page->set_info($page->type_info($type));

            $style = 'style="font-size: 13px;"';

            $label_type = $page->type;
            $label_name = Info::create($row, $page, $label_type)->name(); //ucfirst($label_type);
            $label = "<span $style class='label label-$label_type'>$label_name</span>";

            $page->print_table_rows($row, array(
                $page->t("history_tabletype")      => $label,
                $page->t("history_tableplayer")    => $page->get_avatar($page->get_name($row['uuid']), $row['uuid']),
                $page->t("history_tablemoderator") => $page->get_avatar($page->get_banner_name($row), $row['banned_by_uuid']),
                $page->t("history_tablereason")    => $page->clean($row['reason']),
                $page->t("history_tabledate")      => $page->millis_to_date($row['time']),
                $page->t("history_tableexpires")   => $page->expiry($row),
                $page->t("column_server")          => $page->server($row),
                //'i' => $i . "/" . $limit . "/" . $total,
            ));
        }

        $page->table_end();
        // print pager
        if ($page->settings->show_pager) {
            $page->name = "history";
            $args = "&uuid=$uuid";
            if ($from !== null) {
                $args .= "&from=$from";
            }
            if ($staffhistory) {
                $args .= "&staffhistory=1";
            }

            $prevargs = $args;

            $offb = History::get_offset("b") + $totalb;
            $offm = History::get_offset("m") + $totalm;
            $offw = History::get_offset("w") + $totalw;
            $offk = History::get_offset("k") + $totalk;

            $args .= "&b=$offb&m=$offm&w=$offw&k=$offk";

            $page->print_pager($total, $args, $prevargs);
        }
    } else {
        echo $page->t("history_nopunishments") . "<br>";
    }

    if ($from_href !== null) {
        echo "<br><a class=\"btn\" href=\"$from_href\">" . $page->t("history_returnto") . " $from_title </a > ";
    }

    $page->print_footer();
} catch (PDOException $ex) {
    Settings::handle_error($page->settings, $ex);
}
