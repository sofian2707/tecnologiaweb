
<?php include("administrador/configuracion.php");?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Wifi Piedra</title>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">

		<!-- animate css -->
		<link rel="stylesheet" href="css/animate.min.css">
		<!-- bootstrap css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- font-awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- google font -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,800' rel='stylesheet' type='text/css'>
		<!-- custom css -->
		<link rel="stylesheet" href="css/templatemo-style.css">

	</head>
	<body>
		<!-- start preloader -->
		<div class="preloader">
			<div class="sk-spinner sk-spinner-rotating-plane"></div>
    	 </div>
		<!-- end preloader -->
		<!-- start navigation -->
		<nav class="navbar navbar-default navbar-fixed-top templatemo-nav" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">Wifi Piedra</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right text-uppercase">
						<li><a href="#home"href="<?php echo $url_item1;?>"><?php echo $item1;?></a></li>
						<li><a href="#feature"href="<?php echo $url_item2;?>"><?php echo $item2;?></a></li>
						<li><a href="#pricing"href="<?php echo $url_item3;?>"><?php echo $item3;?></a></li>
						<li><a href="#contact" href="<?php echo $url_item4;?>"><?php echo $item4;?></a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- end navigation -->
		<!-- start home -->
		<section id="home">
			<div class="overlay" style="height: 440px; background-image: url('images/fondo.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center; ">
				<div class="container">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10 wow fadeIn" data-wow-delay="0.3s" style="margin-right: 2500px;">
							<h1 class="text-upper" style=" text-align: left; margin-top: 50px;" ><?php echo $tituloprincipal;?></h1>
							<p class="tm-white" style=" color: grey; text-align: left; font-size: 20px; margin-right: 120px;"><?php echo $descripcion;?></p>
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
			</div>
		</section>
		<!-- end home -->
		<!-- start divider -->
		<section id="divider">
			<div class="container">
				<div class="row">
					<div class="col-md-4 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
						<i class="fa fa-home"></i>
						<h3 class="text-uppercase"><?php echo $title1;?></h3>
						<p><?php echo $descripcion1;?></p>
					</div>
					<div class="col-md-4 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
						<i class="fa fa-rss"></i>
						<h3 class="text-uppercase"><?php echo $title2;?></h3>
						<p><?php echo $descripcion2;?></p>
					</div>
					<div class="col-md-4 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
						<i class="fa fa-thumbs-up"></i>
						<h3 class="text-uppercase"><?php echo $title3;?></h3>
						<p><?php echo $descripcion3;?></p>
					</div>
				</div>
			</div>
		</section>
		<!-- end divider -->

		<!-- start feature -->
		<section id="feature">
			<div class="container">
				<div class="row">
					<div class="col-md-6 wow fadeInLeft" data-wow-delay="0.6s">
						<h2 class="text-uppercase">NUESTRA CONEXION</h2>
						<p>Directa a tu hogar utilizando cables de fibra óptica y sistemas ópticos adaptados a esta tecnología para la distribución de servicios de internet con mayor capacidad de transmisión de información y una altísima estabilidad a condiciones extremas tales como el calor, la humedad o ruido eléctrico.
							Este cable transmite a través de una delgada hebra de vidrio o silicio fundido que conduce la luz, mejorando no sólo la velocidad, sino la calidad de la conexión: un cable de fibra óptica equivale a 110 hilos de cobre.</p>
						<p><span><i class="fa fa-mobile"></i></span> Podes navegar con todos tus dispositivos al mismo tiempo y a toda velocidad</p>
					</div>
					<div class="col-md-6 wow fadeInRight" data-wow-delay="0.6s">
						<img src="images/fibra.jpg" class="img-responsive" alt="feature img">
					</div>
				</div>
			</div>
		</section>

		<!-- end feature -->

		<!-- start feature1 -->

		<section id="feature1">
			<div class="container">
				<div class="row">
					<div class="col-md-6 wow fadeInRight" data-wow-delay="0.6s">
						<img src="images/computer.jpeg" class="img-responsive" alt="feature img">
					</div>
					<div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
						<h2 class="text-uppercase">INSTALACION</h2>
						<p>La instalación de la fibra óptica dura aproximadamente 3 horas. Es necesario que una persona con capacidad de decisión esté presente al menos al comienzo de la instalación, para asegurarse de realizar la instalación según las necesidades del cliente</p>
						<p><span><i class="fa fa-laptop"></i></span>Una vez que instales la fibra óptica, dejarás tu hogar totalmente equipado para posibles necesidades del futuro</p>
					</div>
				</div>
			</div>
		</section>
		<!-- end feature1 -->

		<!-- start pricing -->
		<section id="pricing">
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow bounceIn">
						<h2 class="text-uppercase">Nuestros Planes</h2>
					</div>

					<div class="col-md-3">
						<div class="pricing active text-uppercase">
							<div class="pricing-title">
								<h4><?php echo $nombreplan1;?></h4>
								<p><?php echo $precioplan1;?></p>
								<small class="text-lowercase">Mensuales</small>
							</div>
							<ul>
								<li><?php echo $caracteristicasA;?></li>
								<li><?php echo $caracteristicasB;?></li>
								<li><?php echo $caracteristicasC;?></li>
							</ul>
						</div>
					</div>

					<div class="col-md-3">
					<div class="pricing active text-uppercase">
							<div class="pricing-title">
								<h4><?php echo $nombreplan2;?></h4>
								<p><?php echo $precioplan2;?></p>
								<small class="text-lowercase">Mensuales</small>
							</div>
							<ul>
								<li><?php echo $caracteristicasD;?></li>
								<li><?php echo $caracteristicasE;?></li>
								<li><?php echo $caracteristicasF;?></li>
								<li><?php echo $caracteristicasG;?></li>
							</ul>
						</div>
					</div>

					<div class="col-md-3">
						<div class="pricing active text-uppercase">
						<div class="pricing-title">
								<h4><?php echo $nombreplan3;?></h4>
								<p><?php echo $precioplan3;?></p>
								<small class="text-lowercase">Mensuales</small>
							</div>
							<ul>
								<li><?php echo $caracteristicasH;?></li>
								<li><?php echo $caracteristicasI;?></li>
								<li><?php echo $caracteristicasJ;?></li>
								<li><?php echo $caracteristicasK;?></li>
							</ul>
						</div>
					</div>

					<div class="col-md-3">
						<div class="pricing active text-uppercase">
							<div class="pricing-title">
							<h4><?php echo $nombreplan4;?></h4>
								<p><?php echo $precioplan4;?></p>
								<small class="text-lowercase">Mensuales</small>
							</div>
							<ul>
								<li><?php echo $caracteristicasL;?></li>
								<li><?php echo $caracteristicasM;?></li>
								<li><?php echo $caracteristicasN;?></li>
								<li><?php echo $caracteristicasO;?></li>
								
							</ul>
						</div>
					</div>

					

					
				</div>
			</div>
		</section>
		<!-- end pricing -->

		<!-- start contact -->
		<section id="contact">
			<div class="overlay"  style="background-image: url('images/fondocontac.jpeg'); background-repeat: no-repeat; background-size: cover; background-position: bottom;">
				<div class="container">
					<div class="row">
						<div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
							<h2 class="text-uppercase">Contactanos</h2>
							<p>Escribinos por acá y te decimos si te podemos brindar conexión segun nuestra zona de cobertura </p>
							<address>
								<p><i class="fa fa-map-marker"></i>Almte. Brown 11, Piedra del aguila, Neuquen</p>
								<p><i class="fa fa-phone"></i><?php echo $numerotelefono;?></p>
								<p><i class="fa fa-envelope-o"></i><?php echo $correo;?></p>
							</address>
						</div>
						<div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
							<div class="contact-form">	
