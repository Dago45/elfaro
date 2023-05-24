<?php

require_once('../models/usuario.class.php');

$user = new Usuario('$nombre', '$apellido', '$email', '$password');
$resultado = $user->obtener();

if ($resultado->rowCount() >= 1) {
    echo '<table class="table table-dark table-striped" style="width: 100%; border-collapse: collapse; border: 1px solid #ccc;">';
    echo '<thead>';
    echo '<tr>';
    echo '<th scope="col" style="padding: 8px; border-bottom: 1px solid #ccc;">Nombre</th>';
    echo '<th scope="col" style="padding: 8px; border-bottom: 1px solid #ccc;">Apellido</th>';
    echo '<th scope="col" style="padding: 8px; border-bottom: 1px solid #ccc;">Correo</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>';
        echo '<td style="padding: 8px; border-bottom: 1px solid #ccc;">' . $row['nombre'] . '</td>';
        echo '<td style="padding: 8px; border-bottom: 1px solid #ccc;">' . $row['apellido'] . '</td>';
        echo '<td style="padding: 8px; border-bottom: 1px solid #ccc;">' . $row['correo'] . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
    echo '<strong>Tienes '.$resultado->rowCount().' usuarios registrados.</strong><br>';
} else {
    echo 'Sin resultados';
}


// otra forma es el include, deja correr el html
/*require_once('../models/usuario.class.php');

$user = new Usuario('$nombre', '$apellido', '$email', '$password');

$resultado = $user->obtener();

if ($resultado->rowCount() >= 1) {
    // output data of each row
    while($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
        echo $row["nombre"]. " " . $row["apellido"]. " " . $row["correo"]."<br>";        
    }
    } else {
    echo "sin resultados";
    }
echo "<strong>Datos de usuarios mostrados.</strong>"."<br>";
?>

<table class="table">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Correo</th>
        </tr>
    </thead>
    <tbody>
        <?php
        do {
            ?>
            <tr>
                <th scope="row"><?php echo $row ['id']; ?></th>
                <td><?php echo $row["nombre"]; ?></td>
                <td><?php echo $row["apellido"]; ?></td>
                <td><?php echo $row["correo"]; ?></td>
            </tr>
            <?php
        } while ( $row = $resultado->fetch(PDO::FETCH_ASSOC));
        ?>                        
    </tbody>
</table*/

?>