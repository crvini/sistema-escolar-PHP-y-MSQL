<?php
              $host = "localhost";
  $user = "root";
  $clave = "";
  $bd = "proyectoU";
  $conectar = mysqli_connect($host,$user,$clave,$bd);
  
                  if(isset($_POST['id']) && !empty($_POST['id']) && isset($_POST['Nombre']) && !empty($_POST['Nombre'])){
                      mysqli_query($conectar,("INSERT INTO materias (Id,Nombre) VALUES('$_POST[id]','$_POST[Nombre]')"));
                      header('Location: materias.php');
                      }else{
                      echo 'error al insertar datos';
                  }                
                                                
                                               
                          
                                           
                                            
                                            ?>