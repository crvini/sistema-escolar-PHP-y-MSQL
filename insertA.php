<?php
$host = "localhost";
$user = "root";
$clave = "";
$bd = "proyectoU";
$conectar = mysqli_connect($host,$user,$clave,$bd);

                if(isset($_POST['id']) && !empty($_POST['id']) && isset($_POST['id_rol']) && !empty($_POST['id_rol']) && isset($_POST['Nombre']) && !empty($_POST['Nombre']) && isset($_POST['Apellido']) && !empty($_POST['Apellido'])
                && isset($_POST['Usuario']) && !empty($_POST['Usuario']) && isset($_POST['Password']) && !empty($_POST['Password']) && isset($_POST['estatus']) && !empty($_POST['estatus']) ){
                    mysqli_query($conectar,("INSERT INTO administrador (Id,Id_rol,Nombre,Apellido,Usuario,Password,Estatus) VALUES('$_POST[id]','$_POST[id_rol]','$_POST[Nombre]','$_POST[Apellido]','$_POST[Usuario]','$_POST[Password]','$_POST[estatus]')"));
                    header('Location: admin.php');
                    }else{
                    echo 'error al insertar datos';
                }                
?>