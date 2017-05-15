<?php
class Lang {
    public function __construct() {
        $this->index_welcome1 = 'Bienvenido a la Lista de Sanciones de ';
        $this->index_welcome2 = '.';
        $this->index_allsins = 'Aquí se encuntran todas las Sanciones del Servidor.';
        $this->header_index = 'Inicio';
        $this->header_bans = 'Baneos';
        $this->header_mutes = 'Muteos';
        $this->header_warnings = 'Advertencias';
        $this->header_kicks = 'Expulsiones';

        $this->page_perm_ban = 'Baneo Permanente';
        $this->page_perm_mute = 'Muteo Permanente';
        $this->page_perm_warn = 'Permanente';
        $this->page_expire_ban = '(Desbaneado)';
        $this->page_expire_ban_by = '(Desbaneado por {name})';
        $this->page_expire_mute = '(Desmuteado)';
        $this->page_expire_mute_by = '(Desmuteado por {name})';
        $this->page_expire = '(Expirado)';
        $this->page_title_ban = 'Baneos';
        $this->page_title_mute = 'Muteos';
        $this->page_title_warn = 'Advertencias';
        $this->page_title_kick = 'Expulsiones';
        $this->page_check_user = "Jugador";
        $this->page_check_submit = "Buscar";
        $this->page_page = "Página";

        $this->check_notjoin = "no existe.";

        $this->history_recentby = "Sanciones Recientes por ";
        $this->history_recentfor = "Sanciones Recientes para ";
        $this->history_tabletype = "Sanción";
        $this->history_tableplayer = "Jugador";
        $this->history_tablemoderator = "Moderador";
        $this->history_tablereason = "Razón";
        $this->history_tabledate = "Fecha";
        $this->history_tableexpires = "Expira";
        $this->history_nopunishments = "Castigos No Encontrados.";
        $this->history_returnto = "Volver a";

        $this->info_banned_player = "Jugador Baneado";
        $this->info_banned_by = "Baneado por";
        $this->info_banned_reason = "Razón del Baneo";
        $this->info_banned_when = "Baneado el";
        $this->info_banned_expiry = "Expira";
        $this->info_muted_player = "Jugador Muteado";
        $this->info_muted_by = "Muteado por";
        $this->info_muted_reason = "Razón del Muteo";
        $this->info_muted_when = "Muteado el";
        $this->info_muted_expiry = "Expira";
        $this->info_warn_name = "Advertencia";
        $this->info_warn_player = "Jugador Advertido";
        $this->info_warn_by = "Advertido por";
        $this->info_warn_reason = "Razón de la Advertencia";
        $this->info_warn_when = "Advertido el";
        $this->info_warn_expiry = "Expira";
        $this->info_kick_player = "Jugador Expulsado";
        $this->info_kick_by = "Expulsado por";
        $this->info_kick_reason = "Razón de la Expulsión";
        $this->info_kick_when = "Fecha de la Expulsión";

        $this->bans_player = "Nombre";
        $this->bans_by = "Baneado por";
        $this->bans_reason = "Razón";
        $this->bans_when = "Baneado el";
        $this->bans_expiry = "Baneado hasta";

        $this->kicks_player = "Nombre";
        $this->kicks_by = "Expulsado por";
        $this->kicks_reason = "Razón";
        $this->kicks_when = "Fecha";

        $this->mutes_player = "Nombre";
        $this->mutes_by = "Muteado por";
        $this->mutes_reason = "Razón";
        $this->mutes_when = "Muteado el";
        $this->mutes_expiry = "Muteado hasta";

        $this->warns_player = "Nombre";
        $this->warns_by = "Advertido por";
        $this->warns_reason = "Razón";
        $this->warns_when = "Advertido el";
        $this->warns_receive = "¿Advertencia Recibida?";

        // Errors which are only accessible from invalid user input or removed pages.
        $this->check_invalid = "Nombre Inválido.";
        $this->history_missinguuid = "Argumentos Inválidos (uuid).";
        $this->info_error_missingarg = "Argumentos Inválidos (tipo, id).";
        $this->info_error_unknown = "La página que deseas visitar no existe.";
        $this->info_error_invalidid = "ID Inválida";
        $this->info_error_notfound1 = "Error: ";
        $this->info_error_notfound2 = " no encontrado en la Base de Datos.";
        $this->info_error_notplayer = "Error: Jugador no Encontrado.";
        $this->history_playernotfound = "Jugador No Encontrado en la Base de Datos.";
    }
}
