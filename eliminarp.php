<?php
require 'conexion.php';
$id=$_GET['id'];
mysqli_query($conectar, "DELETE FROM profesores WHERE Id='".$id."'");
header('Location: profesor.php');
    
?>