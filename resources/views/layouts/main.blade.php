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

    <!-- Styles  Lang::get('titles.app') -->
    <!-- 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    -->
    	<!-- Bootstrap core CSS -->
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

	<style>
		.cf-main-header{
			border-bottom: 1px solid #bbb;
			background: white;
			padding-top: 5px;
			padding-bottom: 5px;
			padding-left: 5px !important;
			padding-right: 5px !important;
			border-bottom: 2px solid #eee;
		}
		.cf-navbar-brand{
			display: none;
		}
		.cf-logo{
			min-width: 220px;
		}
		.cf-text-logo{
			padding-left: 2px;			
		}
		.cf-logo-name{
	    font-size: 1.2rem;
	    margin-bottom: -5px;
	    color: #3e90b7;
		}
		.cf-logo-slogan{
		font-size: 0.7rem;
		}
		.cf-menu{
			width: 100%;
			margin-top: -5px;
			margin-bottom: -5px;
		}
		.cf-main-banner{
			padding-top: 6px;			
		}		
		.cf-dsk-top-menu{
			font-size: 0.8rem;
		}
		.cf-dsk-top-menu a{
			text-decoration: none;
			color: #3e90b7;
		}	
		.cf-dsk-top-menu a:hover{			
			color: #666;
		}	
		.cf-dsk-main-menu a{
			text-decoration: none;
			color: #888;
		}
		.cf-dsk-main-menu a:hover{
			color: #3e90b7;
		}
		.cf-navbar-brand{
			font-size: 1.5rem;
		}
		#cf-mvl-treenavbutton.active{
			background:#aaa;
		}
		#cf-mvl-treenavbutton .cf-btn-menu{
			background-image: url("{{ asset('btn-menu-gray.svg') }}");
		}
		#cf-mvl-treenavbutton.active .cf-btn-menu{
			background-image: url("{{ asset('btn-menu-white.svg') }}");
		}		
		.cf-border-btn{
			border:1px solid rgba(0,0,0,0.1);
		}
		.logo a{
			color: #007bff;
		}
		ul.d-inline-flex>li{
			display: -ms-inline-flexbox !important;
    		display: inline-flex !important;	
		}
		ul.cf-separate-items-thin>li:after{
		    color: #999;
		    content: "|";
		    padding: 0.25rem 0rem;	
		}
		ul.cf-nav-thin>li>a{
			padding: 0.25rem 0.5rem;
		} 	
		.cf-under>li{
			padding-bottom: 10px;
		}
		.cf-under>li:hover{
			padding-bottom: 6px;			
    		border-bottom: 4px solid #3e90b7;
		}
		button#cf-mvl-treenavbutton{
			margin-bottom: 6px;
		}
		.show-lg{
			display: none !important;
		}
		.hide-lg{
			display: inline-flex !important;
		}
		@media screen and (min-width: 576px){
			.cf-logo{
				min-width: 245px;
			}			
			.cf-main-header{
				padding-left: 10px !important;
				padding-right: 10px !important;
			}
			.cf-navbar-brand-mvl{
				display: none;
			}
			.cf-navbar-brand{
				display: block;
			}
			.cf-logo-name{
		    font-size: 1.4rem;
		    margin-bottom: -5px;
			}
			.cf-logo-slogan{
			font-size: 0.8rem;
			}
		}				
		@media screen and (min-width: 960px){

			.cf-main-header{
				padding-left: 25px !important;
				padding-right: 25px !important;
			}
			.hide-lg{
				display: none !important;
			}
			.show-lg{
				display: inline-flex !important;
			}
		}

	</style>
	<style>
