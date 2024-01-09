<?php

include("conexion.php");
$con=conectar();

$IdPrestamo=$_POST['IdPrestamo'];
$Usuario=$_POST['Usuario'];
$Libro=$_POST['Libro'];
$Fecha=$_POST['Fecha'];
$Hora=$_POST['Hora'];
$Empleado=$_POST['Empleado'];

$sql="UPDATE prestamo SET  Usuario='$Usuario',Libro='$Libro',Fecha='$Fecha', Hora='$Hora', Empleado='$Empleado'   WHERE IdPrestamo='$IdPrestamo'";
$query=mysqli_query($con,$sql);
if($query){
    Header("Location: agregar.php");
}
?>