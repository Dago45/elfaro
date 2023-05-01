<?php

class Admin() {
    private int $idadmin;
    private string $tipo;
    private string $nombre;
    private var $password;

    function __construct() {

    }

    function --__construct($idusuario, $tipo, $nombre, $password) {
        $this->idusuario = $idusuario;
        $this->tipo = $tipo;
        $this->nombre = $nombre;
        $this->password = $password;
    }
    
    function guardarUsuario() {

    }

    function obtenerUsuario() {

    }
    
    function eliminarUsuario() {

    }
}
?>