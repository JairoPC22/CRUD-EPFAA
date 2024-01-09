<?php

include("conexion.php");
$con=conectar();

$IdDevolver=$_GET['id'];

$sql="DELETE FROM devolver  WHERE IdDevolver='$IdDevolver'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: agregar.php");
    }
?>
