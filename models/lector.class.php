<?php

class Lector() {
    private int $idlector;
    private string $tipo;
    private string $nombre;
    private var $correo;

    function __construct() {

    }

    function --__construct($idusuario, $tipo, $nombre, $correo) {
        $this->idusuario = $idusuario;
        $this->tipo = $tipo;
        $this->nombre = $nombre;
        $this->correo = $correo;
    }
    
    function guardarUsuario() {

    }

    function obtenerUsuario() {

    }
    
    function eliminarUsuario() {

    }
}
?>