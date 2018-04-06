<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href={{ asset('icon.png') }}>
    <title>@yield('title','Welcome') | {{ config('app.name', 'Conexión Fútbol') }}</title>

        <!-- Bootstrap core CSS -->
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">   
    <!-- Styles -->
<!--    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/webapp.css') }}" rel="stylesheet">


    <style type="text/css">
        #cf-mvl-treenavbutton .cf-btn-menu{
            background-image: url("{{ asset('btn-menu-gray.svg') }}");
        }
        #cf-mvl-treenavbutton.active .cf-btn-menu{
            background-image: url("{{ asset('btn-menu-white.svg') }}");
        }    	
    </style>
	@yield('head')

</head>

<body>

<header class="cf-main-header sticky-top d-flex container-fluid">
	<!--
	INICIO DIV LOGO MSJ
	-->	
	<div class="d-inline-flex align-items-center cf-logo">
				  <a class="cf-navbar-brand" href="#">
				    <img src="{{ asset('cf-logo.svg') }}" width="75" height="60" class="d-inline-block align-top" alt="">
				  </a>
				  <a class="cf-navbar-brand-mvl" href="#">
				    <img src="{{ asset('cf-logo.svg') }}" width="60" height="48" class="d-inline-block align-top" alt="">
				  </a>				  
				  <div class="cf-text-logo">
				  <div class="cf-logo-name">
				  	Conexión Fútbol
				  </div>
				  <div class="cf-logo-slogan">
				  	Encuentra | Únete | Juega
				  </div>					  	
				  </div>		
	  
	</div>	
	<!--
	FIN LOGO MENSAJE
	-->	
	<!--
	INICIO DIV MENU
	-->	
	<!--
	INICIO DIV MENU SUPERIOR
	-->	

	<div class="nav d-inline-flex cf-menu">
		<div class="container-fluid cf-top-banner d-flex px-0">
			<nav class="cf-dsk-top-menu ml-auto show-lg">
				<ul class="nav d-inline-flex cf-nav-thin ">
				  <li class="nav-item">
				  	<img src={{ asset('images/language/'.LaravelLocalization::getCurrentLocale().'.png')}} style='display: inline-flex; height: 24px; margin: auto;' alt="">
				    <a class="nav-link active pr-0" href="#" >
				    {{ LaravelLocalization::getCurrentLocaleNative()}}
				</a>
				  </li>
				  <li class="nav-item">
				    <a href="#" data-toggle="popover" data-placement="bottom" data-content="


<ul style='padding-left: 0px;list-style: none;'>
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li><img style='display: inline-flex; height: 24px; margin: auto;' alt='' src={{ asset('images/language/'.$localeCode.'.png')}} > <a rel='alternate' hreflang='{{ $localeCode }}' href='{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}' style='text-decoration: none; color: #777; padding: 0.25rem 0.5rem; font-size:0.8rem '>
                {{ $properties['native'] }} </a>
            </li>

    @endforeach
