<?php

class Admin() {
    private int $idadmin;
    private string $nombre;
    private string $apellido;
    private var $email;
    private var $password;

    function __construct() {

    }

    function --__construct($idusuario, $nombre, $apellido, $email, $password) {
        $this->idusuario = $idusuario;
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