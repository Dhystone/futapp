<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/webapp.css') }}" rel="stylesheet">
    <style>
    .validate_msg{
        margin-bottom: 0px;
        font-size: 13px;
        color:#FC642D;
    }
    .validate_ok{
        font-size: 13px;    
    }
    .msg_ok{
        color:#00A699 !important;
    }
    .validate_ok{
        display: none;
    }
    .ocultar{
        display: none !important;
    }
    .mostrar{
        display: block !important;
    }
    </style>


</head>
<body>
    <div id="app">
        <nav class="navbar-top navbar-static-top">
            <div class="container">
                <ul class="nav-top navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="">Contact Us</a></li>
                            <li><a href="">Help</a></li>
                            <li><a href="">Language</a></li>
                        @endguest    
                </ul>            
                
            </div>
        </nav>
            
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                            <li><a href="">How it works?</a></li>
                            <li><a href="">Manages a Court?</a></li>   
                            <li><a href="">Download App</a></li>                       
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->email }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">
    $(document).ready(function(){  
    //variables globales  
    var pass= $("#password");  
    var validateDiv = $(".validate_pass");  
    var okDiv = $(".validate_ok"); 
    var validateMsg = $(".validate_msg");  
    var passLenght = $(".pass_lenght");  
    var lowerCase = $(".lower_case");  
    var upperCase = $(".upper_case");  
    var numberSymbol = $(".number_symbol");  

function validateLenght(){  
    //NO cumple longitud minima  
    if(pass.val().length > 4){  
        passLenght.addClass("msg_ok");  
        return true;  
    }  
/*    //SI longitud pero NO solo caracteres A-z  
    else if(!inputUsername.val().match(/^[a-zA-Z]+$/)){  
        reqUsername.addClass("error");  
        inputUsername.addClass("error");  
        return false;  
    }*/  
    // SI longitud, SI caracteres A-z  
    else{  
        passLenght.removeClass("msg_ok");  
        return false;  
    }  
}  
function validate(){  
    //NO cumple longitud minima  
    if(validateLenght()){
        validateDiv.addClass("ocultar");
        okDiv.addClass("mostrar")
    }
    else{
        validateDiv.removeClass("ocultar");
        okDiv.removeClass("mostrar")        
    }
}  

pass.keyup(validate);  

 });
 
</script>
</body>
</html>
