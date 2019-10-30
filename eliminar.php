<?php
require 'conexion.php';
$id=$_GET['id'];
mysqli_query($conectar, "DELETE FROM grados WHERE Id='".$id."'");
header('Location: grados.php');

    
?>