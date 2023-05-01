<?php

class Comentario() {
    private int $idcomentario;
    private var $correo;
    private string $mensaje;

    function __construct() {

    }

    function --__construct($idcomentario, $correo, $mensaje) {
        $this->idcomentario = $idcomentario;
        $this->correo = $correo;
        $this->mensaje = $mensaje;
    }
    
    function guardar() {

    }

    function obtener() {

    }
    
    function eliminar() {

    }
}
?>