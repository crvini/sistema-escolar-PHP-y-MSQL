<?php
require 'conexion.php';

                if(isset($_POST['id']) && !empty($_POST['id'])
                 && isset($_POST['id_rol']) && !empty($_POST['id_rol'])
                  && isset($_POST['grado']) && !empty($_POST['grado']) 
                  && isset($_POST['padre']) && !empty($_POST['padre']) 
                  && isset($_POST['Nombre']) && !empty($_POST['Nombre'])
                   && isset($_POST['Apellido']) && !empty($_POST['Apellido'])
                    && isset($_POST['Usuario']) && !empty($_POST['Usuario'])
                    && isset ($_POST['Genero']) && !empty($_POST['Genero']) 
                    && isset ($_POST['Nacimiento']) && !empty($_POST['Nacimiento']) 
                    && isset($_POST['Password']) && !empty($_POST['Password'])
                     && isset($_POST['estatus']) && !empty($_POST['estatus']) ){
                    mysqli_query($conectar,("INSERT INTO alumnos (Id,Id_rol,Id_grado,Id_padre,Nombre,Apellido,Usuario,Genero,Fecha_nacimiento,Password,Estatus) VALUES
                    ('$_POST[id]','$_POST[id_rol]','$_POST[grado]','$_POST[padre]','$_POST[Nombre]','$_POST[Apellido]','$_POST[Usuario]','$_POST[Genero]','$_POST[Nacimiento]','$_POST[Password]','$_POST[estatus]')"));
                    header('Location: alumno.php');
                    }else{
                    echo 'error al insertar datos';
                }                
?>