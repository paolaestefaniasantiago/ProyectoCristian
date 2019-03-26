<?php
$hostname="localhost";
$usuario="root";
$password="";
$basededatos="proyecto";

$mysqli = new mysqli($hostname, $usuario, $password,$basededatos);
if ( mysqli_connect_errno() ) {
	echo "Error de conexiÃ³n a la BD: ".mysqli_connect_error();
	exit();
}
else
{}
?>