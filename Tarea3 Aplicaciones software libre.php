<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Tarea</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<style type="text/css" media="screen">
		.smooth{
			height: 43em;
		}
		@media only screen and (max-width: 768px){
			.smooth{
				height: auto;
			}
		}
		body{
			font-family: 'Montserrat', sans-serif;
		}
		section .container{
			color:  white;
		}
		#information img {
		    border-radius: 8px;
		    -webkit-box-shadow: 0px 2px 17px -1px rgba(0,0,0,0.75);
			-moz-box-shadow: 0px 2px 17px -1px rgba(0,0,0,0.75);
			box-shadow: 0px 2px 17px -1px rgba(0,0,0,0.75);
		}
		.info{
			font-size: 19px;
			text-align: justify;
		}
		section .container .card{
			color: black;
		}
		.icon i {
		    font-size: 3em;
		    margin-bottom: 10px;
		    padding: 10px;
		    border: 2px solid #ffc107;
		    border-radius: 19px;
		    width: 70px;
		}
		.info-contact a{
			text-decoration: none;
			color:white;
		}
		.info-contact a:hover{
			color:#DCDCDC;
		}
		.info-contact a:hover .icon i{
			border: 2px solid #E6AE04;
		}
		.tecnologies{
			list-style: none;
			padding:0px;
		}
		.tecnologies li{
			display: inline-block;
			    color: #909090;
			    font-size: 1em;
			    font-weight: bold;
			    margin-right: 0.6em;
		}
		#education .row p{
			font-size: 20px;
			width: 100%;
		}
		#education .row i{
			font-size: 5em;
		}
		#education .row a {
			color:  #ec5250;
			text-decoration: none;
		}

		#education .row a:hover {
			color: #F07B79;
		}
	</style>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<a class="navbar-brand" href="/">Kevin Arias</a>
	<div class="collapse navbar-collapse" id="nav-content">   
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="#information" onclick="scrollto('information')">Datos Personales</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#abilities" onclick="scrollto('abilities')">Habilidades</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#portfolio" onclick="scrollto('portfolio')">Proyectos</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#education" onclick="scrollto('education')">Educación</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#contact" onclick="scrollto('contact')">Contacto</a>
			</li>
		</ul>
	</div>
