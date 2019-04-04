<!DOCTYPE html>
<html>
	<head>
		<title>SGT</title>		
		<link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
	</head>
<body align="center">
    <div class="float-right">
		<?php
			include 'conexionbd.php';
			$password_i=$_REQUEST['segundo'];
			$user_i=$_REQUEST['primero'];
			$query="SELECT * FROM usuarios where usuario='$user_i' and password='$password_i' ";
			$resultado = $mysqli->query($query);
		    if ($resultado->num_rows > 0) {
				while($row = $resultado->fetch_assoc()) {
				$nombre_user=$row["nombre_usuario"];
				echo("BIENVENIDO(A): $nombre_user");
				}
			}
			else
			{
				header('Location: errorInicio.html');
			}
			
		?>
	</div>
</body>
</html>