<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bienestar</title>

	<link rel="shortcut icon" href="/images/favicon.ico.ico.ico" />

	<link href="{{ asset('/fonts/style.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<<<<<<< HEAD
<header>

</header>
	
	<header id="main-header">

		<img src="/images/bienestar.jpg" id="imagenLs">

	</header>
	

<ul id="nav" >

<ul>
		@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Iniciar Sesion</a></li>
						
=======
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
<<<<<<< HEAD
				<a class="navbar-brand" href="#">Bienestar</a>
=======
				<a class="navbar-brand" href="#">Laravel</a>
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
<<<<<<< HEAD
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li><a href="{{ url('cita') }}">Citas</a></li>
					<li><a href="{{ url('lugar') }}">Crear lugar</a></li>
					<li><a href="{{ url('evidencia') }}">Evidencia</a></li>
					<li><a href="{{ url('evento') }}">Eventos</a></li>
					<li><a href="{{ url('novedad') }}">Novedades</a></li>
					
				</ul>
				</ul>
					
=======
					<li><a href="{{ url('/') }}">Home</a></li>
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
<<<<<<< HEAD
						<li><a href="{{ url('/auth/login') }}">Iniciar sesion</a></li>
						<li><a href="{{ url('/auth/register') }}">Registrar</a></li>
=======
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
>>>>>>> 3bf38e7ca71592bde9ad09494c4065905245c3a5
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							
							
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Salir</a></li>


							</ul>


						</li>
							<li><a href="{{ route('aprendiz.index') }}" >Aprendiz</a></li>
	  	<li><a href="{{ route('asesor.index') }}" >Asesores</a></li>
		  <li><a href="#">Citas</a>
	  		<ul>
				<li><a href="{{ route('cita.index') }}">Agendar Cita</a></li>
				<li><a href="{{ route('lugar.index') }}">Sitios de consulta</a></li>
				<li><a href="{{ route('cita.show') }}">Agenda</a></li>

				
			</ul>
		</li>
	 	 <li><a href="{{ route('evento.index') }}" >Eventos</a>
		
			<ul>
				<li><a href="#">Crear Evento</a></li>
				<li><a href="#">Ver Eventos</a></li>
				
			</ul>
		</li>
					@endif
	</ul>
	
	
		  <li><a href="..." >Acerca de</a></li>
	 	 <li><a href="..." >Mision</a></li>
	 	 <li><a href="...">Vision</a></li>
	 	<li><a href="/" >Inicio</a></li>
		<li><a href="#">Blog</a></li>
		<li><a href="#">Contacto</a></li>
	
	</ul>


		<div class="social">
		<ul>
			<li>
			<a href="http://www.facebook.com/falconmasters" target="_blank" class="icon-facebook2"></a>
			<a href="http://www.twitter.com/falconmasters" target="_blank" class="icon-twitter"></a>
			<a href="http://www.googleplus.com/falconmasters" target="_blank" class="icon-google-plus2"></a>
			<a href="mailto:contacto@falconmasters.com" class="icon-envelop"></a>
			</li>
		</ul>
		</div>
	


	
		
	@yield('content')


	


	

	<footer id="main-footer">
	
		<p>Servicio Nacional de Aprendizaje SENA</p>
		<p>Dirección: Calle 52 # 13-65 Bogotá</p>
		<p>&copy; 2015 <a href="public.">Grupo Bienestar</a></p>
	</footer>

	@yield('contentfin')

	
</body>
</html>