<?php
/*  verifica si el formulario ha sido enviado. Si lo tiene, está comprobando si
el campo de nombre está vacío. Si es así, está mostrando una alerta. Si no es así, está mostrando un
alerta diferente. */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST['nombre'];
  $telefono = $_POST['telefono'];
  $email = $_POST['email'];
  $direccion = $_POST['direccion'];
  if (empty($nombre)) {
    echo '<script language="javascript">alert("Formulario incompleto")</script>';
	
  } else {
    echo '<script language="javascript">alert("Gracias por enviar tus datos")</script>';
  }  }

?>				
								<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">	
									<div class="col-md-6">
										<input type="text" name="nombre" class="form-control" placeholder="Nombre">
									</div>
									<div class="col-md-6">
										<input type="tel" name="telefono" class="form-control" placeholder="Telefono">
									</div>
									<div class="col-md-12">
										<input type="text"  name="direccion" class="form-control" placeholder="Direccion">
									</div>
									<div class="col-md-12">
										<input type="email" name="email" class="form-control" placeholder="Email">
									</div>
									<div class="col-md-8">
										<input type="submit" class="form-control text-uppercase" value="Quiero que me contacten">
									</div>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end contact -->

		<!-- start footer -->
		<footer>
			<div class="container">
				<div class="row">
					<p>Copyright © 2022 Wifi Piedra</p>
				</div>
			</div>
		</footer>
		<!-- end footer -->
        
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/jquery.singlePageNav.min.js"></script>
		<script src="js/custom.js"></script>
	</body>
</html>