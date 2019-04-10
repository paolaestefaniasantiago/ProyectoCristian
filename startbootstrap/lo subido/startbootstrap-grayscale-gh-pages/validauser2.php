<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Examen de Exploración</title>

  <!-- Bootstrap core CSS -->
 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/grayscale.min.css" rel="stylesheet">

</head>
	
<body id="page-top">
	
<!--/*PHP + MYSQL*/-->
<?php
	$numC="ERROR_EMPTY_VAR";
	$numC=$_REQUEST['numC'];
	$nombre=$_REQUEST['nombre'];
	$nQ= 50;

	$hostname="localhost";
	$user="root";
	$password="";
	$db="users_upjr";
		
	$mysqli = new mysqli("localhost","root","","users_upjr");

	$query="UPDATE `alum_data` SET `f_e2` = '$nombre' WHERE `alum_data`.`id` = 1";
	$resultado = $mysqli->query($query);
	//echo "Actualizando... ";

	$success = $mysqli->query("UPDATE `alum_data` SET `f_e2` = '$nombre' WHERE `alum_data`.`id` = 1");

    if ($success ){
      //echo 'OK <br>Tu calificación fue: '.$nombre;
    }else{
      //echo $mysqli->error;
    }
?>
	
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Examen de Exploración</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#projects">Siguiente examen</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">
			<?php 
			if ($success ){
			echo $nombre;
			}else{
				echo 'ERROR';
			}
			?></h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">
			<?php
		  if ($success ){
      echo 'Calificación Final';
    }else{
      echo $mysqli->error;
    }
			?>
		  </h2>
		  <a href="examenHabilidades.html" class="btn btn-primary js-scroll-trigger">Siguiente Examen</a>
      </div>
    </div>
  </header>
	
	<!-- About Section -->
  <section id="about" class="about-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">Información Extra</h2>
          <p class="text-white-50">
			
			<?php 
			  echo $nQ." preguntas en total;<br>";
			  echo $numC." pregunta(s) correcta(s) y ";
			  echo $nQ-$numC." pregunta(s) incorrecta(s).";
			?>
		  
		  </p>
        </div>
      </div>
      <!--<img src="img/ipad.png" class="img-fluid" alt="">-->
    </div>
  </section>
	
</body>

</html>
