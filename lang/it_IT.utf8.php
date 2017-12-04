<?php

class Lang {
    public function __construct() {
        $array = array();
        $this->array = &$array;
        $array["index_welcome"] = 'Benvenuto nella lista ban di {server}.';
        $array["index_allsins"] = 'Qui ci saranno tutte le punizioni dei giocatori.';

        $array["header_index"] = 'Home';
        $array["header_bans"] = 'Ban';
        $array["header_mutes"] = 'Mute';
        $array["header_warnings"] = 'Warning';
        $array["header_kicks"] = 'Kick';

        $array["page_perm_ban"] = 'Ban Permanente';
        $array["page_perm_mute"] = 'Mute Permanente';
        $array["page_perm_warn"] = 'Permanente';
        $array["page_expire_ban"] = '(Sbannato)';
        $array["page_expire_ban_by"] = '(Sbannato da {name})';
        $array["page_expire_mute"] = '(Smutato)';
        $array["page_expire_mute_by"] = '(Smutato da {name})';
        $array["page_expire"] = '(Terminato)';
        $array["page_title_ban"] = 'Ban';
        $array["page_title_mute"] = 'Mute';
        $array["page_title_warn"] = 'Warning';
        $array["page_title_kick"] = 'Kick';
        $array["page_check_user"] = "Giocatore";
        $array["page_check_submit"] = "Controlla";
        $array["page_page"] = "Pagina";

        $array["check_notjoin"] = "non è mai entrato nel server.";

        $array["history_recentby"] = "punizioni recenti di ";
        $array["history_recentfor"] = "punizioni recenti per  ";
        $array["history_tabletype"] = "Tipo";
        $array["history_tableplayer"] = "Giocatore";
        $array["history_tablemoderator"] = "Moderatore";
        $array["history_tablereason"] = "Motivo";
        $array["history_tabledate"] = "Data";
        $array["history_tableexpires"] = "Termina";
        $array["history_nopunishments"] = "Nessuna punizione trovata.";
        $array["history_returnto"] = "Torna a";

        $array["info_banned_player"] = "Giocatore bannato";
        $array["info_banned_by"] = "Bannato da";
        $array["info_banned_reason"] = "Motivo Ban";
        $array["info_banned_when"] = "Banato il";
        $array["info_banned_expiry"] = "Termina il";
        $array["info_muted_player"] = "Giocatore mutato";
        $array["info_muted_by"] = "Mutato da";
        $array["info_muted_reason"] = "Motivo mute";
        $array["info_muted_when"] = "Mutato il";
        $array["info_muted_expiry"] = "Termina il";
        $array["info_warn_name"] = "Warning";
        $array["info_warn_player"] = "Player Ammonito";
        $array["info_warn_by"] = "Ammonito da";
        $array["info_warn_reason"] = "Motivo ammonizione";
        $array["info_warn_when"] = "Ammonito il";
        $array["info_warn_expiry"] = "Termina il";
        $array["info_kick_player"] = "Giocatore kickato";
        $array["info_kick_by"] = "Kickato da";
        $array["info_kick_reason"] = "Motivo Kick";
        $array["info_kick_when"] = "Data Kick";

        $array["bans_player"] = "Nome";
        $array["bans_by"] = "Bannato da";
        $array["bans_reason"] = "Motivo";
        $array["bans_when"] = "Bannato il";
        $array["bans_expiry"] = "Durata ban";

        $array["kicks_player"] = "Nome";
        $array["kicks_by"] = "Kickato da";
        $array["kicks_reason"] = "Motivo";
        $array["kicks_when"] = "Data";

        $array["mutes_player"] = "Nome";
        $array["mutes_by"] = "Mutato da";
        $array["mutes_reason"] = "Motivo";
        $array["mutes_when"] = "Mutato il";
        $array["mutes_expiry"] = "Durata mute";

        $array["warns_player"] = "Nome";
        $array["warns_by"] = "Avvertito da";
        $array["warns_reason"] = "Motivo";
        $array["warns_when"] = "Avvertuti il";
        $array["warns_receive"] = "Avvertimento ricevuto";

        // Errors which are only accessible from invalid user input or removed pages.
        $array["check_invalid"] = "Nome invalido.";
        $array["history_missinguuid"] = "Argomenti mancanti (uuid).";
        $array["info_error_missingarg"] = "Argomenti mancanti (type, id).";
        $array["info_error_unknown"] = "Pagina richiesta sconosciuta.";
        $array["info_error_invalidid"] = "ID Invalido";
        $array["info_error_notfound1"] = "Errore: ";
        $array["info_error_notfound2"] = " Non trovato nel database.";
        $array["info_error_notplayer"] = "Errore: Giocatore non trovato";
        $array["history_playernotfound"] = "Giocatore non trovato nel database.";
    }
}
