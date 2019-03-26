<!doctype html>
<html >
<html>
	<head>

    	<title>Formulario con bootstrap</title>
    	<meta charset="utf-8">
    	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    	<link rel="stylesheet" href="bootstrap-4.0.0-alpha.2/dist/css/bootstrap.css">	

	</head>
	<body >
	<div class="container">
	<br>
	<br>
	<br>
	<h1><center><b>"RESULTADOS"</h1></center></b>
	<br>
	
	<!-- On cells (`td` or `th`) -->
		<?php
		include 'conexionbd.php';
			$primero=$_REQUEST['primero'];
			$segundo=$_REQUEST['segundo'];
			
			$query="SELECT * FROM usuarios where usuario='$primero' and password='$segundo' ";
			$resultado = $mysqli->query($query);
		    if ($resultado->num_rows > 0) {
				while($row = $resultado->fetch_assoc()) {
				$nombre_user=$row["nombre_usuario"];
				$id_usu=$row["tipo_usuario"];
				echo("BIENVENIDO(A): $nombre_user    $id_usu");
				}
			}
			else
			{
				echo("Usuario inv&aacute;lido");
			}
			//$tercero=$_REQUEST['tercero'];
			
			///$suma = ($primero + $segundo );
			//$resta = ($primero - $segundo );	
			//$multiplicacion = ($primero * $segundo );
			//$division = ($primero / $segundo );


			//print ("<tr> <td><center>suma</center></td> <td><center>$primero</center></td> <td><center>$segundo</center></td>   <td><b><center>$suma </center></b></td></tr>" );
			//print ("<P><tr> <td><center>Resta</center></td> <td><center>$primero</center></td> <td><center>$segundo</center></td> <td><b><center>$resta</center></b></td></P></tr>");
			//print ("<P><tr> <td><center>Multiplicaci&oacute;n</center></td> <td><center>$primero</center></td> <td><center>$segundo</center></td>  <td><b><center>$multiplicacion </center></b></td></tr></P>");
			//print ("<P><tr> <td><center>Divici&oacute;n</center></td> <td><center>$primero</center></td> <td><center>$segundo</center></td>  <td><b><center> $division </center></b></td></tr></P>");
		?>
      
  

        <div class="form-group">
        <center>
		<br>
		<br>
		<button class="btn btn-success btn-lg active" id="modifica">Editar</button>

		<br>
		<br>
		</div>
       
       
        <div>
        <center>
		<a href="principal.html" class="btn btn-primary btn-lg active" role="button">Regresar</a>
		</div>
		
		<script  type="text/javascript" src="js/jquery-2.2.0.min.js"></script>	
        <script  type="text/javascript" src="js/conecta.js"></script>
		
		</div>
	</body>
</html>