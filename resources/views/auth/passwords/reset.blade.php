@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m8 offset-m2">
             <div class= "card-panel grey lighten-3">
                 <span> <strong style="font-size: 25px">Recuperar Contraseña</strong> </span> 

                
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form  method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="input-field col s6{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" >E-Mail </label>

                            
                                <input id="email" type="email" class="validate" name="email" value="{{ $email or old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="input-field col s6{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Contraseña</label>

                            
                                <input id="password" type="password" class="validate" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    
                        </div>

                        <div class="input-field col s6{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm">Confirm Password</label>
                            
                                <input id="password-confirm" type="password" class="validate" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="row center">
                            
                                <button type="submit" class="btn waves-effect waves-light  light-blue lighten-1">
                                    Reiniciar contraseña
                                </button>
                            
                        </div>
                    </form>
                
            </div>
        </div>
    </div>
</div>
@endsection
