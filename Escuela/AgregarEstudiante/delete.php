<?php

include("conexion.php");
$con=conectar();

$IdEstudiante=$_GET['id'];

$sql="DELETE FROM estudiantes  WHERE IdEstudiante='$IdEstudiante'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: agregar.php");
    }
?>
