<?php

include("conexion.php");
$con=conectar();

$IdMaestro=$_POST['IdMaestro'];
$Nombre=$_POST['Nombre'];
$Apellidos=$_POST['Apellidos'];
$FechaNacimiento=$_POST['FechaNacimiento'];
$Domicilio=$_POST['Domicilio'];
$Telefono=$_POST['Telefono'];
$Email=$_POST['Email'];
$Pago=$_POST['Pago'];
$Estudios=$_POST['Estudios'];
$Horario=$_POST['Horario'];
$Materia=$_POST['Materia'];

$sql="UPDATE maestro SET  Nombre='$Nombre',Apellidos='$Apellidos', FechaNacimiento='$FechaNacimiento', Domicilio='$Domicilio', Telefono='$Telefono', Email='$Email', Pago='$Pago', Estudios='$Estudios', Horario='$Horario', Materia='$Materia'   WHERE IdMaestro='$IdMaestro'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: agregar.php");
    }
?>