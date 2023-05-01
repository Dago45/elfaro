<?php

class Periodico() {
    private array $articulos;

    function __construct() {

    }

    function --__construct($articulos) {
        $this->articulos = $articulos;
    }
    
    function guardar() {

    }

    function listar() {
        return array($articulos);
    }
    
    function eliminar() {

    }
}
?>