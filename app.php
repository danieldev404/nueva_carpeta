<?php 
  require_once 'vendor/autoload.php';
  use App\Database;
  $db = new Database();
  $conn = $db->get_Connection('mysql');

?>