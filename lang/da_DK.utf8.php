<?php

class Lang {
    public function __construct() {
        $array = array();
        $this->array = &$array;
        $array["index_welcome"] = "Velkommen Til {server}'s Ban Liste.";
        $array["index_welcome2"] = 'Her er all dine afstraffelser listed.';

        $array["header_index"] = 'Hjem';
        $array["header_bans"] = 'Forbud';
        $array["header_mutes"] = 'Dæmpelser';
        $array["header_warnings"] = 'Advarelser';
        $array["header_kicks"] = 'Spark';

        $array["page_perm_ban"] = 'Permanent Forbud';
        $array["page_perm_mute"] = 'Permanent Dæmpelse';
        $array["page_perm_warn"] = 'Permanent';
        $array["page_expire_ban"] = '(Forbud Ophævet)';
        $array["page_expire_ban_by"] = '(Forbud Ophævet af {name})';
        $array["page_expire_mute"] = '(Dæmpelse Fjernet)';
        $array["page_expire_mute_by"] = '(Dæmpelse Fjernet af {name})';
        $array["page_expire"] = '(Udløbet)';
        $array["page_title_ban"] = 'Forbud';
        $array["page_title_mute"] = 'Dæmpelser';
        $array["page_title_warn"] = 'Advarelser';
        $array["page_title_kick"] = 'Spark';
        $array["page_check_user"] = "Spiller";
        $array["page_check_submit"] = "Tjek";
        $array["page_page"] = "Side";

        $array["check_notjoin"] = "har ikke været på serveren.";

        $array["history_recentby"] = "Seneste Straffe af ";
        $array["history_recentfor"] = "Senseste for ";
        $array["history_tabletype"] = "Type";
        $array["history_tableplayer"] = "Spiller";
        $array["history_tablemoderator"] = "Moderator";
        $array["history_tablereason"] = "Grund";
        $array["history_tabledate"] = "Dato";
        $array["history_tableexpires"] = "Udløber";
        $array["history_nopunishments"] = "Ingen straf fundet.";
        $array["history_returnto"] = "Retuner til";

        $array["info_banned_player"] = "Forbudt Spiller";
        $array["info_banned_by"] = "Forbud Af";
        $array["info_banned_reason"] = "Grund For Forbud";
        $array["info_banned_when"] = "Forbud Påført";
        $array["info_banned_expiry"] = "Forbud Udløber";
        $array["info_muted_player"] = "Afdæmpet Spiller";
        $array["info_muted_by"] = "Afdæmpet Af";
        $array["info_muted_reason"] = "Grund For Afdæmpelse";
        $array["info_muted_when"] = "Afdæmpelse Påført";
        $array["info_muted_expiry"] = "Afdæmpelse Udløber";
        $array["info_warn_name"] = "Advarelse";
        $array["info_warn_player"] = "Advaret Spiller";
        $array["info_warn_by"] = "Advaret Af";
        $array["info_warn_reason"] = "Advaret Fordi";
        $array["info_warn_when"] = "Advarelse Påført";
        $array["info_warn_expiry"] = "Advarelse Udløber";
        $array["info_kick_player"] = "Sparket Spiller";
        $array["info_kick_by"] = "Sparket Af";
        $array["info_kick_reason"] = "Sparket Fordi";
        $array["info_kick_when"] = "Spark Påført";

        $array["bans_player"] = "Navn";
        $array["bans_by"] = "Forbud Af";
        $array["bans_reason"] = "Forbudt Fordi";
        $array["bans_when"] = "Forbud Påført";
        $array["bans_expiry"] = "Forbudt Indtil";

        $array["kicks_player"] = "Navn";
        $array["kicks_by"] = "Sparket Af";
        $array["kicks_reason"] = "Sparket Fordi";
        $array["kicks_when"] = "Sparket Indtil";

        $array["mutes_player"] = "Navn";
        $array["mutes_by"] = "Afdæmpet Af";
        $array["mutes_reason"] = "Afdæmpet Fordi";
        $array["mutes_when"] = "Afdæmpelse Påført";
        $array["mutes_expiry"] = "Afdæmpet Indtil";

        $array["warns_player"] = "Navn";
        $array["warns_by"] = "Advaret Af";
        $array["warns_reason"] = "Advaret Fordi";
        $array["warns_when"] = "Advaret Indtil";
        $array["warns_receive"] = "Modtog Advarelse";

        // Errors which are only accessible from invalid user input or removed pages.
        $array["check_invalid"] = "Ugyldigt Navn.";
        $array["history_missinguuid"] = "Mangler argumenter (uuid).";
        $array["info_error_missingarg"] = "Mangler argumenter (type, id).";
        $array["info_error_unknown"] = "Ukendt side type anmodet.";
        $array["info_error_invalidid"] = "Ugyldigt ID";
        $array["info_error_notfound1"] = "Fejl: ";
        $array["info_error_notfound2"] = " blev ikke fundet i databasen.";
        $array["info_error_notplayer"] = "Fejl: Spiller ikke fundet.";
        $array["history_playernotfound"] = "Spiller blev ikke fundet i databasen.";
    }
}
