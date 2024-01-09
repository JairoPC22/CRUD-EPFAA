<?php
include("conexion.php");
$con=conectar();

$IdPrestamo=$_POST['IdPrestamo'];
$Usuario=$_POST['Usuario'];
$Libro=$_POST['Libro'];
$Fecha=$_POST['Fecha'];
$Hora=$_POST['Hora'];
$Empleado=$_POST['Empleado'];



$sql= "INSERT INTO prestamo VALUES('$IdPrestamo','$Usuario','$Libro','$Fecha', '$Hora', '$Empleado')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: agregar.php");
    
}else {
}
?>