#cf-mvl-treenav{
	display: none;
    left: 0;
} 
#cf-mvl-treenav.open{
	display: block;
}		
.cf-treenav{
	background-color: white;
    width: 100%;	
	min-width: 288px;    
    border-right: 1px solid #ececec;   
    bottom: auto;
    overflow-y: auto;
    max-height: 100%;
    position: absolute;
}	
.cf-h-mvl-top-menu{
	border-bottom: 1px solid #ececec;
    padding: 7px 20px;
}
.cf-h-mvl-top-menu a{
	text-decoration: none;
	color: #3e90b7;
}
.cf-h-mvl-top-menu a:hover{
	color: #777;
}
.cf-item-mvl-menu{
	border-bottom: 1px solid #ececec;
}
.cf-mvl-treenav-in{
	color: #3e90b7;
	cursor: pointer;
	width: 100%;
    display: inline-flex;
    padding: 12px 25px;
    text-align: left;
}
.cf-mvl-treenav-no-in{
	color: #3e90b7;
	cursor: pointer;
	width: 100%;
    display: inline-flex;
    padding: 12px 25px;
    text-align: left;	
}
.cf-mvl-menu a{
	text-decoration: none;
}
.cf-mvl-treenav-in-title{
	background-color: #f2f2f2;
	color: #333;
    padding-bottom: 5px;
    padding-top: 5px;	
}
.cf-mvl-menu{
	padding-left: 0px;
	margin-bottom: 0px;
}	
#cf-primary-treenav .cf-mvl-menu li, #cf-secondary-treenav .cf-mvl-menu li{
    border-bottom: 1px solid #ececec;
}
#cf-mvl-treenav>div>div>li span, #cf-mvl-treenav>div>ul>li span {
    border-color: #1A9AC4;
    border-style: solid;
    border-width: 1px 1px 0 0;
    content: "";
    display: inline-flex;
    height: 12px;
    margin-top: 6px;
    transform: rotate(45deg);
    width: 12px;
    margin-left: auto;
}
#cf-secondary-treenav{
	left:-100%;
}
#cf-secondary-treenav.active{
	left:0%;
}
#cf-primary-treenav.subactive{
	left:-100% !important;
}
.cf-back-treenav{
	width: 100%;
    display: inline-flex;
    padding: 11px 25px;
    text-align: left;
    border-bottom: 1px solid #ececec;    
    cursor: pointer;
}
.cf-back-span{
    border-color: #1A9AC4;
    border-style: solid;
    border-width: 1px 1px 0 0;
    content: "";
    display: inline-flex;
    height: 12px;
    margin-top: 6px;
    transform: rotate(225deg);
    width: 12px;	
}
.cf-back-title{
	margin:auto; 
}
.inactive{
	display: none;
}

.cf-mvl-treenav-in.active{
	background-color: #f2f2f2;
	border-left: 5px solid #049fd9;
    color: #1A9AC4;
}

@media screen and (min-width: 576px){
	.cf-treenav{
	    width: 50%;
	}
	#cf-secondary-treenav.active{
	left:50%;
	}
	#cf-primary-treenav.subactive{
	left:0% !important;
	}	
}

@media screen and (min-width: 960px){
	.cf-treenav{
	    width: 50%;
	}
	#cf-mvl-treenav{
		display: none !important;;
	}	
}
	</style>

<style>
.submenu-container{
	background-color: white;
    position: absolute;
    top: 75px;	
    border: 1px solid #ddd;
    border-top: 2px solid #ddd;
    border-top: 0;    
}
.submenu-container li{
	list-style: none;
	border-bottom: 1px solid #f2f2f2;
}	
.submenu-section{
	padding: 10px;
    min-width: 240px;
    max-width: 300px;
	border-left: 1px solid #ddd;
}
.cf-dsk-treenav-in{
	color: #3e90b7;
	cursor: pointer;
	width: 100%;
    display: inline-flex;
    padding: 12px 25px;
    text-align: left;
}
.cf-dsk-treenav-no-in{
	color: #3e90b7;
	width: 100%;
    display: inline-flex;
    padding: 8px 25px;
    text-align: left;	
}
.cf-dsk-menu a{
	text-decoration: none;
}
.cf-dsk-treenav-in-title{
	background-color: #f2f2f2;
	color: #333;
    padding-bottom: 5px;
    padding-top: 5px;	
}
.cf-dsk-menu{
	padding-left: 0px;
	margin-bottom: 0px;
}
.cf-dsk-menu li{
	padding-left: 0px;
	margin-bottom: 0px;
}	
.cf-dsk-main-menu>ul>li>div.submenu-container {
    display: none;
}
.cf-dsk-main-menu>ul>li:hover>div.submenu-container {
    display: flex;
    border-top: 2px solid #f2f2f2;    
}
.text-submenu{
	padding: 15px;
	font-size: 0.95rem;
	margin-bottom: 0;
}
.text-submenu a{
	color: #3e90b7;
	font-size: 1rem;
}
</style>

</head>


<body>

<!--

-->	
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
<script src={{ asset('js/main.js') }} type="text/javascript"></script>

<script type="text/javascript">
	$(document).ready(function(){
 	$('[data-toggle="popover"]').popover({ html : true });
 	
 });
 
</script>
</body>

</html>
