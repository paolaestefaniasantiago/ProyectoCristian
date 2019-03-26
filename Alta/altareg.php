<?php

$nombre=$_REQUEST['Primer_Nombre'];
$email=$_REQUEST['Segundo_nombre'];
$estado=$_REQUEST['Apellido_Paterno'];
$id=$_REQUEST['Apellido_Materno'];
$semilla=$_REQUEST['Cuidad'];
$institucion=$_REQUEST['Institucion'];


include 'conexionbd.php';
$query="insert into nuevo_registro(Primer_nombre,Segundo_nombre,Apellido_Paterno,Apellido_Materno,Institucion,Cuidad)values('$Primer_nombre','$Segundo_nombre','$Apellido_Materno','$Apellido_Paterno','$Cuidad','$Institucion')";
$resultado = $mysqli->query($query);


echo '<script type="text/javascript"> window.location="index_registro.php"</script>';
?>