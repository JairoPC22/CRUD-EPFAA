<?php

include("conexion.php");
$con=conectar();

$IdUsuario=$_POST['IdUsuario'];
$Nombre=$_POST['Nombre'];
$ApellidoP=$_POST['ApellidoP'];
$ApellidoM=$_POST['ApellidoM'];
$Sexo=$_POST['Sexo'];
$Edad=$_POST['Edad'];
$Domicilio=$_POST['Domicilio'];
$Fecha=$_POST['Fecha'];


$sql="UPDATE usuario SET  Nombre='$Nombre',ApellidoP='$ApellidoP', ApellidoM='$ApellidoM', Sexo='$Sexo', Edad='$Edad', Domicilio='$Domicilio', Fecha='$Fecha'   WHERE IdUsuario='$IdUsuario'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: agregar.php");
    }
?>