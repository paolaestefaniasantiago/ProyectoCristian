<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Examen</title>

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
            <a class="nav-link js-scroll-trigger" href="#about">Instrucciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#projects">Preguntas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#signup">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
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
			
		?>

  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">UPJR</h1>
        <!--<h2 class="text-white-50 mx-auto mt-2 mb-5">A free, responsive, one page Bootstrap theme created by Start Bootstrap.</h2>
        <a href="#about" class="btn btn-primary js-scroll-trigger">Get Started</a>-->
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section id="about" class="about-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">Instrucciones</h2>
          <p class="text-white-50">Lee con atención cada una de las preguntas y escoge la opción que consideres adecuada. Para
resolver el examen tienes un tiempo máximo de 50 minutos. No se requiere ningún instrumento
(formulario, calculadora o tabla periódica).</p>
        </div>
      </div>
      <!--<img src="img/ipad.png" class="img-fluid" alt="">-->
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="projects-section bg-light">
    <div class="container">

      <!-- Featured Project Row -->
      <div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <!--<div class="col-xl-8 col-lg-7">
          <img class="img-fluid mb-3 mb-lg-0" src="img/bg-masthead.jpg" alt="">
        </div>-->
        <div class="col-xl-10 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>1</h4>
            <p class="text-black-50 mb-0">Es una sustancia que no se puede separar en otras más sencillas por medios químicos:</p>
          <a href="#about" class="btn btn-primary js-scroll-trigger">Compuesto</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">Compuesto</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">Compuesto</a>
			</div>
        </div>
      </div>
		<!-- PREGUNTA -->
		<div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-10 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>2</h4>
            <p class="text-black-50 mb-0">¿Cuál de las siguientes afirmaciones es incorrecta considerando el número atómico de un
elemento?</p>
          <a href="#about" class="btn btn-primary js-scroll-trigger">Número de protones en el núcleo</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">Número de protones en las órbitas</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">Se utiliza para la configuración electrónica de los elementos</a>
			</div>
        </div>
      </div>

		<!-- PREGUNTA -->
		<div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-10 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>3</h4>
            <p class="text-black-50 mb-0">El nombre de los siguientes elementos químicos Mn, P, K, S, Ba, Cs, Fe, Nd, Ca y Al es:</p>
          <a href="#about" class="btn btn-primary js-scroll-trigger">Magnesio, Potasio, Kriptón, Azufre, Bario, Escandio, Flúor, Neodimio, Calcio y Aluminio.</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">Manganeso, Potasio, Kriptón, Azufre, Bario, Cesio, Fierro, Neodimio, Calcio y Aluminio.</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">Manganeso, Fosforo, Potasio, Azufre, Bario, Cesio, Fierro, Neodimio, Calcio y Aluminio.</a>
			</div>
        </div>
      </div>
		
		<!-- PREGUNTA -->
		<div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-10 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>4</h4>
            <p class="text-black-50 mb-0">Selecciona de las siguientes afirmaciones relacionadas con el níquel (Ni), cual no es
verdadera.</p>
          <a href="#about" class="btn btn-primary js-scroll-trigger">Es un aislante</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">Es maleable</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">Es dúctil</a>
			</div>
        </div>
      </div>
		
		<!-- PREGUNTA -->
		<div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-10 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>5</h4>
            <p class="text-black-50 mb-0">Su principal característica es que son considerados gases inertes:</p>
          <a href="#about" class="btn btn-primary js-scroll-trigger">Halógenos</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">Metales de transición</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">Gases nobles</a>
			</div>
        </div>
      </div>
      
		<!-- PREGUNTA -->
		<div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-10 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>6</h4>
            <p class="text-black-50 mb-0">El Radio atómico se define como:</p>
          <a href="#about" class="btn btn-primary js-scroll-trigger">Mitad de la distancia entre dos núcleos de dos moléculas adyacentes</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">Mitad de la distancia entre dos núcleos de dos átomos adyacentes</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">Mitad de la distancia entre dos núcleos de un átomo y una molécula adyacentes</a>
			</div>
        </div>
      </div>
 
		<!-- PREGUNTA -->
		<div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-10 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>7</h4>
            <p class="text-black-50 mb-0">Se define como la energía mínima necesaria para separar un electrón de un átomo en estado
