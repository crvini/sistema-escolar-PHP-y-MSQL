<?php
require 'conexion.php';
$id=$_GET['id'];
mysqli_query($conectar, "DELETE FROM alumnos WHERE Id='".$id."'");
header('Location: alumno.php');

    
?>