</nav>
		<section class="information smooth bg-warning" id="information" >
			<div class="container ">
				<div class="row">
					<div class="col-md-12 ">
						<h1 class="text-center mt-5">Informacion Personal</h1>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-md-6 text-center">
						<img src="https://scontent.fsjo1-1.fna.fbcdn.net/v/t1.0-9/20915079_1741696632539249_150267872102925257_n.jpg?_nc_cat=0&oh=82551ad751597d19a208feabc7260fa0&oe=5BB03FFC" width="300px" height="370px">
					</div>
					<div class="col-md-6">
						<p class="info">
							Hola, mi nombre es <span style="font-weight: 700">Kevin Arias Arce</span>. Tengo 19 años y me encanta investigar para poder aprender cosas nuevas cada día.<br>
							Soy <span style="font-style: italic; font-weight: 700">desarrollador web</span> en una empresa llamada <span style="font-weight: 700; color: #ce0000">Uniko</span>, llevo trabajando ahí 4 meses, actualmente soy el único desarrollador en la empresa.<br>  
							Mis compañeros son diseñadores gráficos y me gusta lo que hacen, por lo cual he estado aprendiendo un poco de diseño gráfico.<br>
							En mis tiempos libres me gusta con jugar videojuegos ya sea con mis amigos o solo, ver películas, series y muchos videos de YouTube.
						</p>
					</div>
				</div>
			</div>
		</section>

		<section class="abilities smooth bg-danger" id="abilities" >
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center mt-5">Habilidades</h1>
						<p class="info mt-4">
							De lo mucho que me gusta investigar, he aprendido muchas tecnologías, empezando por lo más básico con lo que empecé que fue, JAVA creando aplicaciones de escritorio, como casi todos con una calculadora, luego de ahí pasé con C# a seguir creando aplicaciones para escritorio, un tiempo después empecé con PHP que para mí ha sido uno de los mejores lenguajes que he aprendido.
							Una vez aprendido investigué más sobre él y me tope con frameworks como codeigniter y Laravel que Laravel fue el que cautivó mi atención y he estado aprendiendo más desde que lo conocí.
							Junto con Laravel conocí MySQL un sistema gestor de base de datos, también probé PostgreSQL y SQLServer.
							También estuve probando Ionic un framework para hacer aplicaciones hibridas para Android y Iphone y con ello me topé con Typescript que igualmente estuve probando.
							Seguidamente regrese al lenguaje C# para utilizarlo con el framework .Net para desarrollar aplicaciones web y con un sistema gestor de base de datos como lo es SQLite.
							Últimamente por mi trabajo, he estado en el mundo de WordPress aprendiendo desde como se hace un plugin hasta crear un tema.

						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 text-center">
						<img src="https://i.imgur.com/ecT3jOm.png" width="58%">
					</div>
					<div class="col-md-6 text-center">
						<img src="https://i.imgur.com/DRH0xUy.png" width="70%">
					</div>
				</div>
			</div>
		</section>

		<section class="portfolio smooth bg-primary" id="portfolio" >
			<div class="container">
				<div class="row">
					<div class="col-md-12 ">
						<h1 class="text-center mt-2">Proyectos</h1>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-md-4">
						<div class="card" >
						  <img class="card-img-top" src="https://i.imgur.com/a9o74PW.png">
						  <div class="card-body">
						    <h4 class="card-title">Plugin WordPress Genetica</h4>
						    <p class="card-text">Agrega una rama padre y una rama Madre para una especie y genera un árbol genealógico.</p>	
						    <p><strong>Tecnología</strong></p>
						    <ul class="tecnologies">
						        <li>WP Functions</li>
						        <li>PHP</li>
						        <li>MySQL</li>
						    </ul>
						  </div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card" >
						  <img class="card-img-top" src="https://i.imgur.com/Y2elwoR.png">
						  <div class="card-body">
						    <h4 class="card-title">Administracion Horarios</h4>
						    <p class="card-text">Aplicacion creada para Economás, administra horarios de todos lo caloboradores .</p><br>
						    <p><strong>Tecnología</strong></p>
						    <ul class="tecnologies">
						        <li>PHP</li>
						        <li>Laravel</li>
						        <li>Bootstrap 4</li>
						        <li>MySQL</li>
						    </ul>
						  </div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card" >
						  <img class="card-img-top" src="https://i.imgur.com/kndf6E0.png">
						  <div class="card-body">
						    <h4 class="card-title">Notas para usuario</h4>
						    <p class="card-text">API para administrar usuarios, clientes, reuniones y tiquetes para una empresa y consumida con angular.</p><br>
						    <p><strong>Tecnología</strong></p>
						    <ul class="tecnologies">
						        <li>Ruby on Rails</li>
						        <li>Angular 5</li>
						        <li>SQLite</li>
						    </ul>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="education smooth bg-success" id="education" >
			<div class="container">
				<div class="row">
					<div class="col-md-12 ">
						<h1 class="text-center mt-5">Educación</h1>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-md-6 text-center">
						<i class="fas fa-sticky-note"></i>
						<p class="mt-5">Bachillerato Educación Media - <strong>2015</strong></p>
					</div>
					<div class="col-md-6 text-center">
						<i class="fas fa-book-open"></i>
						<p class="mt-5">Diplomado Ingeniería en Software - <strong>2017</strong></p>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-md-12 text-center">
						<p>Varios cursos virtuales realizados en la plataforma <a href="https://www.udemy.com/"><strong>Udemy</strong></a></p>
					</div>
					<div class="col-md-12 text-center">
						<a href="https://www.udemy.com/"><img src="https://i.imgur.com/7HrTPy5.png" width="50%"></a>
					</div>
				</div>
			</div>
		</section>
		
		<section class="contact smooth bg-info" id="contact" >
			<div class="container">
				<div class="row">
					<div class="col-md-12 ">
						<h1 class="text-center mt-5">Contacto</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">	
						<div class="info-contact text-center">
							<a href="tel:+506 84388120">
							<div class="icon">
								<i class="fas fa-phone"></i>
							</div>
							<p class="text">84388120</p>
							</a>
						</div>
					</div>
					<div class="col-md-4">	
						<div class="info-contact text-center">
							<a href="mailto:aa-kevin@hotmail.com">
								<div class="icon">
									<i class="fas fa-envelope"></i>
								</div>
								<p class="text">aa-kevin@hotmail.com</p>
							</a>
						</div>
					</div>
					<div class="col-md-4">	
						<div class="info-contact text-center">
							<a href="https://www.facebook.com/kevin.arias.arce" target="_blanck">
								<div class="icon ">
									<i class="fab fa-facebook-square"></i>
								</div>
								<p class="text">Kevin Arias Arce</p>
							</a>
						</div>
					</div>
				</div>
				<div class="row">
					<form style="width: 100%;">
					    <div class="row row-sm-offset">
					        <div class="col-md-4 ">
					            <div class="form-group">
					                <label class="form-control-label">Nombre</label>
					                <input type="text" class="form-control" name="name" required="">
					            </div>
					        </div>
					        <div class="col-md-4">
					            <div class="form-group">
					                <label class="form-control-label">Correo</label>
					                <input type="email" class="form-control" name="email" required="">
					            </div>
					        </div>
					        <div class="col-md-4">
					            <div class="form-group">
					                <label class="form-control-label">Teléfono</label>
					                <input type="tel" class="form-control" name="phone">
					            </div>
					        </div>
					    </div>
					    <div class="form-group">
					        <label class="form-control-label">Mensaje</label>
					        <textarea type="text" class="form-control" name="message" rows="7"></textarea>
					    </div>
						<button href="" type="submit" class="btn btn-warning btn-form">ENVIAR</button>
					</form>
				</div>
			</div>
		</section>


	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>	<script>
		function scrollto(section)
		{
			$('html,body').animate({
			  	scrollTop: $("#"+section).offset().top
			},'slow');
		}
	</script>
</body>
</html>