</ul>
					"  
					aria-expanded="false" aria-haspopup="true" class="dropdown-toggle "><span class="caret"></span></a>
				  </li>

				</ul>				
				<ul class="nav d-inline-flex cf-nav-thin cf-separate-items-thin">
				  <li class="nav-item">
				    <a class="nav-link" href="#">Contact Us</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="#">Help</a>
				  </li>  
				</ul>				
			</nav>				
		</div>
	<!--
	INICIO DIV MENU MAIN MENU
	-->	

		<div class="container-fluid cf-main-banner d-flex px-0">
			<nav class="cf-dsk-main-menu mr-auto">

			  
				<ul class="nav d-inline-flex cf-nav-thin cf-under cf-separate-items-thin show-lg">
				  <li class="nav-item">
				    <a class="nav-link" href="#">How it works?</a>
						<div class="submenu-container" class="">
							<div class="submenu-section">
								<ul class="cf-dsk-menu">
									<li><div class="cf-dsk-treenav-no-in cf-dsk-treenav-in-title">SEGÚN TU ROL</div></li>
									<li><a href=""><div class="cf-dsk-treenav-no-in">Cómo Jugador</div></a></li>
									<li><a href=""><div class="cf-dsk-treenav-no-in">Cómo Equipo</div></a></li>
									<li><a href=""><div class="cf-dsk-treenav-no-in">Cómo Administrador de Cancha</div></a></li>		
									<li><a href=""><div class="cf-dsk-treenav-no-in">Cómo Árbitro</div></a></li>
									<li><a href=""><div class="cf-dsk-treenav-no-in">Cómo Auspiciador</div></a></li>
								</ul>								
							</div>
						</div>	
								    
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="#">Manage a court?</a>
						<div class="submenu-container" class="">
							<div class="submenu-section">
							<ul class="cf-dsk-menu">
								<li><div class="cf-dsk-treenav-no-in cf-dsk-treenav-in-title">JUGADOR</div></li>
								<li><a href=""><div class="cf-dsk-treenav-no-in">Mis Equipos</div></a></li>
								<li><a href=""><div class="cf-dsk-treenav-no-in">Registrar Equipo</div></a></li>
								<li><a href=""><div class="cf-dsk-treenav-no-in">Buscar Equipo</div></a></li>		
								<li><div class="cf-dsk-treenav-no-in cf-dsk-treenav-in-title">EQUIPO</div></li>
								<li><a href=""><div class="cf-dsk-treenav-no-in">Acción 1</div></a></li>
								<li><a href=""><div class="cf-dsk-treenav-no-in">Acción 2</div></a></li>
							</ul>
							</div>
						</div>					    
				  </li>  
				  <li class="nav-item">
				    <a class="nav-link" href="#">Download App</a>
						<div class="submenu-container" class="">
							<div class="submenu-section">
								<ul class="cf-dsk-menu">
									<li><div class="cf-dsk-treenav-no-in cf-dsk-treenav-in-title">¿ADMINISTRAS UNA CANCHA?</div></li>
									<p class="text-submenu">Ponte en contacto con nosotros para registrarla y potenciar tu negocio maximizando tu beneficio: <a href="">Contáctanos</a></p>
									<li><div class="cf-dsk-treenav-no-in cf-dsk-treenav-in-title">¿ERES ÁRBITRO?</div></li>
									<p class="text-submenu">Dispones de tiempo libre en determinados horarios y deseas ofrecer tus servicios: <a href="">Regístrate</a></p>				
								</ul>								
							</div>
							<div class="submenu-section">
							<ul class="cf-dsk-menu">
								<li><div class="cf-dsk-treenav-no-in cf-dsk-treenav-in-title">AYUDA</div></li>
								<li><a href=""><div class="cf-dsk-treenav-no-in">Preguntas Frecuentes</div></a></li>
								<li><a href=""><div class="cf-dsk-treenav-no-in">Guías de Uso</div></a></li>
								<li><div class="cf-dsk-treenav-no-in cf-dsk-treenav-in-title">CONTÁCTANOS</div></li>
								<li><a href=""><div class="cf-dsk-treenav-no-in">Envía una sugerencia</div></a></li>
								<li><a href=""><div class="cf-dsk-treenav-no-in">Deja tu consulta</div></a></li>
								<li><a href=""><div class="cf-dsk-treenav-no-in">Ingresa un reclamo</div></a></li>									
							</ul>
							</div>
						</div>	
				  </li> 				  
				</ul>				
			</nav>	
	<!--
	BOTON MENU MVL
	-->	

			<button id="cf-mvl-treenavbutton" class="navbar-toggler cf-border-btn hide-lg" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon cf-btn-menu"></span>
		  	</button>	
	<!--
	INICIO DIV MENU MAIN DERECHA
	-->	
			<nav class="cf-dsk-main-menu ml-auto show-lg">	
				<ul class="cf-under nav d-inline-flex cf-nav-thin">
				 @guest 
				  <li class="nav-item mr-3">
				    <img src={{ asset('images/login.png')}} height="20px" width="20px" class="m-auto"> <a class="nav-link" href="{{ route('login') }}">Login</a>
				  </li>
				  <li class="nav-item">
				    <img src={{ asset('images/register2.png')}} height="20px" width="20px" class="m-auto"> <a class="nav-link pl-1" href="{{ route('register') }}">Register</a>
				  </li>
				@else
					<li class="nav-item">
						<img src={{ asset('images/login.png')}} height="20px" width="20px" class="m-auto">
						<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> {{ csrf_field() }}</form>
					</li>
 				@endguest
				</ul>				
			</nav>



		</div>		
	</div>	
	<!--
	FIN DIV MENU
	-->	
			
