<?php
    require 'conexion.php';
   
$idpr=$_POST['id'];
$nombrepr = $_POST['Nombre'];
$apellidoP = $_POST['Apellido'];
$usuariopr = $_POST['Usuario'];
$passpro = $_POST['Password'];
$estatusp =$_POST['estatus']; 

if(isset($_POST['id']) && !empty($_POST['id']) && isset($_POST['Nombre']) && !empty($_POST['Nombre']) && isset($_POST['Apellido']) && !empty($_POST['Apellido'])
&& isset($_POST['Usuario']) && !empty($_POST['Usuario']) && isset($_POST['Password']) && !empty($_POST['Password']) && isset($_POST['estatus']) && !empty($_POST['estatus']) ){
    mysqli_query($conectar,("UPDATE padres SET Nombre_Materno ='".$nombrepr."',Apellido_Materno='".$apellidoP."',Usuario='".$usuariopr."',Password='".$usuariopr."',Estatus='".$estatusp."' WHERE Id='".$idpr."'"));
    header('Location: padre.php');
    }else{
    echo 'error al insertar datos';
}                


?>