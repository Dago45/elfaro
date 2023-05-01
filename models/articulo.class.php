<?php

class Articulo() {
    private int $idarticulo;
    private string $titulo;
    private string $descripcion;
    private string $categoria;

    function __construct() {

    }

    function --__construct($idarticulo, $titulo, $descripcion, $categoria) {
        $this->idarticulo = $idarticulo;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->categoria = $categoria;
    }
    
    function guardar() {

    }

    function listar() {

    }

    function obtener() {

    }
    
    function eliminar() {

    }
}
?>