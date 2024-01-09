<?php
function conectar(){
$databaseHost = 'localhost';
$databaseName = 'biblioteca';
$databaseUsername = 'biblioteca';
$databasePassword = 'Biblioteca123';

$con= mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
return $con;

}
 
?>