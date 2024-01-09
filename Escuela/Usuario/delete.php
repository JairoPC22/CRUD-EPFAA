<?php

include("conexion.php");
$con=conectar();

$IdUsuario=$_GET['id'];

$sql="DELETE FROM usuario  WHERE IdUsuario='$IdUsuario'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: agregar.php");
    }
?>
