@extends('layouts.webapp')

@section('content')


<div class="container container-fix-w720">
<!--
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
-->
    <div class="row" >
        <div class="col-md-6 offset-md-3 col-lg-6 offset-lg-3 main-form-login">
            <div class="panel panel-default">
                <div class="panel-heading"><h5 class="text-uppercase color-personalized">{{ trans('login.register_title') }}</h5></div>
                <div class="panel-body mb-1" >
                    <p class="font-weight-bold mb-0">{{ trans('login.message_register_social_networks') }}</p>
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
                    <p class="font-weight-bold">{{ trans('login.message_register_local_account') }}</p>

                    @if (! $errors->isEmpty())
                    <div class="alert alert-danger text-left fs-08 pb-0" role="alert">
                        {{ trans('validation.fix_errors') }}
                        <ul class="pl-3">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach       
                        </ul>
                    </div>                    
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group">

                            <div class="col-md-12">
                                <input id="username" placeholder="{{ trans('login.enter_email') }}" class="form-control" name="username" value="{{ old('username') }}" autofocus>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="{{ trans('login.type_password') }}" class="form-control" name="password">
                            </div>
                        </div>

<!-- Agregado-->
                        <div class="form-group validate_ok">
                            <div class="col-md-12">
                            <label class="">{{ trans('login.password_security') }} </label>
                            <label class="msg_ok">{{ trans('login.good_password') }}</label>
                            </div>   
                        </div> 

                        <div class="form-group validate_pass">
                            <div class="col-md-12 validate_msg pass_lenght">
                            <label class="validate_msg pass_lenght"><i class="fas fa-times"></i><i class="fas fa-check"></i> Longitud: mínimo 8 caracteres</label>
                            </div>
                            <div class="col-md-12 validate_msg lower_case">
                            <label class="validate_msg lower_case"><i class="fas fa-times"></i><i class="fas fa-check"></i> Al menos una letra minúscula</label>
                            </div>
                            <div class="col-md-12 validate_msg upper_case">
                            <label class="validate_msg upper_case"><i class="fas fa-times"></i><i class="fas fa-check"></i> Al menos una letra mayúscula</label>
                            </div>         
                            <div class="col-md-12 validate_msg number_symbol">
                            <label class="validate_msg number_symbol"> <i class="fas fa-times"></i><i class="fas fa-check"></i> Al menos un dígito o símbolo: !,@,#,$,%,&</label>
                            </div>                                  
                        </div>   


                        <div class="form-group">

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" placeholder="{{ trans('login.retype_password') }}" class="form-control" name="password_confirmation">
                            </div>
                        </div>


<!--    
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
                                    {{ trans('login.register_button') }}
                                </button>
                            </div>
                            <div class="col-md-12 mt-1 mr-auto d-flex">
                                <a class="link-personalized" href="{{ route('password.request') }}">
                                    {{ trans('login.forgot_password') }}
                                </a>
                            
                            </div>

                        </div>

-->
                        @if(config('settings.reCaptchStatus'))
                        <div class="form-group">
                            <div class="col-md-12">
                            <!--<div class="col-md-12">-->
                                <div class="g-recaptcha" data-sitekey="{{ env('RE_CAP_SITE') }}"></div>
                            </div>

                        </div>   
                        @endif
        

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-personalized">
                                    {{ trans('login.register_button') }}
                                </button>
                            </div>

                        </div>                
                    </form>
                </div>
                <div class="col-md-12">
                    <p class="" id="tos_signup">
      Al Registrarte, indicas que has leído y aceptas los <a href="" target="_blank" id="tos">Términos de servicio</a> y la <a href="" target="_blank" id="privacy">Política de privacidad</a>
      </p>
  </div>
                <hr>
                <div class="text-center my-3">
                    <div class="col-md-12 ">
                        {{ trans('login.with_account') }}                        
                    </div>    
                    <div class="col-md-12 mx-auto">
                        <a class="link-personalized text-11-rem" href="{{ route('login') }}">
                            {{ trans('login.signin') }}
                        </a>                           
                    </div>                   
                </div>


            </div>
        </div>
    </div>
</div>

@stop

@section('scripts')

<script type="text/javascript">
    $(document).ready(function(){  
    //variables globales  
    var pass= $("#password");  


    var okDiv = $(".validate_ok"); 

    var validateDiv = $(".validate_pass");  

    var validateMsg = $(".validate_msg");  
    var passLenght = $(".pass_lenght");  
    var lowerCase = $(".lower_case");  
    var upperCase = $(".upper_case");  
    var numberSymbol = $(".number_symbol");  

function validateLenght(){  
    //NO cumple longitud minima  
    if(pass.val().length > 7){  
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
function validateLower(){  
    var expreg = new RegExp("^(?=.*[a-z]).+$");
    if(expreg.test(pass.val())){  
        lowerCase.addClass("msg_ok");  
        return true;  
    }  
    else{  
        lowerCase.removeClass("msg_ok");  
        return false;  
    }  
}   
function validateUpper(){  
    var expreg = new RegExp("^(?=.*[A-Z]).+$");
    if(expreg.test(pass.val())){  
        upperCase.addClass("msg_ok");  
        return true;  
    }  
    else{  
        upperCase.removeClass("msg_ok");  
        return false;  
    }  
}   
function validateNumSym(){  
    var expreg1 = new RegExp("^(?=.*[0-9]).+$");
    var expreg2 = new RegExp("^(?=.*[!@#$%^&]).+$");
    if(expreg1.test(pass.val()) || expreg2.test(pass.val())){  
        numberSymbol.addClass("msg_ok");  
        return true;  
    }  
    else{  
        numberSymbol.removeClass("msg_ok");  
        return false;  
    }  
} 
function validateEmpty(){  
    //NO cumple longitud minima  
    if(pass.val().length ==0){  
        return true;  
    }  
    else{  
        return false
    }  
}

function validate(){  
    validateDiv.addClass("mostrar");
    validateLenght();
    validateLower();
    validateUpper();
    validateNumSym();
    if(validateLenght() && validateLower() && validateUpper() && validateNumSym()){
        validateDiv.removeClass("mostrar");
        validateDiv.addClass("ocultar");
        okDiv.addClass("mostrar")
    }
    else{
        validateDiv.removeClass("ocultar");
        validateDiv.addClass("mostrar");
        okDiv.removeClass("mostrar")        
    }
}  

function validateBlur(){  

    if(validateEmpty()){
        validateDiv.removeClass("mostrar");
        validateDiv.addClass("ocultar");
    }
    else{
 
    }
}  

pass.keyup(validate);  
pass.focus(validate);
pass.focusout(validateBlur);

 });
 
</script>

<script src='https://www.google.com/recaptcha/api.js'></script>

@stop
