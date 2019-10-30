<?php
    require 'conexion.php';
   
$idp=$_POST['id'];
$nombrep = $_POST['Nombre'];
if(isset($_POST['id']) && !empty($_POST['id']) && isset($_POST['Nombre']) && !empty($_POST['Nombre'])){
    mysqli_query($conectar,("UPDATE grados SET Nombre='".$nombrep."' WHERE Id='".$idp."'"));
    header('Location: grados.php');
    }else{
    echo 'error al insertar datos';
}                
                  
                  
                                 
            
                             
                              
                              ?>