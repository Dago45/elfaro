<?php

class Conexion {
    
    private $conn;

    public function conectar(){

        $host = 'localhost';
        $dbname = 'el_faro';//nombre de la base de datos
        $username = 'root';
        $password = 'Ruddy123456*';// dejar las comillas vacias si no tiene password

        try{
            $this->conn = new PDO("mysql:host=$host;dbname=$dbname",$username, $password);
            return $this->conn;
        }
        catch(PDOException $e){
            echo "error de conexion.".$e->getMessage();
            return false;
        }
    }

    public function desconectar(){
        $this->conn = null;
    }
            
}
    
?>