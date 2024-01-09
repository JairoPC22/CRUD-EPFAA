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




$sql= "INSERT INTO estudiantes VALUES('$IdEstudiante','$Nombre','$Apellidos','$FechaNacimiento', '$Telefono', '$Email', '$Grado', '$Grupo', '$Capacitacion','$Domicilio','$Genero')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: agregar.php");
    
}else {
}
?>