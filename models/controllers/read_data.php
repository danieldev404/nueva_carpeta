<?php
require_once './../../config/Database.php';

if (isset($_GET['getuser'])) {
    $name = $_GET['getuser'];

    $consulta = "SELECT * FROM users WHERE name_user = :name";
    $conect = $connection->prepare($consulta);
    $conect->bindParam(':name', $name);

    if ($conect->execute()) {
        if ($conect->rowCount() > 0) {
            echo "El dato existe en la base de datos.";
        } else {
            echo 'El dato no existe en la base de datos.';
        }
    } else {
        echo 'Error al ejecutar la consulta.';
    }
} else {
    echo 'No se proporcionó el parámetro "getuser" en la URL.';
}
?>
