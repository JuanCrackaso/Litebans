<?php

class Lang {
    public function __construct() {
        $this->index_welcome1 = 'Velkommen Til ';
        $this->index_welcome2 = '\'s Ban Liste.';
        $this->index_allsins = 'Her er all dine afstraffelser listed.';

        $this->header_index = 'Hjem';
        $this->header_bans = 'Forbud';
        $this->header_mutes = 'Dæmpelser';
        $this->header_warnings = 'Advarelser';
        $this->header_kicks = 'Spark';

        $this->page_perm_ban = 'Permanent Forbud';
        $this->page_perm_mute = 'Permanent Dæmpelse';
        $this->page_perm_warn = 'Permanent';
        $this->page_expire_ban = '(Forbud Ophævet)';
        $this->page_expire_ban_by = '(Forbud Ophævet af {name})';
        $this->page_expire_mute = '(Dæmpelse Fjernet)';
        $this->page_expire_mute_by = '(Dæmpelse Fjernet af {name})';
        $this->page_expire = '(Udløbet)';
        $this->page_title_ban = 'Forbud';
        $this->page_title_mute = 'Dæmpelser';
        $this->page_title_warn = 'Advarelser';
        $this->page_title_kick = 'Spark';
        $this->page_check_user = "Spiller";
        $this->page_check_submit = "Tjek";
        $this->page_page = "Side";

        $this->check_notjoin = "har ikke været på serveren.";

        $this->history_recentby = "Seneste Straffe af ";
        $this->history_recentfor = "Senseste for ";
        $this->history_tabletype = "Type";
        $this->history_tableplayer = "Spiller";
        $this->history_tablemoderator = "Moderator";
        $this->history_tablereason = "Grund";
        $this->history_tabledate = "Dato";
        $this->history_tableexpires = "Udløber";
        $this->history_nopunishments = "Ingen straf fundet.";
        $this->history_returnto = "Retuner til";

        $this->info_banned_player = "Forbudt Spiller";
        $this->info_banned_by = "Forbud Af";
        $this->info_banned_reason = "Grund For Forbud";
        $this->info_banned_when = "Forbud Påført";
        $this->info_banned_expiry = "Forbud Udløber";
        $this->info_muted_player = "Afdæmpet Spiller";
        $this->info_muted_by = "Afdæmpet Af";
        $this->info_muted_reason = "Grund For Afdæmpelse";
        $this->info_muted_when = "Afdæmpelse Påført";
        $this->info_muted_expiry = "Afdæmpelse Udløber";
        $this->info_warn_name = "Advarelse";
        $this->info_warn_player = "Advaret Spiller";
        $this->info_warn_by = "Advaret Af";
        $this->info_warn_reason = "Advaret Fordi";
        $this->info_warn_when = "Advarelse Påført";
        $this->info_warn_expiry = "Advarelse Udløber";
        $this->info_kick_player = "Sparket Spiller";
        $this->info_kick_by = "Sparket Af";
        $this->info_kick_reason = "Sparket Fordi";
        $this->info_kick_when = "Spark Påført";

        $this->bans_player = "Navn";
        $this->bans_by = "Forbud Af";
        $this->bans_reason = "Forbudt Fordi";
        $this->bans_when = "Forbud Påført";
        $this->bans_expiry = "Forbudt Indtil";

        $this->kicks_player = "Navn";
        $this->kicks_by = "Sparket Af";
        $this->kicks_reason = "Sparket Fordi";
        $this->kicks_when = "Sparket Indtil";

        $this->mutes_player = "Navn";
        $this->mutes_by = "Afdæmpet Af";
        $this->mutes_reason = "Afdæmpet Fordi";
        $this->mutes_when = "Afdæmpelse Påført";
        $this->mutes_expiry = "Afdæmpet Indtil";

        $this->warns_player = "Navn";
        $this->warns_by = "Advaret Af";
        $this->warns_reason = "Advaret Fordi";
        $this->warns_when = "Advaret Indtil";
        $this->warns_receive = "Modtog Advarelse";

        // Errors which are only accessible from invalid user input or removed pages.
        $this->check_invalid = "Ugyldigt Navn.";
        $this->history_missinguuid = "Mangler argumenter (uuid).";
        $this->info_error_missingarg = "Mangler argumenter (type, id).";
        $this->info_error_unknown = "Ukendt side type anmodet.";
        $this->info_error_invalidid = "Ugyldigt ID";
        $this->info_error_notfound1 = "Fejl: ";
        $this->info_error_notfound2 = " blev ikke fundet i databasen.";
        $this->info_error_notplayer = "Fejl: Spiller ikke fundet.";
        $this->history_playernotfound = "Spiller blev ikke fundet i databasen.";
    }
}
