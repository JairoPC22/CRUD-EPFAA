<?php

include("conexion.php");
$con=conectar();

$IdMaestro=$_GET['id'];

$sql="DELETE FROM maestro  WHERE IdLibro='$IdMaestro'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: agregar.php");
    }
?>
