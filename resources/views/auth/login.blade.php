@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
     
        <div class="col s12 m8 offset-m2 ">
            <div class= "card-panel grey lighten-3 hoverable">
            <div class="row center">
               <span> <strong style="font-size: 25px">Inicio de Sesión</strong> </span> 
               <div class="divider"></div>

             </div>
                  <form  method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="row">
                        <div class="input-field col s6{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" name="email" value="{{ old('email') }}" type="email" class="validate" required autofocus>
                            <label for="email">E-Mail/Usuario</label>

                           
                        </div>


                        <div class="input-field col s6{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="email">Contraseña</label>
                            <input id="password" type="password" name="password" class="validate" required>

                             
                         </div>
                        <div class="row">
                        <div class="input-field col s4">

                          <p>
                            <input type="checkbox" id="recuerdame" name="remember" {{ old('remember') ? 'checked' : '' }}/>
                            <label for="recuerdame">Recordarme</label>
                               
                           </p>
                         </div>
                         </div>


                        
                            <div class="row center">
                                <button type="submit" class="btn waves-effect waves-light  light-blue lighten-1">
                                    Ingresar
                                </button>

                                
                                </div>

                                <div class="row center"> <a  href="{{ route('password.request') }}">
                                    ¿Olvidaste tu contraseña?
                                </a></div>

                                <div class="row center " style="color: red;">


                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <br>
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
