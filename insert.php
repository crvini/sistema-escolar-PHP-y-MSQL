<?php
   require 'conexion.php';
  
                  if(isset($_POST['id']) && !empty($_POST['id']) && isset($_POST['Nombre']) && !empty($_POST['Nombre'])){
                      mysqli_query($conectar,("INSERT INTO grados (Id,Nombre) VALUES('$_POST[id]','$_POST[Nombre]')"));
                      header('Location: grados.php');
                      }else{
                      echo 'error al insertar datos';
                  }                
                                                
                                               
                          
                                           
                                            
                                            ?>