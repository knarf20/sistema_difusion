@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m8 offset-m2">
            <div class="card-panel grey lighten-3 hoverable">
            <div class="row center">
               <span> <strong style="font-size: 25px">Registro de Usuario</strong> </span> 
               <div class="divider"></div>

             </div>
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="row">
                        <div class="input-field col s6{{ $errors->has('name') ? ' has-error' : '' }}">

                            <input id="name" type="text" class="validate" name="name" value="{{ old('name') }}" required autofocus>
                            <label for="name"  >Nombre</label>


                               
                            
                        </div>

                        <div class="input-field col s6{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <input id="first_name" type="text" class="validate" name="first_name" value="{{ old('first_name') }}" required autofocus>
                            <label for="first_name"  >Apellido</label>

                            

                                
                            
                        </div>


                        <div class="input-field col s6{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required>

                            <label for="email"  >E-Mail</label>

                           

                                
                            
                        </div>

                        <div class="input-field col s6{{ $errors->has('user_name') ? ' has-error' : '' }}">
                    
                            <input id="user_name" type="text" class="validate" name="user_name" value="{{ old('user_name') }}" required>

                            <label for="user_name"  >Usuario</label>

                            

                                
                            
                        </div>

                        <div class="input-field col s6{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password" class="validate" name="password" required>

                            <label for="password"  >Contraseña</label>

                    

                                
                            
                        </div>

                        <div class="input-field col s6">
                            <input id="password-confirm" type="password" class="validate" name="password_confirmation" required>

                            <label for="password-confirm"  >Confirme Contraseña</label>

                        
                            
                        </div>

                        
                            <div class="row center">
                                <button type="submit" class="btn waves-effect waves-light  light-blue lighten-1">
                                    Registrar
                                </button>
                            </div>
                            <div class="row center" style="color: red;">
                             @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                <br>

                                @endif
                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                <br>

                                @endif


                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                <br>

                                @endif

                            @if ($errors->has('user_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_name') }}</strong>
                                    </span>
                                <br>

                                @endif

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </form>
             </div>
        </div>
    </div>
</div>
@endsection
