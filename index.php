<?php 
require 'connect.php' ;

$sql = "SELECT * FROM names";
$query = mysqli_query($db, $sql); 
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);


require 'view/index.view.php' ;

?>