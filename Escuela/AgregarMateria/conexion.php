<?php
function conectar(){
$databaseHost = 'localhost';
$databaseName = 'escuela';
$databaseUsername = 'escuela';
$databasePassword = 'Escuela123';

$con= mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
return $con;

}
 
?>
