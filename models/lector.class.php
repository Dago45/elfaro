<?php

class Lector() {
    private int $idlector;
    private string $nombre;
    private string $apellido;
    private var $email;
    private var $password;

    function __construct() {

    }

    function --__construct($idlector, $nombre, $apellido, $email, $password) {
        $this->idlector = $idlector;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
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