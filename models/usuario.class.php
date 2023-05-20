<?php

require_once('conexion.class.php');

class Usuario{

    private int $idusuario;
    private string $nombre;
    private string $apellido;
    private string $email;
    private string $password;
    private string $id_rol;

    public function __construct($nombre, $apellido, $email, $password) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->password = $password;

    }
    
    public function guardarUsuario() {

        $conn = new Conexion();
        $data = "INSERT INTO usuario (nombre, apellido, correo, password, id_rol) VALUES ('$this->nombre','$this->apellido','$this->email','$this->password', 1)";
        $resultado = $conn->conectar()->query($data);
        $conn->desconectar();
        return $resultado;
    }

    public function obtener() {
        $conn = new Conexion();
        $result = $conn->conectar()->query("CALL GetAllUsuario()");
        $conn->desconectar();
        return $result;
    }
    
    public function eliminar() {
        $conn = new Conexion();
        $data = "DELETE FROM usuario WHERE id=3";
        $resultado = $conn->conectar()->query($data);
        $conn->desconectar();
        return $resultado;
    }
}
?>