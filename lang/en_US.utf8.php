<?php

class DefaultLang {
    public function __construct() {
        $array = array();
        $this->array = &$array;
        $array["index_welcome"] = "Welcome to {server}'s Ban List.";
        $array["index_welcome2"] = "Here is where all of our punishments are listed.";

        $array["header_index"] = 'Home';
        $array["header_bans"] = 'Bans';
        $array["header_mutes"] = 'Mutes';
        $array["header_warnings"] = 'Warnings';
        $array["header_kicks"] = 'Kicks';

        $array["page_perm_ban"] = 'Permanent Ban';
        $array["page_perm_mute"] = 'Permanent Mute';
        $array["page_perm_warn"] = 'Permanent';
        $array["page_expire_ban"] = '(Unbanned)';
        $array["page_expire_ban_by"] = '(Unbanned by {name})';
        $array["page_expire_mute"] = '(Unmuted)';
        $array["page_expire_mute_by"] = '(Unmuted by {name})';
        $array["page_expire"] = '(Expired)';
        $array["page_title_ban"] = 'Bans';
        $array["page_title_mute"] = 'Mutes';
        $array["page_title_warn"] = 'Warnings';
        $array["page_title_kick"] = 'Kicks';
        $array["page_check_user"] = "Player";
        $array["page_check_submit"] = "Check";
        $array["page_page"] = "Page";

        $array["check_notjoin"] = "has not joined before.";

        $array["history_recentby"] = "Recent Punishments by ";
        $array["history_recentfor"] = "Recent Punishments for ";
        $array["history_tabletype"] = "Type";
        $array["history_tableplayer"] = "Player";
        $array["history_tablemoderator"] = "Moderator";
        $array["history_tablereason"] = "Reason";
        $array["history_tabledate"] = "Date";
        $array["history_tableexpires"] = "Expires";
        $array["history_nopunishments"] = "No punishments found.";
        $array["history_returnto"] = "Return to";

        $array["info_banned_player"] = "Banned Player";
        $array["info_banned_by"] = "Banned By";
        $array["info_banned_reason"] = "Ban Reason";
        $array["info_banned_when"] = "Ban Placed";
        $array["info_banned_expiry"] = "Expires";
        $array["info_muted_player"] = "Muted Player";
        $array["info_muted_by"] = "Muted By";
        $array["info_muted_reason"] = "Mute Reason";
        $array["info_muted_when"] = "Mute Placed";
        $array["info_muted_expiry"] = "Expires";
        $array["info_warn_name"] = "Warning";
        $array["info_warn_player"] = "Warned Player";
        $array["info_warn_by"] = "Warned By";
        $array["info_warn_reason"] = "Warning Reason";
        $array["info_warn_when"] = "Warning Placed";
        $array["info_warn_expiry"] = "Expires";
        $array["info_kick_player"] = "Kicked Player";
        $array["info_kick_by"] = "Kicked By";
        $array["info_kick_reason"] = "Kick Reason";
        $array["info_kick_when"] = "Kick Date";

        $array["bans_player"] = "Name";
        $array["bans_by"] = "Banned By";
        $array["bans_reason"] = "Reason";
        $array["bans_when"] = "Banned On";
        $array["bans_expiry"] = "Banned Until";

        $array["kicks_player"] = "Name";
        $array["kicks_by"] = "Kicked By";
        $array["kicks_reason"] = "Reason";
        $array["kicks_when"] = "Date";

        $array["mutes_player"] = "Name";
        $array["mutes_by"] = "Muted By";
        $array["mutes_reason"] = "Reason";
        $array["mutes_when"] = "Muted On";
        $array["mutes_expiry"] = "Muted Until";

        $array["warns_player"] = "Name";
        $array["warns_by"] = "Warned By";
        $array["warns_reason"] = "Reason";
        $array["warns_when"] = "Warned Until";
        $array["warns_receive"] = "Received Warning";

        // Errors which are only accessible from invalid user input or removed pages.
        $array["check_invalid"] = "Invalid name.";
        $array["history_missinguuid"] = "Missing arguments (uuid).";
        $array["info_error_missingarg"] = "Missing arguments (type, id).";
        $array["info_error_unknown"] = "Unknown page type requested.";
        $array["info_error_invalidid"] = "Invalid ID";
        $array["info_error_notfound1"] = "Error: ";
        $array["info_error_notfound2"] = " not found in database.";
        $array["info_error_notplayer"] = "Error: Player name not found.";
        $array["history_playernotfound"] = "Player not found in database.";
    }
}
