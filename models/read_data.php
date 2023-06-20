<?php
    require_once '../config/Database.php';

    if(isset($_GET)){
        print_r($_GET);
        $id = $_GET['id_user'];

        $consulta = "SELECT name_user FROM users WHERE id_user = :id";
        $stmt = $connection->prepare($consulta);
        $stmt->bindParam(':id_user', $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $nombre = $result['name_user'];
    
            echo "Nombre: " . $nombre . "<br>";
        } else {
            echo "No se encontraron datos para el ID proporcionado";
        }

        echo 'Nombre de usuario:' . $nombre;
    }

?>