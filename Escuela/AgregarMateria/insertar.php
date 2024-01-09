<?php
include("conexion.php");
$con=conectar();

$IdMateria=$_POST['IdMateria'];
$NombreMateria=$_POST['NombreMateria'];
$Horario=$_POST['Horario'];
$Creditos=$_POST['Creditos'];
$Duracion=$_POST['Duracion'];
$Periodo=$_POST['Periodo'];
$Aula=$_POST['Aula'];



$sql= "INSERT INTO materia VALUES('$IdMateria','$NombreMateria','$Horario','$Creditos', '$Duracion', '$Periodo', '$Aula')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: agregar.php");
    
}else {
}
?>