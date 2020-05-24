<?php 
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $database = "prueba_name";

    $conn = new mysqli($servidor,$usuario,$password);

    if($conn->connect_error){
        die("conexion fallida de la base de datos ".$conn->connect_error);
    }

    //echo "Se ha conectado ala base de datos";
?>