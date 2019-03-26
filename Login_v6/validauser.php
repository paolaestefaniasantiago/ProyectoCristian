<html>
	<head>
		<title>Validacion</title>		
		<link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
	</head>
<body align="center">
    <div class="float-right">
		<?php
			include 'conexionbd.php';
			$pass_i=$_REQUEST['password_i'];
			$usuario_i=$_REQUEST['user_i'];
			$query="SELECT * FROM usuarios where usuario='$usuario_i' and contraseña='$pass_i'";
			$resultado = $mysqli->query($query);
		    if ($resultado->num_rows > 0) {
				while($row = $resultado->fetch_assoc()) {
				$usuario_e=$row["usuario"];
				echo("BIENVENIDO(A): $usuario_e");
				}
			}
			else
			{
				echo("Usuario inv&aacute;lido");
			}
			
		?>
	</div>
</body>
</html>