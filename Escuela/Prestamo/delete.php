<?php

include("conexion.php");
$con=conectar();

$IdPrestamo=$_GET['id'];

$sql="DELETE FROM prestamo  WHERE IdPrestamo='$IdPrestamo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: agregar.php");
    }
?>
