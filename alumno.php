<?php 
    require 'conn/conexion.php';
    if(empty($_POST)){

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $matricula = $_POST['matricula'];
        $carrera = $_POST['carrera'];
        $promedio = $_POST['promedio'];

        $sql="INSERT INTO alumno(nombre,apellido,matricula,carrera,promedio)VALUES('$nombre','$apellido','$matricula','$carrera','$promedio')";
        $query = mysqli_query($conn,$sql);

        if($query){
            echo 'Nuevo registro creado con éxito';
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" conten="Registro de un Alumno">
    <title>Alumno</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="contenedor">
        <form class="formulario" action="alumno.php" method="post">
            <h1>Ingrese sus Datos</h1>
            <div class="input-contenedor">
                <input type="text" name="nombre" placeholder="Nombre">
            </div>

            <div class="input-contenedor">
                <input type="text" name="apellido" placeholder="Apellido">
            </div>

            <div class="input-contenedor">
                <input type="text" name="matricula" placeholder="Matricula">
            </div>

            <div class="input-contenedor">
                <input type="text" name="carrera" placeholder="Carrera">
            </div>

            <div class="input-contenedor">
                <input type="number" step="0.01" min="0" max="10" name="promedio" placeholder="Promedio">
            </div>

            <input type="submit" value="Enviar" class="button">
        </form>
    </div>
</body>
</html>