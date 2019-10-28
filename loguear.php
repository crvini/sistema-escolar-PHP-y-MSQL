<?php
session_start();
require 'conexion.php';
$user = $_POST['Usuario'];
$clave = $_POST['Password'];


$query = "SELECT COUNT(*) as contar FROM administrador where Usuario = '$user' and Password = '$clave' ";
$bdconect = mysqli_query($conectar,$query);
$parametros = mysqli_fetch_array($bdconect);
if($parametros['contar']>0){
   $_SESSION['username'] = $user;
  header("location: home.php");
}else {
    echo "<h1>datos incorrectos</h1> <br> ";
    echo "<a href='index.php'>Volver</a>";
}


?>