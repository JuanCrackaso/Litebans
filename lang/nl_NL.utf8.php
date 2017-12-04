<?php

class Lang {
    public function __construct() {
        $array = array();
        $this->array = &$array;
        $array["index_welcome1"] = "Welkom op {server}'s Ban Lijst.";
        $array["index_welcome2"] = 'Hier staan al onze uitgedeelde straffen.';

        $array["header_index"] = 'Home';
        $array["header_bans"] = 'Bans';
        $array["header_mutes"] = 'Mutes';
        $array["header_warnings"] = 'Waarschuwingen';
        $array["header_kicks"] = 'Kicks';

        $array["page_perm_ban"] = 'Permanente Ban';
        $array["page_perm_mute"] = 'Permanente Mute';
        $array["page_perm_warn"] = 'Permanent';
        $array["page_expire_ban"] = '(Unbanned)';
        $array["page_expire_ban_by"] = '(Unbanned door {name})';
        $array["page_expire_mute"] = '(Unmuted)';
        $array["page_expire_mute_by"] = '(Unmuted door {name})';
        $array["page_expire"] = '(Verlopen)';
        $array["page_title_ban"] = 'Bans';
        $array["page_title_mute"] = 'Mutes';
        $array["page_title_warn"] = 'Waarschuwingen';
        $array["page_title_kick"] = 'Kicks';
        $array["page_check_user"] = "Player";
        $array["page_check_submit"] = "Check";
        $array["page_page"] = "Pagina";

        $array["check_notjoin"] = "heeft niet eerder deelgenomen.";

        $array["history_recentby"] = "Recente straffen door ";
        $array["history_recentfor"] = "Recente straffen voor ";
        $array["history_tabletype"] = "Type";
        $array["history_tableplayer"] = "Player";
        $array["history_tablemoderator"] = "Moderator";
        $array["history_tablereason"] = "Rede";
        $array["history_tabledate"] = "Datum";
        $array["history_tableexpires"] = "Verloopt";
        $array["history_nopunishments"] = "Geen straffen gevonden.";
        $array["history_returnto"] = "Terug naar";

        $array["info_banned_player"] = "Verbannen speler";
        $array["info_banned_by"] = "Geband door";
        $array["info_banned_reason"] = "Ban rede";
        $array["info_banned_when"] = "Ban datum";
        $array["info_banned_expiry"] = "Verloopt";
        $array["info_muted_player"] = "Muted speler";
        $array["info_muted_by"] = "Gemute door";
        $array["info_muted_reason"] = "Mute rede";
        $array["info_muted_when"] = "Mute datum";
        $array["info_muted_expiry"] = "Verloopt";
        $array["info_warn_name"] = "Waarschuwing";
        $array["info_warn_player"] = "Gewaarschuwde speler";
        $array["info_warn_by"] = "Gewaarschuwd door";
        $array["info_warn_reason"] = "Waarschuwing rede";
        $array["info_warn_when"] = "Waarschuwing datum";
        $array["info_warn_expiry"] = "Verloopt";
        $array["info_kick_player"] = "Kicked speler";
        $array["info_kick_by"] = "Kicked door";
        $array["info_kick_reason"] = "Kick rede";
        $array["info_kick_when"] = "Kick datum";

        $array["bans_player"] = "Naam";
        $array["bans_by"] = "Geband door";
        $array["bans_reason"] = "Rede";
        $array["bans_when"] = "Geband door";
        $array["bans_expiry"] = "Geband tot";

        $array["kicks_player"] = "Naam";
        $array["kicks_by"] = "Gekickt door";
        $array["kicks_reason"] = "Rede";
        $array["kicks_when"] = "Gekickt op";

        $array["mutes_player"] = "Naam";
        $array["mutes_by"] = "Muted door";
        $array["mutes_reason"] = "Rede";
        $array["mutes_when"] = "Gemute op";
        $array["mutes_expiry"] = "Gemute tot";

        $array["warns_player"] = "Naam";
        $array["warns_by"] = "Gewaarschuwd door";
        $array["warns_reason"] = "Rede";
        $array["warns_when"] = "Gewaarschuwing tot";
        $array["warns_receive"] = "Waarschuwing ontvangen";

        // Errors which are only accessible from invalid user input or removed pages.
        $array["check_invalid"] = "Ongeldige naam.";
        $array["history_missinguuid"] = "Missende parameter (uuid).";
        $array["info_error_missingarg"] = "Missende parameter (type, id).";
        $array["info_error_unknown"] = "Ongebekende pagina type opgevraagd.";
        $array["info_error_invalidid"] = "Ongeldig ID";
        $array["info_error_notfound1"] = "Error: ";
        $array["info_error_notfound2"] = " niet gevonden in de database.";
        $array["info_error_notplayer"] = "Error: Spelernaam niet gevonden.";
        $array["history_playernotfound"] = "Speler niet gevonden in de database.";
    }
}
