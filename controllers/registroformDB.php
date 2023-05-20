<?php
// otra forma es el include, deja correr el html
require_once('../models/usuario.class.php');

if (isset($_POST['registro'])) {

    /*if (empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['correo']) || empty($_POST['pasword'])) {

        echo "por favor rellene los campos correspondientes";
    
    } else {*/
        $user = new Usuario($_POST['nombre'], $_POST['apellido'], $_POST['correo'], $_POST['password']);

        $resultado = $user->guardarUsuario();

        if ($resultado) {
            echo "<strong>Se guardaron los nuevos registros</strong>"."<br>";
            
            }else {
            echo "Error: no se grabo nada"."<br>";
        }
    
}
   
?>