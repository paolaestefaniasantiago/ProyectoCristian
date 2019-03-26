<?php

$nombre=$_REQUEST['nombre'];
$email=$_REQUEST['email'];
$estado=$_REQUEST['estado'];
$id=$_REQUEST['id'];
$semilla=$_REQUEST['semilla'];
$institucion=$_REQUEST['institucion'];
$fotografia='images/nopic.png';

include 'conexionbd.php';
$query="insert into registro_conimi (nombre, email, estado, id_visita, semilla, institucion, fotografia)values('$nombre','$email','$estado','$id','$semilla','$institucion','$fotografia')";
$resultado = $mysqli->query($query);


echo '<script type="text/javascript"> window.location="index_registro.php"</script>';
?>