</header>

	<!--
	INICIO DIV MENU DESPLEGABLE
	-->	
			<nav id="cf-mvl-treenav">
	<!--
	PRIMER NIVEL TREE MENU
	-->		
				<div id="cf-primary-treenav" class="cf-treenav inactive">
					
					<div id="cf-mvl-top-menu">
						<div class="cf-h-mvl-top-menu cf-item-mvl-menu">		
							<ul class="nav d-inline-flex cf-nav-thin cf-separate-items-thin">
							  
							  <li class="nav-item">
							    <a class="nav-link" href="#">Login</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" href="#">Register</a>
							  </li> 

							</ul>	
						</div>	
					</div>

						<ul class="cf-mvl-menu">
							<li><div class="cf-mvl-treenav-in item-mvl-menu submenu1">¿Cómo funciona?<span></span></div> </li>
							<li><div class="cf-mvl-treenav-in item-mvl-menu submenu2">Equipos<span></span></div></li>
							<li><div class="cf-mvl-treenav-in item-mvl-menu submenu3">Eventos<span></span></div></li>
							<li><div class="cf-mvl-treenav-in item-mvl-menu submenu4">Canchas<span></span></div></li>
							<li><div class="cf-mvl-treenav-in item-mvl-menu submenu5">Torneos<span></span></div></li>
							<li><div class="cf-mvl-treenav-in item-mvl-menu submenu6">Retos<span></span></div></li>
							<li><a href=""><div class="cf-mvl-treenav-no-in">Administrador Cancha</div></a></li>
							<li><a href=""><div class="cf-mvl-treenav-no-in">Árbitros</div></a></li>
							<li><a href=""><div class="cf-mvl-treenav-no-in">Help</div></a></li>
							<li><a href=""><div class="cf-mvl-treenav-no-in">Language</div></a></li>
						</ul>
				</div><!--left_-100%-->
	<!--
	SEGUNDO NIVEL TREE MENU
	-->		

				<div id="cf-secondary-treenav" class="cf-treenav">
				<div id="submenu1" class="inactive submenu">
					<div class="cf-back-treenav">
						<span class="cf-back-span">
						</span>
						</button>
						<span class="cf-back-title">
						¿CÓMO FUNCIONA?
						</span>
					</div>
					<ul class="cf-mvl-menu">
						<li><a href=""><div class="cf-mvl-treenav-no-in">Cómo Jugador</div></a></li>
						<li><a href=""><div class="cf-mvl-treenav-no-in">Cómo Equipo</div></a></li>
						<li><a href=""><div class="cf-mvl-treenav-no-in">Administrador de cancha</div></a></li>
						<li><a href=""><div class="cf-mvl-treenav-no-in">Cómo Árbitro</div></a></li>
						<li><a href=""><div class="cf-mvl-treenav-no-in">Cómo Auspiciador</div></a></li>
					</ul>
				</div>				
				<div id="submenu2" class="inactive submenu">
					<div class="cf-back-treenav">
						<span class="cf-back-span">
						</span>
						</button>
						<span class="cf-back-title">
						EQUIPOS
						</span>
					</div>
					<ul class="cf-mvl-menu">
						<li><a href=""><div class="cf-mvl-treenav-no-in">Ver Equipos</div></a></li>
						<li><div class="cf-mvl-treenav-no-in cf-mvl-treenav-in-title">JUGADOR</div></li>
						<li><a href=""><div class="cf-mvl-treenav-no-in">Mis Equipos</div></a></li>
						<li><a href=""><div class="cf-mvl-treenav-no-in">Registrar Equipo</div></a></li>
						<li><a href=""><div class="cf-mvl-treenav-no-in">Buscar Equipo</div></a></li>		
						<li><div class="cf-mvl-treenav-no-in cf-mvl-treenav-in-title">EQUIPO</div></li>
						<li><a href=""><div class="cf-mvl-treenav-no-in">Acción 1</div></a></li>
						<li><a href=""><div class="cf-mvl-treenav-no-in">Acción 2</div></a></li>
					</ul>
				</div>				
				<div id="submenu3" class="inactive submenu" >
				</div>
				
				<div id="submenu4" class="inactive submenu">
				</div>
				
				<div id="submenu5" class="inactive submenu">
				</div>
				
				<div id="submenu6" class="inactive submenu ">
				</div>
					
				</div>
			
			</nav>	<!-- open display block or none
			after sombra superior-->

	</nav>


	<section>
		@yield('content')
	</section>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

<script src={{ asset('plugins/bootstrap/js/jquery-3.2.1.js') }}></script>
<script src={{ asset('plugins/bootstrap/js/popper.js') }}></script>
<script src={{ asset('plugins/bootstrap/js/bootstrap.js') }}></script>
<script src={{ asset('plugins/fontawesome/js/fontawesome-all.js') }}></script>
<!-- Scripts -->
<script src={{ asset('js/main.js') }} type="text/javascript"></script>
<script src={{ asset('js/webapp.js') }} type="text/javascript"></script>

<script type="text/javascript">
	$(document).ready(function(){
 	$('[data-toggle="popover"]').popover({ html : true });
 	
 });
 
</script>    <!-- Scripts -->
@yield('scripts')
</body>
</html>        	