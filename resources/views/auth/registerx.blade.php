@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group validate_ok">

                              <div class="col-md-4"></div>
                            <div class="col-md-6">
                            <label class="">Seguridad de Contraseña: </label>
                            <label class="msg_ok">Buena</label>
                            </div>   
          

                        </div>   

                        <div class="form-group validate_pass">

                              <div for="password" class="col-md-4"></div>

                            <div class="col-md-6 validate_msg pass_lenght">
                            <label class="validate_msg pass_lenght">Longitud: entre 4 y 16 caracteres</label>

                            </div>   
                            <div class="col-md-4 "></div>

                            <div class="col-md-6 validate_msg lower_case">
                            <label class="validate_msg lower_case">Al menos una letra minúscula</label>

                            </div>
                            <div class="col-md-4"></div>

                            <div class="col-md-6 validate_msg upper_case">
                            <label class="validate_msg upper_case">Al menos una letra mayúscula</label>

                            </div>                                  
                            <div class="col-md-4"></div>

                            <div class="col-md-6 validate_msg number_symbol">
                            <label class="validate_msg number_symbol">Al menos un dígito o símbolo: !,@,#,$,%,^,&</label>

                            </div>                                  
                                  

                        </div>                       

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
