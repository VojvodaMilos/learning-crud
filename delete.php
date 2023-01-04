<?php 

$id = $_GET["id"];
var_dump($id);
require 'connect.php' ;
$sql = "DELETE FROM names WHERE id = $id";
$query =mysqli_query($db, $sql);
header("Location: index.php");


?>