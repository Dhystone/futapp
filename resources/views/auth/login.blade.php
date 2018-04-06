@extends('layouts.webapp')

@section('content')


<div class="container container-fix-w720">

    <div class="row" >
        <div class="col-md-6 offset-md-3 col-lg-6 offset-lg-3 main-form-login">
            <div class="panel panel-default">
                <div class="panel-heading"><h5 class="text-uppercase color-personalized">{{ trans('login.login_title') }}</h5></div>
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

                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
<!--
                        <div class="form-group">

                            <div class="col-md-12">
                                <input id="email" placeholder="{{ trans('login.enter_email') }}" class="form-control" name="email" value="{{ old('email') }}" autofocus>
                            </div>
                            @if ($errors->has('email'))
                                <div class="col-md-12 validate_msg">
                                @foreach ($errors->get('email') as $error) 
                                    <div class="col-md-12 validate_msg">
                                    <label class="validate_msg">{{ $error }}</label>
                                    </div>                                   
                                @endforeach
                                </div>
                            @endif                            
                        </div>
-->

                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="username" placeholder="{{ trans('login.enter_email') }}" class="form-control" name="username" value="{{ old('username') }}" autofocus>
                            </div>
                            @if ($errors->has('username'))
                                <div class="col-md-12 validate_msg">
                                @foreach ($errors->get('username') as $error) 
                                    <div class="col-md-12 validate_msg">
                                    <label class="validate_msg">{{ $error }}</label>
                                    </div>                                   
                                @endforeach
                                </div>
                            @elseif ($errors->has('password'))
                            @else ($errors->has())
                                <div class="col-md-12 validate_msg">
                                @foreach ($errors->all() as $error) 
                                    <div class="col-md-12 validate_msg">
                                    <label class="validate_msg">{{ $error }}</label>
                                    </div>                                   
                                @endforeach
                                </div>                            
                            @endif       

                        </div>

                        <div class="form-group">

                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="{{ trans('login.type_password') }}" class="form-control" name="password">
                            </div>
                            @if ($errors->has('password'))
                                <div class="col-md-12 validate_msg">
                                @foreach ($errors->get('password') as $error) 
                                    <div class="col-md-12 validate_msg">
                                    <label class="validate_msg">{{ $error }}</label>
                                    </div>                                   
                                @endforeach
                                </div>
                            @endif                               
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
@stop