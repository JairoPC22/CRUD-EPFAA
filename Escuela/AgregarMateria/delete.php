<?php

include("conexion.php");
$con=conectar();

$IdMateria=$_GET['id'];

$sql="DELETE FROM materia  WHERE IdMateria='$IdMateria'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: agregar.php");
    }
?>
