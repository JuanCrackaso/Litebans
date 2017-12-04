<?php

class Lang {
    public function __construct() {
        $array = array();
        $this->array = &$array;
        $array["index_welcome"] = 'Bienvenido a la Lista de Sanciones de {server}.';
        $array["index_allsins"] = 'Aquí se encuntran todas las Sanciones del Servidor.';
        $array["header_index"] = 'Inicio';
        $array["header_bans"] = 'Baneos';
        $array["header_mutes"] = 'Muteos';
        $array["header_warnings"] = 'Advertencias';
        $array["header_kicks"] = 'Kickeos';

        $array["page_perm_ban"] = 'Baneo Permanente';
        $array["page_perm_mute"] = 'Muteo Permanente';
        $array["page_perm_warn"] = 'Permanente';
        $array["page_expire_ban"] = '(Desbaneado)';
        $array["page_expire_ban_by"] = '(Desbaneado por {name})';
        $array["page_expire_mute"] = '(Desmuteado)';
        $array["page_expire_mute_by"] = '(Desmuteado por {name})';
        $array["page_expire"] = '(Expirado)';
        $array["page_title_ban"] = 'Baneos';
        $array["page_title_mute"] = 'Muteos';
        $array["page_title_warn"] = 'Advertencias';
        $array["page_title_kick"] = 'Kickeos';
        $array["page_check_user"] = "Jugador";
        $array["page_check_submit"] = "Buscar";
        $array["page_page"] = "Página";

        $array["check_notjoin"] = "no existe.";

        $array["history_recentby"] = "Sanciones Recientes por ";
        $array["history_recentfor"] = "Sanciones Recientes para ";
        $array["history_tabletype"] = "Sanción";
        $array["history_tableplayer"] = "Jugador";
        $array["history_tablemoderator"] = "Moderador";
        $array["history_tablereason"] = "Razón";
        $array["history_tabledate"] = "Fecha";
        $array["history_tableexpires"] = "Expira";
        $array["history_nopunishments"] = "Sanciones no Encontradas.";
        $array["history_returnto"] = "Volver a";

        $array["info_banned_player"] = "Jugador Baneado";
        $array["info_banned_by"] = "Baneado por";
        $array["info_banned_reason"] = "Razón del Baneo";
        $array["info_banned_when"] = "Baneado el";
        $array["info_banned_expiry"] = "Expira";
        $array["info_muted_player"] = "Jugador Muteado";
        $array["info_muted_by"] = "Muteado por";
        $array["info_muted_reason"] = "Razón del Muteo";
        $array["info_muted_when"] = "Muteado el";
        $array["info_muted_expiry"] = "Expira";
        $array["info_warn_name"] = "Advertencia";
        $array["info_warn_player"] = "Jugador Advertido";
        $array["info_warn_by"] = "Advertido por";
        $array["info_warn_reason"] = "Razón de la Advertencia";
        $array["info_warn_when"] = "Advertido el";
        $array["info_warn_expiry"] = "Expira";
        $array["info_kick_player"] = "Jugador Kickeado";
        $array["info_kick_by"] = "Kickeado por";
        $array["info_kick_reason"] = "Razón del Kickeo";
        $array["info_kick_when"] = "Fecha del Kickeo";

        $array["bans_player"] = "Nombre";
        $array["bans_by"] = "Baneado por";
        $array["bans_reason"] = "Razón";
        $array["bans_when"] = "Baneado el";
        $array["bans_expiry"] = "Baneado hasta";

        $array["kicks_player"] = "Nombre";
        $array["kicks_by"] = "Kickeado por";
        $array["kicks_reason"] = "Razón";
        $array["kicks_when"] = "Fecha";

        $array["mutes_player"] = "Nombre";
        $array["mutes_by"] = "Muteado por";
        $array["mutes_reason"] = "Razón";
        $array["mutes_when"] = "Muteado el";
        $array["mutes_expiry"] = "Muteado hasta";

        $array["warns_player"] = "Nombre";
        $array["warns_by"] = "Advertido por";
        $array["warns_reason"] = "Razón";
        $array["warns_when"] = "Advertido el";
        $array["warns_receive"] = "¿Advertencia Recibida?";

        // Errors which are only accessible from invalid user input or removed pages.
        $array["check_invalid"] = "Nombre Inválido.";
        $array["history_missinguuid"] = "Argumentos Inválidos (uuid).";
        $array["info_error_missingarg"] = "Argumentos Inválidos (tipo, id).";
        $array["info_error_unknown"] = "La página que deseas visitar no existe.";
        $array["info_error_invalidid"] = "ID Inválida";
        $array["info_error_notfound1"] = "Error: ";
        $array["info_error_notfound2"] = " no encontrado en la Base de Datos.";
        $array["info_error_notplayer"] = "Error: Jugador no Encontrado.";
        $array["history_playernotfound"] = "Jugador No Encontrado en la Base de Datos.";
    }
}
