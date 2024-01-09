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

$sql="UPDATE devolver SET  Usuario='$Usuario',Libro='$Libro', FechaPrestamo='$FechaPrestamo', FechaDevolucion='$FechaDevolucion', HoraDevolucion='$HoraDevolucion', Empleado='$Empleado'   WHERE IdDevolver='$IdDevolver'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: agregar.php");
    }
?>