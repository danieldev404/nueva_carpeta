<?php 
    require_once '../config/Database.php';

    if (isset($_GET['delete_user'])){
        $name = $_GET["delete_user"];

        $consulta = "DELETE FROM users WHERE name_user = :name";
        $envio = $connection->prepare($consulta);
        $envio->bindParam(":name", $name);
        if($envio->execute()){
            if($envio->rowCount() > 0){
              echo 'felicidades se elimino este user';
            }
            else{
                echo 'no se a encontrado ningun dato';   
            }
        }
    }
?>