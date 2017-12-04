<?php

class Lang {
    public function __construct() {
        $array = array();
        $this->array = &$array;
        $array["index_welcome"] = 'ようこそ！ {server} の BANリストへ';
        $array["index_welcome2"] = 'ここには全ての処罰が公開されています';

        $array["header_index"] = 'ホーム';
        $array["header_bans"] = 'BAN';
        $array["header_mutes"] = 'ミュート';
        $array["header_warnings"] = '警告';
        $array["header_kicks"] = 'キック';

        $array["page_perm_ban"] = '無期限BAN';
        $array["page_perm_mute"] = '無期限ミュート';
        $array["page_perm_warn"] = '無期限';
        $array["page_expire_ban"] = '(解除済み)';
        $array["page_expire_ban_by"] = '({name}によって解除されました)';
        $array["page_expire_mute"] = '(解除済み)';
        $array["page_expire_mute_by"] = '({name}によって解除されました)';
        $array["page_expire"] = '(期限が終わりました)';
        $array["page_title_ban"] = 'BAN';
        $array["page_title_mute"] = 'ミュート';
        $array["page_title_warn"] = '警告';
        $array["page_title_kick"] = 'キック';
        $array["page_check_user"] = "プレイヤー";
        $array["page_check_submit"] = "検索";
        $array["page_page"] = "ページ";

        $array["check_notjoin"] = "このプレイヤーはサーバーに参加していません";

        $array["history_recentby"] = "最近の発行:";
        $array["history_recentfor"] = "最近の処罰:";
        $array["history_tabletype"] = "タイプ";
        $array["history_tableplayer"] = "プレイヤー";
        $array["history_tablemoderator"] = "発行";
        $array["history_tablereason"] = "理由";
        $array["history_tabledate"] = "日時";
        $array["history_tableexpires"] = "期限";
        $array["history_nopunishments"] = "処罰データはありません";
        $array["history_returnto"] = "戻る";

        $array["info_banned_player"] = "BANされたプレイヤー";
        $array["info_banned_by"] = "BANしたプレイヤー";
        $array["info_banned_reason"] = "BAN理由";
        $array["info_banned_when"] = "BANされた日時";
        $array["info_banned_expiry"] = "期限";
        $array["info_muted_player"] = "ミュートされたプレイヤー";
        $array["info_muted_by"] = "ミュートにしたプレイヤー";
        $array["info_muted_reason"] = "ミュート理由";
        $array["info_muted_when"] = "ミュートされた日時";
        $array["info_muted_expiry"] = "期限";
        $array["info_warn_name"] = "警告";
        $array["info_warn_player"] = "警告されたプレイヤー";
        $array["info_warn_by"] = "警告したプレイヤー";
        $array["info_warn_reason"] = "警告理由";
        $array["info_warn_when"] = "警告された日時";
        $array["info_warn_expiry"] = "期限";
        $array["info_kick_player"] = "キックされたプレイヤー";
        $array["info_kick_by"] = "キックしたプレイヤー";
        $array["info_kick_reason"] = "キック理由";
        $array["info_kick_when"] = "キックされた日時";

        $array["bans_player"] = "プレイヤー名";
        $array["bans_by"] = "発行者";
        $array["bans_reason"] = "理由";
        $array["bans_when"] = "日時";
        $array["bans_expiry"] = "期限";

        $array["kicks_player"] = "プレイヤー名";
        $array["kicks_by"] = "発行者";
        $array["kicks_reason"] = "理由";
        $array["kicks_when"] = "日時";

        $array["mutes_player"] = "プレイヤー名";
        $array["mutes_by"] = "発行者";
        $array["mutes_reason"] = "理由";
        $array["mutes_when"] = "日時";
        $array["mutes_expiry"] = "期限";

        $array["warns_player"] = "プレイヤー名";
        $array["warns_by"] = "発行者";
        $array["warns_reason"] = "理由";
        $array["warns_when"] = "日時";
        $array["warns_receive"] = "受け取った警告";

        // Errors which are only accessible from invalid user input or removed pages.
        $array["check_invalid"] = "プレイヤー名が無効です";
        $array["history_missinguuid"] = "引数がありません (uuid).";
        $array["info_error_missingarg"] = "引数がありません (type, id).";
        $array["info_error_unknown"] = "無効なページタイプが要求されました";
        $array["info_error_invalidid"] = "無効なID";
        $array["info_error_notfound1"] = "エラー: ";
        $array["info_error_notfound2"] = " はデータベースで見つかりません";
        $array["info_error_notplayer"] = "エラー: プレイヤーが見つかりません";
        $array["history_playernotfound"] = "データベースでプレイヤーは見つかりません";
    }
}
