<?php

class Usuario() {
    private int $idusuario;
    private string $tipo;
    private string $nombre;

    function __construct() {

    }

    function --__construct($idusuario, $tipo, $nombre) {
        $this->idusuario = $idusuario;
        $this->tipo = $tipo;
        $this->nombre = $nombre;
    }
    
    function guardarUsuario() {

    }

    function obtener() {

    }
    
    function eliminar() {

    }
}
?>