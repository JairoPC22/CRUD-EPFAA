<?php
include("conexion.php");
$con=conectar();

$IdDevolver=$_POST['IdDevolver'];
$Usuario=$_POST['Usuario'];
$Libro=$_POST['Libro'];
$FechaPrestamo=$_POST['FechaPrestamo'];
$FechaDevolucion=$_POST['FechaDevolucion'];
$HoraDevolucion=$_POST['HoraDevolucion'];
$Empleado=$_POST['Empleado'];



$sql= "INSERT INTO devolver VALUES('$IdDevolver','$Usuario','$Libro','$FechaPrestamo', '$FechaDevolucion', '$HoraDevolucion', '$Empleado')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: agregar.php");
    
}else {
}
?>