<?php

class Lang {
    public function __construct() {
        $this->index_welcome1 = 'Welkom op ';
        $this->index_welcome2 = '\'s Ban Lijst.';
        $this->index_allsins = 'Hier staan al onze uitgedeelde straffen.';

        $this->header_index = 'Home';
        $this->header_bans = 'Bans';
        $this->header_mutes = 'Mutes';
        $this->header_warnings = 'Waarschuwingen';
        $this->header_kicks = 'Kicks';

        $this->page_perm_ban = 'Permanente Ban';
        $this->page_perm_mute = 'Permanente Mute';
        $this->page_perm_warn = 'Permanent';
        $this->page_expire_ban = '(Unbanned)';
        $this->page_expire_ban_by = '(Unbanned door {name})';
        $this->page_expire_mute = '(Unmuted)';
        $this->page_expire_mute_by = '(Unmuted door {name})';
        $this->page_expire = '(Verlopen)';
        $this->page_title_ban = 'Bans';
        $this->page_title_mute = 'Mutes';
        $this->page_title_warn = 'Waarschuwingen';
        $this->page_title_kick = 'Kicks';
        $this->page_check_user = "Player";
        $this->page_check_submit = "Check";
        $this->page_page = "Pagina";

        $this->check_notjoin = "heeft niet eerder deelgenomen.";

        $this->history_recentby = "Recente straffen door ";
        $this->history_recentfor = "Recente straffen voor ";
        $this->history_tabletype = "Type";
        $this->history_tableplayer = "Player";
        $this->history_tablemoderator = "Moderator";
        $this->history_tablereason = "Rede";
        $this->history_tabledate = "Datum";
        $this->history_tableexpires = "Verloopt";
        $this->history_nopunishments = "Geen straffen gevonden.";
        $this->history_returnto = "Terug naar";

        $this->info_banned_player = "Verbannen speler";
        $this->info_banned_by = "Geband door";
        $this->info_banned_reason = "Ban rede";
        $this->info_banned_when = "Ban datum";
        $this->info_banned_expiry = "Verloopt";
        $this->info_muted_player = "Muted speler";
        $this->info_muted_by = "Gemute door";
        $this->info_muted_reason = "Mute rede";
        $this->info_muted_when = "Mute datum";
        $this->info_muted_expiry = "Verloopt";
        $this->info_warn_name = "Waarschuwing";
        $this->info_warn_player = "Gewaarschuwde speler";
        $this->info_warn_by = "Gewaarschuwd door";
        $this->info_warn_reason = "Waarschuwing rede";
        $this->info_warn_when = "Waarschuwing datum";
        $this->info_warn_expiry = "Verloopt";
        $this->info_kick_player = "Kicked speler";
        $this->info_kick_by = "Kicked door";
        $this->info_kick_reason = "Kick rede";
        $this->info_kick_when = "Kick datum";

        $this->bans_player = "Naam";
        $this->bans_by = "Geband door";
        $this->bans_reason = "Rede";
        $this->bans_when = "Geband door";
        $this->bans_expiry = "Geband tot";

        $this->kicks_player = "Naam";
        $this->kicks_by = "Gekickt door";
        $this->kicks_reason = "Rede";
        $this->kicks_when = "Gekickt op";

        $this->mutes_player = "Naam";
        $this->mutes_by = "Muted door";
        $this->mutes_reason = "Rede";
        $this->mutes_when = "Gemute op";
        $this->mutes_expiry = "Gemute tot";

        $this->warns_player = "Naam";
        $this->warns_by = "Gewaarschuwd door";
        $this->warns_reason = "Rede";
        $this->warns_when = "Gewaarschuwing tot";
        $this->warns_receive = "Waarschuwing ontvangen";

        // Errors which are only accessible from invalid user input or removed pages.
        $this->check_invalid = "Ongeldige naam.";
        $this->history_missinguuid = "Missende parameter (uuid).";
        $this->info_error_missingarg = "Missende parameter (type, id).";
        $this->info_error_unknown = "Ongebekende pagina type opgevraagd.";
        $this->info_error_invalidid = "Ongeldig ID";
        $this->info_error_notfound1 = "Error: ";
        $this->info_error_notfound2 = " niet gevonden in de database.";
        $this->info_error_notplayer = "Error: Spelernaam niet gevonden.";
        $this->history_playernotfound = "Speler niet gevonden in de database.";
    }
}
