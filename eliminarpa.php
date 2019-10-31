<?php
require 'conexion.php';
$id=$_GET['id'];
mysqli_query($conectar, "DELETE FROM padres WHERE Id='".$id."'");
header('Location: padre.php');

    
?>