gaseoso:</p>
          <a href="#about" class="btn btn-primary js-scroll-trigger">Afinidad electrónica</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">Electronegatividad</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">Energía de ionización</a>
			</div>
        </div>
      </div>
		
		<!-- PREGUNTA -->
		<div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-10 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>8</h4>
            <p class="text-black-50 mb-0">Un enlace covalente se caracteriza por:</p>
          <a href="#about" class="btn btn-primary js-scroll-trigger">Fuerzas electrostáticas entre los elementos</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">Por compartir electrones entre los elementos</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">Por ceder el par de electrones de un elemento a otro</a>
			</div>
        </div>
      </div>
		
		<!-- PREGUNTA -->
		<div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-10 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>9</h4>
            <p class="text-black-50 mb-0">Compuesto que presenta un enlace covalente polar</p>
          <a href="#about" class="btn btn-primary js-scroll-trigger">NaCl</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">CCl<sub>4</sub></a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">HF</a>
			</div>
        </div>
      </div>
		
		<!-- PREGUNTA -->
		<div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-10 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>10</h4>
            <p class="text-black-50 mb-0">Una propiedad para diferenciar un enlace covalente polar y un enlace covalente no polar es:</p>
          <a href="#about" class="btn btn-primary js-scroll-trigger">Electronegatividad</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">Radio atómico</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">Longitud de enlace</a>
			</div>
        </div>
      </div>
		
		<!-- PREGUNTA -->
		<div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-10 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>11</h4>
            <p class="text-black-50 mb-0">El estado de oxidación del Azufre (S) en el compuesto ácido sulfúrico (H<sub>2</sub>SO<sub>4</sub>) es:</p>
          <a href="#about" class="btn btn-primary js-scroll-trigger">+2</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">6</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">-6</a>
			</div>
        </div>
      </div>
		
		<!-- PREGUNTA -->
		<div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-10 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>12</h4>
            <p class="text-black-50 mb-0">La reacción química donde se unen dos elementos o dos compuestos para generar un solo
producto se llama:</p>
          <a href="#about" class="btn btn-primary js-scroll-trigger">Reacción de sustitución</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">Reacción de síntesis</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">Reacción de metátesis</a>
			</div>
        </div>
      </div>
		
		<!-- PREGUNTA -->
		<div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-10 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>13</h4>
            <p class="text-black-50 mb-0">En una reacción de combustión:</p>
          <a href="#about" class="btn btn-primary js-scroll-trigger">Implica perdida de oxígeno</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">Implica la necesidad de
oxígeno</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">Las dos anteriores</a>
			</div>
        </div>
      </div>
		
		<!-- PREGUNTA -->
		<div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-10 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>14</h4>
            <p class="text-black-50 mb-0">Si lo pesos atómicos del Carbono y del Hidrógeno son 12 y 1 respectivamente, la masa molar del propano C<sub>3</sub>H<sub>8</sub> es:</p>
          <a href="#about" class="btn btn-primary js-scroll-trigger">34 g</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">54 g</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">44 g</a>
			</div>
        </div>
      </div>
		
		<!-- PREGUNTA -->
		<div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-10 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>15</h4>
            <p class="text-black-50 mb-0">Los factores que afectan la solubilidad son:</p>
          <a href="#about" class="btn btn-primary js-scroll-trigger">Temperatura y presión</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">Calor y presión</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">Temperatura y calor</a>
			</div>
        </div>
      </div>
		
		<!-- PREGUNTA -->
		<div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-10 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>16</h4>
            <p class="text-black-50 mb-0">Se puede medir y observar sin que se modifique la composición de la sustancia:</p>
          <a href="#about" class="btn btn-primary js-scroll-trigger">Propiedad química</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">Propiedad física</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">Ninguna de las anteriores.</a>
			</div>
        </div>
      </div>
		
		<!-- PREGUNTA -->
		<div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-10 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>17</h4>
            <p class="text-black-50 mb-0">Es el procedimiento que se sigue para preparar una disolución menos concentrada a partir
