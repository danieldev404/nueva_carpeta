
<?php 
    require_once '../config/Database.php';
    if (isset($_POST)) {
        $nombre = $_REQUEST['name_user']; // Utiliza $_POST en lugar de $_REQUEST
        echo $nombre;
        print_r($_POST);
        
        $consulta = "INSERT INTO users (name_user) VALUES (:name_user)"; // Utiliza un marcador de posición :name_user
        $send = $connection->prepare($consulta); // Utiliza $connection en lugar de $dsn
        $send->bindParam(':name_user', $nombre);
        $send->execute();
    }
?>