@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col s12 m12 ">
            <div class= "card-panel grey lighten-3">
              <div class="row center">
               <span> <strong style="font-size: 25px">Menu - Administrador</strong> </span> 
               <div class="divider"></div>

             </div>
                <div class="card-panel">
                
                <div class="row">
 <div class="right-align">
   
 <a id="prueba" class="btn-floating btn waves-effect waves-light teal lighten-1 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Crear nuevo producto"><i class="material-icons">add</i></a>
 <a id="prueba" class="btn-floating btn waves-effect waves-light teal lighten-1 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Agregar a lista de difusion un nuevo producto"><i class="material-icons">record_voice_over</i></a>

  <div class="left">
   <span style="font-size: 20px"> <strong> Lista de Productos en difusion</strong> </span>
 </div> 
 </div> 


                </div>

  
  <div class="divider"></div>
        <div class="row">
          
          <div class="col s12 m4">
            
             <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="http://www.trocar.com.co/m21_gallery/6056.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Producto 1<i class="material-icons right">more_vert</i></span>
      <p> <a href="#modal2" class="btn-floating btn waves-effect waves-light teal lighten-1 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar producto"><i class="material-icons">create</i></a>
     <a href="#modal1" class="btn-floating btn waves-effect waves-light teal lighten-1 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Eliminar producto de lista de difusion"><i class="material-icons">delete</i></a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Producto 1<i class="material-icons right">close</i></span>
      <p>Este es la descripción</p>
      <p> Numero de difusiones : 10</p>
      <p> Costo por difusion: 0.10$</p>

    </div>
  </div>

          </div>
  <div class="col s12 m4">
            
             <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="http://www.trocar.com.co/m21_gallery/6056.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Producto 2<i class="material-icons right">more_vert</i></span>
      <p> <a href="#modal2" class="btn-floating btn waves-effect waves-light teal lighten-1 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar producto"><i class="material-icons">create</i></a>
     <a href="#modal1" class="btn-floating btn waves-effect waves-light teal lighten-1 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Eliminar producto de lista de difusion"><i class="material-icons">delete</i></a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Producto 2<i class="material-icons right">close</i></span>
      <p>Este es la descripción</p>
      <p> Numero de difusiones : 50</p>
      <p> Costo por difusion: 0.50$</p>

    </div>
  </div>

          </div>

           <div class="col s12 m4">
            
             <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="http://www.trocar.com.co/m21_gallery/6056.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Producto 3<i class="material-icons right">more_vert</i></span>
      <p> <a href="#modal2" class="btn-floating btn waves-effect waves-light teal lighten-1 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar producto"><i class="material-icons">create</i></a>
     <a   href="#modal1" class="btn-floating btn waves-effect waves-light teal lighten-1 tooltipped" href="#modal1" data-position="bottom" data-delay="50" data-tooltip="Eliminar producto de lista de difusion"><i class="material-icons">delete</i></a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Producto 3<i class="material-icons right">close</i></span>
      <p>Este es la descripción</p>
      <p> Numero de difusiones : 10</p>
      <p> Costo por difusion: 0.10$</p>

    </div>
  </div>

          </div>

        </div>
    
        </div>
        <div class="row center">
           <ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>
        </div>
 
                
            </div>
        </div>
    </div>


  <!-- Modal eliminar de la lista de difusion -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Mensaje</h4>
      <p>¿Esta seguro que desea eliminar este producto de la lista de difusion?</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Aceptar</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>

    </div>
  </div>
</div>
  <!-- Modal editar producto -->
  <div id="modal2" class="modal">
    <div class="modal-content">
    <div class="row center">

      <h4>Editando Producto</h4>
      </div>
      <p>
        
         <form method="POST" action="{{ route('register') }}">
                        
                        <div class="row">
                        <div class="input-field col s6{{ $errors->has('name') ? ' has-error' : '' }}">

                            <input id="name" type="text" class="validate" name="name" value="{{ old('name') }}" required autofocus>
                            <label for="name"  >Nombre del Producto</label>


                               
                            
                        </div>

                        <div class="input-field col s6{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <input id="first_name" type="text" class="validate" name="first_name" value="{{ old('first_name') }}" required autofocus>
                            <label for="first_name"  >Descripcion del producto</label>

                            

                                
                            
                        </div>


                        <div class="input-field col s4{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="text" class="validate" name="email" value="{{ old('email') }}" required>

                            <label for="email"  >Valor por difusion</label>

                           

                                
                            
                        </div>

                         <div class="file-field input-field col s8">
                         |<div class="btn">
                           <span>File</span>
                            <input type="file">
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                         </div>
                         </div>

                         <div class="row center">
               <span> <strong style="font-size: 25px">Caneles de difusion</strong> </span> 
               <div class="divider"></div>

             </div>
                         <div class="row">
                         <div class="col s4">
                            <span>Facebook</span>
                           
                            <div class="switch">
                               <label>
                                 Off
                                 <input type="checkbox">
                                 <span class="lever"></span>
                                 On
                                </label>
                             </div>
                            <span>Twitter</span>

                             <div class="switch">
                               <label>
                                 Off
                                 <input type="checkbox">
                                 <span class="lever"></span>
                                 On
                                </label>
                             </div>
                             </div>

                             <div class="col s4">
                            <span>Google+</span>
                           
                            <div class="switch">
                               <label>
                                 Off
                                 <input type="checkbox">
                                 <span class="lever"></span>
                                 On
                                </label>
                             </div>
                            <span>Email</span>

                             <div class="switch">
                               <label>
                                 Off
                                 <input type="checkbox">
                                 <span class="lever"></span>
                                 On
                                </label>
                             </div>
                             </div>
                             

                         </div>
                      
                             
                        
                            <div class="row center">
                         <div class="divider"></div>

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

      </p>
    </div>
    <div class="modal-footer">
      
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>

    </div>
  </div>
</div>


@endsection

@section('Scripts')
 <script type="text/javascript">
    $(document ).ready(function(){
    $('.modal').modal({
      dismissible: false
      });
        });
  </script>

@endsection
