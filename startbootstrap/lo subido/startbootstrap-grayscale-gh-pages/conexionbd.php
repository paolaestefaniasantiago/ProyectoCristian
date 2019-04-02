<?php
$hostname="localhost";
$usuario="root";
$password="";
$basededatos="users_upjr";

$mysqli = new mysqli("localhost","root","","users_upjr");
if ( mysqli_connect_errno() ) {
	echo "Error de conexión a la BD: ".mysqli_connect_error();
	exit();
}
else
{}
?>