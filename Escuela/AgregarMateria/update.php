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

$sql="UPDATE materia SET  NombreMateria='$NombreMateria',Horario='$Horario', Creditos='$Creditos', Duracion='$Duracion', Periodo='$Periodo', Aula='$Aula'   WHERE IdMateria='$IdMateria'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: agregar.php");
    }
?>