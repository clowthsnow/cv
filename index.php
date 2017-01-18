<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Jashin Mario</title>
	<!-- Importando materialize.css -->
	<link rel="stylesheet" href="css/progressBar">
	<link rel="stylesheet" href="css/estilos">
	<link rel="stylesheet" href="css/materialize.css">
	<!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
	
	<link rel="stylesheet" href="css/fuentes">
	
</head>
<body>

	<div>
		<nav class="transparent">
			<div class="nav-wrapper">
				<a href="#" class="brand-logo" id="logo">Jashin Mario</a>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="#">Sobre Mi</a></li>
					<li><a href="#">Bibiografia</a></li>
					<li><a href="#">Habilidades</a></li>
					<li><a href="#">Contactame</a></li>
				</ul>
				<ul class="side-nav" id="mobile-demo">
					<li><a href="#">Sobre Mi</a></li>
					<li><a href="#">Bibiografia</a></li>
					<li><a href="#">Habilidades</a></li>
					<li><a href="#">Contactame</a></li>
				</ul>
			</div>
		</nav>
	</div>

	<!--<nav class="nav-wrapper transparent ">
		
		<ul id="nav-mobile" class="right hide-on-med-and-dowm">
			<li><a href="#">Perfil</a></li>
			<li><a href="#">Formacion</a></li>
			<li><a href="#">Habilidades</a></li>
			<li><a href="#">Contactame</a></li>
		</ul>
	</nav>-->

	<div class="container">
		
		<div class="row">
			<div class="col s12 m12 l12">
				<div class="card white">
					<div class="card-content">
						<span class="card-title">Hola, Yo soy</span>
						<h1>Jashin Salazar</h1>
						<span class="card-title">Ingeniero de Sistemas</span>
					</div>
				</div>
			</div>
		</div>

		<div class="row teal darken-2">
			<!--<div class="col s12 m12 l12">-->
				<div  class="col s12 m12 l6 teal darken-2 brown-text text-lighten-5" id="about">
					<h1>SOBRE MI</h1>
					<hr>
					<span>
						Soy estudiante de la carrera de Ingenieria de Sistemas de la Universidad Nacional de San Agustín, con experiencia de trabajo en equipo adquirida en los diferentes proyectos realizados en el transcurso de la carrera, con iniciativa, trabajo bajo presión, buena comunicación y desenvolvimiento en grupo
					</span>
				</div>
				<div class="col s12 m12 l6 grey lighten-1 " >
					<h1>Experiencia</h1>
					<hr>
					<span>Si bien no cuento con experiencia previa en el ambito de mi carrera, soy una persona que toma las cosas con la responsabilidad respectiva del cargo, habiendo hecho aplicaciones tanto web como desktop con conocimiento en diferentes lenguajes de programacion y frameworks. <br> Sabiendo trabajar en equipo con diferentes tipos de metodologías y sabiendo aplicar la ingeniera de software en los proyectos dados. <br><br><br></span>
				</div>
			<!--</div>-->
		</div>

		<div class="row">
			<!--<div class="col s12">-->
				<ul class="tabs z-depth-1 ">
					<li class="tab col s4 teal darken-2"><a class="brown-text text-lighten-5" href="#bibiografia">Bibiografia</a></li>
					<li class="tab col s4 teal darken-2"><a class="brown-text text-lighten-5" href="#educacion">Educación</a></li>
					<li class="tab col s4 teal darken-2"><a class="brown-text text-lighten-5" href="#experiencia">Experiencia</a></li>
				</ul>
			<!--</div>-->
			<div id="bibiografia" class="">
				
				<div class="col s12 m12 l6">
					<img id="prog" class="responsive-img" src="img/programacion-web.jpg" alt="">
				</div>
				<div class="col s12 m12 l6">
					<h3>Mi vida Personal</h3>
					<br>
					<span>Nací en la ciudad de Arequipa Perú en el año de 1991, desde joven me apasiono el mundo de la informatica postulando asi a la Universidad Nacional de San Agustín a la carrera de Ingeniería de Sistemas
					<br>
					Aun cursando el tercer año de la carrera eh desarrollado pequeños y medianos proyectos y eh hecho algunos trabajos de freelance</span>
				</div>
				
			</div>
			<div id="educacion" class="col">oli2</div>
			<div id="experiencia" class="col">oli3</div>
		</div>

	</div>

	<script src="js/jquery-3.1.1.min.js"></script>
	<!-- Compiled and minified JavaScript -->
  	<script src="js/materialize.min.js"></script>
  	<script src="js/pace.min.js"></script>
  	<script>
  		$(document).ready(function(){
  			$(".button-collapse").sideNav();
  		});
  		$(document).ready(function(){
    		$('ul.tabs').tabs();
  		});
  	</script>
</body>
</html>