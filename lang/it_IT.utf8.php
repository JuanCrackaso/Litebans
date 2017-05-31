<?php

class Lang {
    public function __construct() {
        $this->index_welcome1 = 'Benvenuto nella lista ban di ';
        $this->index_welcome2 = '.';
        $this->index_allsins = 'Qui ci saranno tutte le punizioni dei giocatori.';

        $this->header_index = 'Home';
        $this->header_bans = 'Ban';
        $this->header_mutes = 'Mute';
        $this->header_warnings = 'Warning';
        $this->header_kicks = 'Kick';

        $this->page_perm_ban = 'Ban Permanente';
        $this->page_perm_mute = 'Mute Permanente';
        $this->page_perm_warn = 'Permanente';
        $this->page_expire_ban = '(Sbannato)';
        $this->page_expire_ban_by = '(Sbannato da {name})';
        $this->page_expire_mute = '(Smutato)';
        $this->page_expire_mute_by = '(Smutato da {name})';
        $this->page_expire = '(Terminato)';
        $this->page_title_ban = 'Ban';
        $this->page_title_mute = 'Mute';
        $this->page_title_warn = 'Warning';
        $this->page_title_kick = 'Kick';
        $this->page_check_user = "Giocatore";
        $this->page_check_submit = "Controlla";
        $this->page_page = "Pagina";

        $this->check_notjoin = "non è mai entrato nel server.";

        $this->history_recentby = "punizioni recenti di ";
        $this->history_recentfor = "punizioni recenti per  ";
        $this->history_tabletype = "Tipo";
        $this->history_tableplayer = "Giocatore";
        $this->history_tablemoderator = "Moderatore";
        $this->history_tablereason = "Motivo";
        $this->history_tabledate = "Data";
        $this->history_tableexpires = "Termina";
        $this->history_nopunishments = "Nessuna punizione trovata.";
        $this->history_returnto = "Torna a";

        $this->info_banned_player = "Giocatore bannato";
        $this->info_banned_by = "Bannato da";
        $this->info_banned_reason = "Motivo Ban";
        $this->info_banned_when = "Banato il";
        $this->info_banned_expiry = "Termina il";
        $this->info_muted_player = "Giocatore mutato";
        $this->info_muted_by = "Mutato da";
        $this->info_muted_reason = "Motivo mute";
        $this->info_muted_when = "Mutato il";
        $this->info_muted_expiry = "Termina il";
        $this->info_warn_name = "Warning";
        $this->info_warn_player = "Player Ammonito";
        $this->info_warn_by = "Ammonito da";
        $this->info_warn_reason = "Motivo ammonizione";
        $this->info_warn_when = "Ammonito il";
        $this->info_warn_expiry = "Termina il";
        $this->info_kick_player = "Giocatore kickato";
        $this->info_kick_by = "Kickato da";
        $this->info_kick_reason = "Motivo Kick";
        $this->info_kick_when = "Data Kick";

        $this->bans_player = "Nome";
        $this->bans_by = "Bannato da";
        $this->bans_reason = "Motivo";
        $this->bans_when = "Bannato il";
        $this->bans_expiry = "Durata ban";

        $this->kicks_player = "Nome";
        $this->kicks_by = "Kickato da";
        $this->kicks_reason = "Motivo";
        $this->kicks_when = "Data";

        $this->mutes_player = "Nome";
        $this->mutes_by = "Mutato da";
        $this->mutes_reason = "Motivo";
        $this->mutes_when = "Mutato il";
        $this->mutes_expiry = "Durata mute";

        $this->warns_player = "Nome";
        $this->warns_by = "Avvertito da";
        $this->warns_reason = "Motivo";
        $this->warns_when = "Avvertuti il";
        $this->warns_receive = "Avvertimento ricevuto";

        // Errors which are only accessible from invalid user input or removed pages.
        $this->check_invalid = "Nome invalido.";
        $this->history_missinguuid = "Argomenti mancanti (uuid).";
        $this->info_error_missingarg = "Argomenti mancanti (type, id).";
        $this->info_error_unknown = "Pagina richiesta sconosciuta.";
        $this->info_error_invalidid = "ID Invalido";
        $this->info_error_notfound1 = "Errore: ";
        $this->info_error_notfound2 = " Non trovato nel database.";
        $this->info_error_notplayer = "Errore: Giocatore non trovato";
        $this->history_playernotfound = "Giocatore non trovato nel database.";
    }
}
