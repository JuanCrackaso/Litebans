<?php

class Lang {
    public function __construct() {
        $this->index_welcome1 = 'Welcome to ';
        $this->index_welcome2 = '\'s Ban List.';
        $this->index_allsins = 'Here is where all of our punishments are listed.';

        $this->header_index = 'Home';
        $this->header_bans = 'Bans';
        $this->header_mutes = 'Mutes';
        $this->header_warnings = 'Warnings';
        $this->header_kicks = 'Kicks';

        $this->page_perm_ban = 'Permanent Ban';
        $this->page_perm_mute = 'Permanent Mute';
        $this->page_perm_warn = 'Permanent';
        $this->page_expire_ban = '(Unbanned)';
        $this->page_expire_ban_by = '(Unbanned by {name})';
        $this->page_expire_mute = '(Unmuted)';
        $this->page_expire_mute_by = '(Unmuted by {name})';
        $this->page_expire = '(Expired)';
        $this->page_title_ban = 'Bans';
        $this->page_title_mute = 'Mutes';
        $this->page_title_warn = 'Warnings';
        $this->page_title_kick = 'Kicks';
        $this->page_check_user = "Player";
        $this->page_check_submit = "Check";
        $this->page_page = "Page";

        $this->check_notjoin = "has not joined before.";

        $this->history_recentby = "Recent Punishments by ";
        $this->history_recentfor = "Recent Punishments for ";
        $this->history_tabletype = "Type";
        $this->history_tableplayer = "Player";
        $this->history_tablemoderator = "Moderator";
        $this->history_tablereason = "Reason";
        $this->history_tabledate = "Date";
        $this->history_tableexpires = "Expires";
        $this->history_nopunishments = "No punishments found.";
        $this->history_returnto = "Return to";

        $this->info_banned_player = "Banned Player";
        $this->info_banned_by = "Banned By";
        $this->info_banned_reason = "Ban Reason";
        $this->info_banned_when = "Ban Placed";
        $this->info_banned_expiry = "Expires";
        $this->info_muted_player = "Muted Player";
        $this->info_muted_by = "Muted By";
        $this->info_muted_reason = "Mute Reason";
        $this->info_muted_when = "Mute Placed";
        $this->info_muted_expiry = "Expires";
        $this->info_warn_name = "Warning";
        $this->info_warn_player = "Warned Player";
        $this->info_warn_by = "Warned By";
        $this->info_warn_reason = "Warning Reason";
        $this->info_warn_when = "Warning Placed";
        $this->info_warn_expiry = "Expires";
        $this->info_kick_player = "Kicked Player";
        $this->info_kick_by = "Kicked By";
        $this->info_kick_reason = "Kick Reason";
        $this->info_kick_when = "Kick Date";

        $this->bans_player = "Name";
        $this->bans_by = "Banned By";
        $this->bans_reason = "Reason";
        $this->bans_when = "Banned On";
        $this->bans_expiry = "Banned Until";

        $this->kicks_player = "Name";
        $this->kicks_by = "Kicked By";
        $this->kicks_reason = "Reason";
        $this->kicks_when = "Date";

        $this->mutes_player = "Name";
        $this->mutes_by = "Muted By";
        $this->mutes_reason = "Reason";
        $this->mutes_when = "Muted On";
        $this->mutes_expiry = "Muted Until";

        $this->warns_player = "Name";
        $this->warns_by = "Warned By";
        $this->warns_reason = "Reason";
        $this->warns_when = "Warned Until";
        $this->warns_receive = "Received Warning";

        // Errors which are only accessible from invalid user input or removed pages.
        $this->check_invalid = "Invalid name.";
        $this->history_missinguuid = "Missing arguments (uuid).";
        $this->info_error_missingarg = "Missing arguments (type, id).";
        $this->info_error_unknown = "Unknown page type requested.";
        $this->info_error_invalidid = "Invalid ID";
        $this->info_error_notfound1 = "Error: ";
        $this->info_error_notfound2 = " not found in database.";
        $this->info_error_notplayer = "Error: Player name not found.";
        $this->history_playernotfound = "Player not found in database.";
    }
}
