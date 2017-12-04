<?php
require_once './inc/page.php';

class Check {
    public function run($name, $from) {
        $page = new Page("check", false);
        // validate user input
        if (strlen($name) > 16 || !preg_match("/^[0-9a-zA-Z_]{1,16}$/", $name)) {
            $this->println($page->t("check_invalid"));
            return;
        }
        $history = $page->settings->table['history'];

        try {
            $stmt = $page->conn->prepare("SELECT name,uuid FROM $history WHERE name=? ORDER BY date LIMIT 1");
            if ($stmt->execute(array($name))) {
                if ($row = $stmt->fetch()) {
                    $name = $row['name'];
                    $uuid = $row['uuid'];
                }
            }
            $stmt->closeCursor();

            // sanitize $_POST['table'] ($from)
            $from_type = $page->type_info($from);
            $type = $from_type['type'];

            if (!isset($uuid)) {
                if (filter_var($name, FILTER_VALIDATE_FLOAT)) {
                    echo "<br>";
                    $page->settings->redirect("info.php?id=$name&type=$type", false);
                    return;
                }
                $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
                $this->println("$name " . $page->t("check_notjoin"));
                return;
            }
            $href = "history.php?uuid=$uuid";

            if ($type !== null) {
                $href .= "&from=" . Page::lc_first($from_type['title']);
            }

            echo "<br>";
            $page->settings->redirect($href, false);
            /*
            $table = $page->settings->table['bans'];

            $stmt = $page->conn->prepare("SELECT * FROM $table WHERE (uuid=? AND active=" . Settings::$TRUE . ") LIMIT 1");
            if ($stmt->execute(array($uuid))) {
                if (!($row = $stmt->fetch())) {
                    $this->println("$name is not banned.");
                    return;
                }
                $banner = $page->get_banner_name($row);
                $reason = $page->clean($row['reason']);
                $time = $page->millis_to_date($row['time']);
                $until = $page->millis_to_date($row['until']);

                $this->println("$name is banned!");
                $this->println("Banned by: $banner");
                $this->println("Reason: $reason");
                $this->println("Banned on: $time");
                if ($row['until'] > 0) {
                    $this->println("Banned until: $until");
                } else {
                    $this->println("Banned permanently.");
                }
            }
            $stmt->closeCursor();
            */
        } catch (PDOException $ex) {
            Settings::handle_error($page->settings, $ex);
        }
    }

    function println($line) {
        echo "$line<br>";
    }
}

if (isset($_GET['name'], $_GET['table']) && is_string($_GET['name']) && is_string($_GET['table'])) {
    $check = new Check();
    $check->run($_GET['name'], $_GET['table']);
}
