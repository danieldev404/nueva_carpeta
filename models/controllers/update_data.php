<?php
    require_once './../../config/Database.php';

    if ($_GET) {
        $name = $_GET['update_user'];
        $newname = $_GET['new_name'];
        print_r($_GET);

        try {
            $consulta = "UPDATE users SET name_user = :newname WHERE name_user = :name";
            $conect = $connection->prepare($consulta);
            $conect->bindParam(":newname", $newname);
            $conect->bindParam(":name", $name);

            if ($conect->execute()) {
                if ($conect->rowCount() > 0) {
                    echo 'Se ha cambiado el valor deseado.';
                } else {
                    echo 'Lo sentimos, no pudimos cambiarlo. Por favor, verifica si existe.';
                }
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
?>
