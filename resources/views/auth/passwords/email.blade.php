@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m8 offset-m2">
             <div class="card-panel">
                 <span> <strong style="font-size: 25px">Recuperar Contraseña</strong> </span> 

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form  method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                        <div class="row">
                        <div class="input-field col s6{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" >E-Mail Address</label>

                            
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="row center">
                            
                                <button type="submit" class="btn waves-effect waves-light  light-blue lighten-1">
                                    Enviar 
                                </button>
                            
                        </div>
                        </div>

                    </form>
                </div>
            
        </div>
    </div>
</div>
@endsection
