<?php

include("conexion.php");
$con=conectar();

$IdEstudiante=$_POST['IdEstudiante'];
$Nombre=$_POST['Nombre'];
$Apellidos=$_POST['Apellidos'];
$FechaNacimiento=$_POST['FechaNacimiento'];
$Telefono=$_POST['Telefono'];
$Email=$_POST['Email'];
$Grado=$_POST['Grado'];
$Grupo=$_POST['Grupo'];
$Capacitacion=$_POST['Capacitacion'];
$Domicilio=$_POST['Domicilio'];
$Genero=$_POST['Genero'];

$sql="UPDATE estudiantes SET  Nombre='$Nombre',Apellidos='$Apellidos', FechaNacimiento='$FechaNacimiento', FechaNacimiento='$FechaNacimiento', Telefono='$Telefono', Email='$Email', Grado='$Grado' , Grupo='$Grupo', Capacitacion='$Capacitacion', Domicilio='$Domicilio', Genero='$Genero'  WHERE IdEstudiante='$IdEstudiante'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: agregar.php");
    }
?>