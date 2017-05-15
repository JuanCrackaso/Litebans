<?php

class Lang {
    public function __construct() {
        $this->index_welcome1 = 'ようこそ！ ';
        $this->index_welcome2 = 'の BANリストへ';
        $this->index_allsins = 'ここには全ての処罰が公開されています';

        $this->header_index = 'ホーム';
        $this->header_bans = 'BAN';
        $this->header_mutes = 'ミュート';
        $this->header_warnings = '警告';
        $this->header_kicks = 'キック';

        $this->page_perm_ban = '無期限BAN';
        $this->page_perm_mute = '無期限ミュート';
        $this->page_perm_warn = '無期限';
        $this->page_expire_ban = '(解除済み)';
        $this->page_expire_ban_by = '({name}によって解除されました)';
        $this->page_expire_mute = '(解除済み)';
        $this->page_expire_mute_by = '({name}によって解除されました)';
        $this->page_expire = '(期限が終わりました)';
        $this->page_title_ban = 'BAN';
        $this->page_title_mute = 'ミュート';
        $this->page_title_warn = '警告';
        $this->page_title_kick = 'キック';
        $this->page_check_user = "プレイヤー";
        $this->page_check_submit = "検索";
        $this->page_page = "ページ";

        $this->check_notjoin = "このプレイヤーはサーバーに参加していません";

        $this->history_recentby = "最近の発行:";
        $this->history_recentfor = "最近の処罰:";
        $this->history_tabletype = "タイプ";
        $this->history_tableplayer = "プレイヤー";
        $this->history_tablemoderator = "発行";
        $this->history_tablereason = "理由";
        $this->history_tabledate = "日時";
        $this->history_tableexpires = "期限";
        $this->history_nopunishments = "処罰データはありません";
        $this->history_returnto = "戻る";

        $this->info_banned_player = "BANされたプレイヤー";
        $this->info_banned_by = "BANしたプレイヤー";
        $this->info_banned_reason = "BAN理由";
        $this->info_banned_when = "BANされた日時";
        $this->info_banned_expiry = "期限";
        $this->info_muted_player = "ミュートされたプレイヤー";
        $this->info_muted_by = "ミュートにしたプレイヤー";
        $this->info_muted_reason = "ミュート理由";
        $this->info_muted_when = "ミュートされた日時";
        $this->info_muted_expiry = "期限";
        $this->info_warn_name = "警告";
        $this->info_warn_player = "警告されたプレイヤー";
        $this->info_warn_by = "警告したプレイヤー";
        $this->info_warn_reason = "警告理由";
        $this->info_warn_when = "警告された日時";
        $this->info_warn_expiry = "期限";
        $this->info_kick_player = "キックされたプレイヤー";
        $this->info_kick_by = "キックしたプレイヤー";
        $this->info_kick_reason = "キック理由";
        $this->info_kick_when = "キックされた日時";

        $this->bans_player = "プレイヤー名";
        $this->bans_by = "発行者";
        $this->bans_reason = "理由";
        $this->bans_when = "日時";
        $this->bans_expiry = "期限";

        $this->kicks_player = "プレイヤー名";
        $this->kicks_by = "発行者";
        $this->kicks_reason = "理由";
        $this->kicks_when = "日時";

        $this->mutes_player = "プレイヤー名";
        $this->mutes_by = "発行者";
        $this->mutes_reason = "理由";
        $this->mutes_when = "日時";
        $this->mutes_expiry = "期限";

        $this->warns_player = "プレイヤー名";
        $this->warns_by = "発行者";
        $this->warns_reason = "理由";
        $this->warns_when = "日時";
        $this->warns_receive = "受け取った警告";

        // Errors which are only accessible from invalid user input or removed pages.
        $this->check_invalid = "プレイヤー名が無効です";
        $this->history_missinguuid = "引数がありません (uuid).";
        $this->info_error_missingarg = "引数がありません (type, id).";
        $this->info_error_unknown = "無効なページタイプが要求されました";
        $this->info_error_invalidid = "無効なID";
        $this->info_error_notfound1 = "エラー: ";
        $this->info_error_notfound2 = " はデータベースで見つかりません";
        $this->info_error_notplayer = "エラー: プレイヤーが見つかりません";
        $this->history_playernotfound = "データベースでプレイヤーは見つかりません";
    }
}
