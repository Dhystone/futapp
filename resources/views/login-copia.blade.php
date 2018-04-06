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

    <!-- Styles -->
    <!-- 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    -->
        <!-- Bootstrap core CSS -->
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <style>
    .main-form-login{
        margin-top: 0px;
    }
    .panel-heading {
    text-align: center;    
    padding: 3px 10px;
    border-bottom: 1px solid #d3e0e9;
    border-top-right-radius: 2px;
    border-top-left-radius: 2px;  
    margin-bottom: 15px;

    }  
    .panel-body{
    text-align: center;    
    border-top-right-radius: 2px;
    border-top-left-radius: 2px;  
    margin-bottom: 10px;

    }  
    
.cf-main-logo-name {
    font-size: 1.6rem;
    margin-bottom: -4px;
    color: #3e90b7;    
}

.cf-main-logo-slogan {
    font-size: 0.8rem;
    color: #333;
}    
.cf-main-navbar-brand{
display: none !important;
}    
div.horizontalText::before, div.horizontalText::after {
    width: 50%;
    top: 51%;
    overflow: hidden;
    height: 1px;
    background-color: #d0d0d0;
    content: '\a0';
    position: absolute;
}    
div.horizontalText::before{
margin-left: -52%;
    text-align: right;

}
div.horizontalText::after{
    margin-left: 2%;  

}
.horizontalText{
    width: 100%;
    text-align: center;
    background-color: #ffffff;
    position: relative;
    color: #ababab;
    font-size: 14px;
    font-family: gotham, helvetica, arial, sans-serif;
    font-style: normal;
    font-weight: 400;
    z-index: 1;
    overflow: hidden;
}
.color-personalized{
    color: #3e90b7;
}
.btn-personalized{
    width: 100%;
    color: #fff;
    background-color: #3e90b7;
    border-color: #3e90b7;    
    cursor: pointer;
}
.link-personalized{
    color: #3e90b7;
    text-decoration: none;
    margin-top: 5px;    
}
.link-personalized:hover{
    color: #333;
    text-decoration: none;
    margin-top: 5px;    
}
.text-center{
    text-align: center;
}
.arrow-down{
    border-color: #1A9AC4;
    border-style: solid;
    border-width: 2px 2px 0 0;
    content: "";
    display: inline-flex;
    height: 12px;
    margin-right: 6px;
    transform: rotate(135deg);
    width: 12px;
}
.arrow-up{
    border-color: #1A9AC4;
    border-style: solid;
    border-width: 2px 2px 0 0;
    content: "";
    display: inline-flex;
    height: 12px;
    margin-right: 6px;
    transform: rotate(-45deg);
    width: 12px;
}
.cf-btn-google{
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-image: none;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;    
}
.cf-btn-facebook{
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #fff;
    background-color: #4267b2;
    background-image: none;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;    
}
.cf-btn-twitter{
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #fff;
    background-color: #1da1f2;
    background-image: none;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;    
}
.cf-link-none:hover{
    text-decoration: none;
}
    .inactive{
        display: none;
    }
    .cf-display-panel-social-login{
        cursor: pointer;
    }
        .text-11-rem{
        font-size: 1.1rem
    }
