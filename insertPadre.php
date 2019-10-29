<?php
require 'conexion.php';

                if(isset($_POST['id']) && !empty($_POST['id'])
                 && isset($_POST['id_rol']) && !empty($_POST['id_rol'])
                  && isset($_POST['Nombre_materno']) && !empty($_POST['Nombre_materno']) 
                  && isset($_POST['Nombre_paterno']) && !empty($_POST['Nombre_paterno']) 
                  && isset($_POST['Apellido_materno']) && !empty($_POST['Apellido_materno'])
                   && isset($_POST['Apellido_paterno']) && !empty($_POST['Apellido_paterno'])
                    && isset($_POST['correo']) && !empty($_POST['correo'])
                    && isset ($_POST['Telefono']) && !empty($_POST['Telefono']) 
                    && isset ($_POST['Usuario']) && !empty($_POST['Usuario']) 
                    && isset($_POST['Password']) && !empty($_POST['Password'])
                     && isset($_POST['estatus']) && !empty($_POST['estatus']) ){
                    mysqli_query($conectar,("INSERT INTO padres (Id,Id_rol,Nombre_Materno,Nombre_Paterno,Apellido_Materno,Apellido_Paterno,Correo,Telefono,Usuario,Password,Estatus) VALUES
                    ('$_POST[id]','$_POST[id_rol]','$_POST[Nombre_materno]','$_POST[Nombre_paterno]','$_POST[Apellido_materno]','$_POST[Apellido_paterno]','$_POST[correo]','$_POST[Telefono]','$_POST[Usuario]','$_POST[Password]','$_POST[estatus]')"));
                    header('Location: padre.php');
                    }else{
                    echo 'error al insertar datos';
                }                
?>