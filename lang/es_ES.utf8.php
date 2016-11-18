<?php
class Lang {
    public function __construct() {
        $this->index_welcome1 = 'Bienvenido a la Lista de Sanciones de ';
        $this->index_welcome2 = ' Network!';
        $this->index_allsins = 'Aqui se Encuntran todas las Sanciones de la Network.';
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
        $this->page_check_submit = "Verificar";
        $this->page_page = "Pagina";

        $this->check_notjoin = "no ha entrado antes.";

        $this->history_recentby = "Sanciones Recientes por ";
        $this->history_recentfor = "Sanciones Recientes para ";
        $this->history_tabletype = "Tipo";
        $this->history_tableplayer = "Jugador";
        $this->history_tablemoderator = "Moderador";
        $this->history_tablereason = "Razo";
        $this->history_tabledate = "Fecha";
        $this->history_tableexpires = "Expira";
        $this->history_nopunishments = "Castigos No Encontrados.";
        $this->history_returnto = "Volver a";

        $this->info_banned_player = "Jugador Baneado";
        $this->info_banned_by = "Baneado por";
        $this->info_banned_reason = "Razon del Baneo";
        $this->info_banned_when = "Baneado en";
        $this->info_banned_expiry = "Expira";
        $this->info_muted_player = "Jugador Muteado";
        $this->info_muted_by = "Muteado por";
        $this->info_muted_reason = "Razon del Muteo";
        $this->info_muted_when = "Muteado en";
        $this->info_muted_expiry = "Expira";
        $this->info_warn_name = "Advertencia";
        $this->info_warn_player = "Jugador Advertido";
        $this->info_warn_by = "Advertido por";
        $this->info_warn_reason = "Razon de la Advertencia";
        $this->info_warn_when = "Advertido en";
        $this->info_warn_expiry = "Expira";
        $this->info_kick_player = "Jugador Kickeado";
        $this->info_kick_by = "Expulsado en";
        $this->info_kick_reason = "Razon de la Expulsion";
        $this->info_kick_when = "Fecha de la Expulsion";

        $this->bans_player = "Nombre";
        $this->bans_by = "Baneado por";
        $this->bans_reason = "Razon";
        $this->bans_when = "Baneado en";
        $this->bans_expiry = "Baneado hasta";

        $this->kicks_player = "Nombre";
        $this->kicks_by = "Expulsado por";
        $this->kicks_reason = "Razon";
        $this->kicks_when = "Fecha";

        $this->mutes_player = "Nombre";
        $this->mutes_by = "Muteado por";
        $this->mutes_reason = "Razon";
        $this->mutes_when = "Muteado en";
        $this->mutes_expiry = "Muteado hasta";

        $this->warns_player = "Nombre";
        $this->warns_by = "Advertido por";
        $this->warns_reason = "Razon";
        $this->warns_when = "Advertido en";
        $this->warns_receive = "Advertencia Recibida";
        $this->warns_yes = "Si";
        $this->warns_no = "No";

        // Errors which are only accessible from invalid user input or removed pages.
        $this->check_invalid = "Nombre Invalido.";
        $this->history_missinguuid = "Argumentos Perdidos de (uuid).";
        $this->info_error_missingarg = "Argumentos Perdidos de (type, id).";
        $this->info_error_unknown = "La Pagina Visitada no Existe.";
        $this->info_error_invalidid = "ID Invalida";
        $this->info_error_notfound1 = "Error: ";
        $this->info_error_notfound2 = " no encontrado en la Base de Datos.";
        $this->info_error_notplayer = "Error: Jugador no Encontrado.";
        $this->history_playernotfound = "Jugador No Encontrado en la Base de Datos.";
    }
}