de un más concentrada</p>
          <a href="#about" class="btn btn-primary js-scroll-trigger">Concentración</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">Solvatación</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">Dilución</a>
			</div>
        </div>
      </div>
		
		<!-- PREGUNTA -->
		<div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-10 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>18</h4>
            <p class="text-black-50 mb-0">El grupo funcional que representa un alcohol es:</p>
          <a href="#about" class="btn btn-primary js-scroll-trigger">R-COOH</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">R-CO-R</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">R-OH</a>
			</div>
        </div>
      </div>
		
		<!-- PREGUNTA -->
		<div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-10 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>19</h4>
            <p class="text-black-50 mb-0">Cuál de las siguientes moléculas es inorgánica:</p>
          <a href="#about" class="btn btn-primary js-scroll-trigger">NaCl</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">C<sub>6</sub>H<sub>12</sub>O<sub>6</sub></a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">CH<sub>4</sub></a>
			</div>
        </div>
      </div>
		
		<!-- PREGUNTA -->
		<div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-10 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>20</h4>
            <p class="text-black-50 mb-0">¿Cuál de los siguientes compuestos es el principal componente del gas natural?</p>
          <a href="#about" class="btn btn-primary js-scroll-trigger">BH<sub>4</sub></a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">SH<sub>4</sub></a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">CH<sub>4</sub></a>
			</div>
        </div>
      </div>
		
		<!-- PREGUNTA -->
		<div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-10 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>21</h4>
            <p class="text-black-50 mb-0">¿Cuál es la fracción equivalente a –24?</p>
          <a href="#about" class="btn btn-primary js-scroll-trigger">-<sup>6</sup>&frasl;<sub>8</sub></a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">-<sup>9</sup>&frasl;<sub>6</sub></a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">-<sup>6</sup>&frasl;<sub>12</sub></a>
			</div>
        </div>
      </div>
		
		<!-- PREGUNTA -->
		<div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-10 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>22</h4>
            <p class="text-black-50 mb-0">¿Cuál es el resultado de <sup>5</sup>&frasl;<sub>6</sub> + <sup>2</sup>&frasl;<sub>4</sub> + <sup>9</sup>&frasl;<sub>10</sub>?</p>
          <a href="#about" class="btn btn-primary js-scroll-trigger"><sup>67</sup>&frasl;<sub>240</sub></a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger"><sup>67</sup>&frasl;<sub>30</sub></a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger"><sup>4</sup>&frasl;<sub>15</sub></a>
			</div>
        </div>
      </div>
		
		<!-- PREGUNTA -->
		<div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-10 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>23</h4>
            <p class="text-black-50 mb-0">¿Cuál es el resultado de la siguiente operación matemática (<sup>18</sup>&frasl;<sub>10</sub>)(<sup>8</sup>&frasl;<sub>3</sub>)?</p>
          <a href="#about" class="btn btn-primary js-scroll-trigger"><sup>24</sup>&frasl;<sub>5</sub></a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger"><sup>27</sup>&frasl;<sub>40</sub></a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger"><sup>5</sup>&frasl;<sub>24</sub></a>
			</div>
        </div>
      </div>
		
		<!-- PREGUNTA -->
		<div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-10 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>24</h4>
            <p class="text-black-50 mb-0">Identifique el resultado de la siguiente operación 
			  <div class="eq-c text-black-50 mb-0">
[
<div class="fraction text-black-50 mb-0">
<span class="fup text-black-50 mb-0">3+(6)(3)</span>
<span class="bar text-black-50 mb-0">/</span>
<span class="fdn text-black-50 mb-0">3</span>
</div>
]+2(2-5)<sup>2</sup>
</div>.</p>
          <a href="#about" class="btn btn-primary js-scroll-trigger">-25</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">-27</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">25</a>
			</div>
        </div>
      </div>
	  
	  <!-- PREGUNTA -->
		<div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-10 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>25</h4>
            <p class="text-black-50 mb-0">En la panadería San José hay tres panaderos, cada uno produce determinada cantidad de
conchas. El primero produce 100 en media hora, el segundo 100 por hora y el tercero 150
por hora. ¿Cuántas conchas producirán entre los tres en cuatro horas?</p>
          <a href="#about" class="btn btn-primary js-scroll-trigger">900</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">1800</a>
			  <a href="#about" class="btn btn-primary js-scroll-trigger">2250</a>
			</div>
        </div>
      </div>
		
<!--FIN PREGUNTAS-->
    </div>
  </section>

  <!-- Signup Section -->
  <section id="signup" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">Subscribe to receive updates!</h2>

          <form class="form-inline d-flex">
            <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Enter email address...">
            <button type="submit" class="btn btn-primary mx-auto">Subscribe</button>
          </form>

        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="contact-section bg-black">
    <div class="container">

      <div class="row">

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Address</h4>
              <hr class="my-4">
              <div class="small text-black-50">4923 Market Street, Orlando FL</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Email</h4>
              <hr class="my-4">
              <div class="small text-black-50">
                <a href="#">hello@yourdomain.com</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-mobile-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Phone</h4>
              <hr class="my-4">
              <div class="small text-black-50">+1 (555) 902-8832</div>
            </div>
          </div>
        </div>
      </div>

      <div class="social d-flex justify-content-center">
        <a href="#" class="mx-2">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-github"></i>
        </a>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; Your Website 2019
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/grayscale.min.js"></script>

</body>

</html>
