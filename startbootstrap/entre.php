<!doctype html>
<html lang="en">
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
	<table class="table table-bordered" center>
	 <tr>
   <th><center><B>#</B></center></th>
   <th><B><center>Primer valor </center></B></th>
   <th><B><center>Segundo valor </center></B></th>
   <th><B><center>Tercer valor </center></B></th>
   <th><B><center>Resultado </center></B></th>
    </tr>
	<!-- On cells (`td` or `th`) -->
		<?php
			$primero=$_REQUEST['primero'];
			$segundo=$_REQUEST['segundo'];
			
			$suma = ($primero + $segundo );
			$resta = ($primero - $segundo );	
			$multiplicacion = ($primero * $segundo );
			$division = ($primero / $segundo );


			print ("<tr> <td><center>suma</center></td> <td><center>$primero</center></td> <td><center>$segundo</center></td>  <td><b><center>$suma </center></b></td></tr>" );
			print ("<P><tr> <td><center>Resta</center></td> <td><center>$primero</center></td> <td><center>$segundo</center></td>  <td><b><center>$resta</center></b></td></P></tr>");
			print ("<P><tr> <td><center>Multiplicaci&oacute;n</center></td> <td><center>$primero</center></td> <td><center>$segundo</center></td>  <td><b><center>$multiplicacion </center></b></td></tr></P>");
			print ("<P><tr> <td><center>Divici&oacute;n</center></td> <td><center>$primero</center></td> <td><center>$segundo</center></td>  <td><b><center> $division </center></b></td></tr></P>");
		?>
      
  

        


</table>
        <center>
		<a href="index.html" class="btn btn-primary btn-lg active" role="button">Regresar</a>
		
		</div>
	</body>
</html>