@media screen and (min-width: 576px){
.cf-main-logo-name {
    font-size: 1.4rem;
    margin-bottom: -5px;
}
.cf-main-logo-name {
    font-size: 2rem;
    margin-bottom: -3px;
    color: #3e90b7;
}  
.cf-main-logo-slogan {
    font-size: 1rem;
    color: #333;
}
.cf-main-navbar-brand{
display: inline-flex !important;
}
.cf-main-navbar-brand-mvl{
display: none;
}
    .main-form-login{
        margin-top: 20px;
        border: 1px solid #d3e0e9; 
        border-radius:5px 

    }
    .panel-heading {
    text-align: center;    
    padding: 6px 15px;
    border-bottom: 1px solid #d3e0e9;
    border-top-right-radius: 3px;
    border-top-left-radius: 3px;  
    margin-bottom: 20px;
    } 



</style>
</head>
<body>


<div class="container">

        <div class="row py-2">
            <div class="col-md-8 offset-md-2 d-flex">
                <div class="d-inline-flex m-auto">
                              <a href="#" class="cf-main-navbar-brand">
                                <img src="{{ asset('cf-logo.svg') }}" width="135" height="108" class="d-inline-block align-top" alt="">
                              </a>    
                              <a href="#" class="cf-main-navbar-brand-mvl">
                                <img src="{{ asset('cf-logo.svg') }}" width="108" height="86.4" class="d-inline-block align-top" alt="">
                              </a>                                        
                              <div class="cf-main-text-logo my-auto">
                              <div class="cf-main-logo-name">
                                {{ trans('general.app_name') }}
                              </div>
                              <div class="cf-main-logo-slogan">
                                {{ trans('general.slogan_find') }} | {{ trans('general.slogan_join') }} | {{ trans('general.slogan_play') }}
                              </div>                        
                              </div>                                 
                </div>            
            </div>
        </div>   

    <div class="row" >
        <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-4 main-form-login">
            <div class="panel panel-default">
                <div class="panel-heading"><h4 class="text-uppercase color-personalized">{{ trans('login.login_title') }}</h4></div>
                <div class="panel-body mb-1" >
                    <p class="font-weight-bold mb-0">{{ trans('login.message_login_social_networks') }}</p>
                </div>
                <div class="panel-body d-flex mb-1">
                    <span class="m-auto cf-display-panel-social-login"> 
                        <img src="{{ asset('images/social-logos/24x24/facebook.png') }}"> 
                        <img src="{{ asset('images/social-logos/24x24/twitter.png') }}"> 
                        <img src="{{ asset('images/social-logos/24x24/google.png') }}">
                    </span>
                    <span id="arrow-social" class="arrow-down cf-display-panel-social-login"></span>

                </div>   
                <div id="cf-panel-social-login" class="panel-body inactive my-2 col-10 offset-1"  > 

                <a href="{{ route('social.redirect', ['provider' => 'facebook']) }}" class="cf-link-none">
                    <div class="cf-btn-facebook d-flex mb-2">
                        <img src="{{ asset('images/social-logos/24x24/facebook_white.png') }}" alt="">
                        <span class="m-auto">{{ trans('login.login_fb') }}</span>
                    </div>
                </a>
                <a href="{{ route('social.redirect', ['provider' => 'twitter']) }}" class="cf-link-none">
                    <div class="cf-btn-twitter d-flex mb-2">
                        <img src="{{ asset('images/social-logos/24x24/twitter_white.png') }}" alt="">
                        <span class="m-auto">{{ trans('login.login_tw') }}</span>
                    </div>
                </a>                
                <a href="{{ route('social.redirect', ['provider' => 'google']) }}" class="cf-link-none">
                    <div class="cf-btn-google d-flex mb-2">
                        <img src="{{ asset('images/social-logos/24x24/google.png') }}" alt="">
                        <span class="m-auto">{{ trans('login.login_go') }}</span>
                    </div>
                </a>  

                </div>
                <div class="horizontalText my-2">o</div>

                <div class="panel-body">
                    <p class="font-weight-bold">{{ trans('login.message_login_local_account') }}</p>

                    @if (! $errors->isEmpty())
                    <div class="alert alert-danger text-left fs-08 mb-0" role="alert">
                        {{ trans('validation.fix_errors') }}
                        <ul class="p-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach       
                        </ul>
                    </div>                    
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group">

                            <div class="col-md-12">
                                <input id="email" placeholder="{{ trans('login.enter_email') }}" class="form-control" name="email" value="{{ old('email') }}" autofocus>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="{{ trans('login.type_password') }}" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <div class="col-md-12 mr-auto d-flex">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ trans('login.rememberme') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-personalized">
                                    {{ trans('login.login_button') }}
                                </button>
                            </div>
                            <div class="col-md-12 mt-1 mr-auto d-flex">
                                <a class="link-personalized" href="{{ route('password.request') }}">
                                    {{ trans('login.forgot_password') }}
                                </a>
                            
                            </div>

                        </div>
                    </form>
                </div>
                <hr>
                <div class="text-center my-3">
                    <div class="col-md-12 ">
                        {{ trans('login.without_account') }}                            
                    </div>
                    <div class="col-md-12 mx-auto">
                        <a class="link-personalized text-11-rem" href="{{ route('register') }}">
                            {{ trans('login.signup') }}
                        </a>                           
                    </div>                   
                </div>


            </div>
        </div>
    </div>
</div>
<script src={{ asset('plugins/bootstrap/js/jquery-3.2.1.js') }}></script>
<script src={{ asset('plugins/bootstrap/js/popper.js') }}></script>
<script src={{ asset('plugins/bootstrap/js/bootstrap.js') }}></script>
<script src={{ asset('js/main.js') }} type="text/javascript"></script>
</body>

</html>
