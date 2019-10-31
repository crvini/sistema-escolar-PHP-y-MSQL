<?php
    require 'conexion.php';
           if(isset($_POST['id']) && !empty($_POST['id']) && isset($_POST['Nombre']) && !empty($_POST['Nombre'])){
                      mysqli_query($conectar,("INSERT INTO materias (Id,Nombre_materia) VALUES('$_POST[id]','$_POST[Nombre]')"));
                      header('Location: materias.php');
                      }else{
                      echo 'error al insertar datos';
                  }                
                                                
                                               
                          
 ?>