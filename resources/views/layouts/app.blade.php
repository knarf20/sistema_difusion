<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title',config('app.name', 'Laravel') ) </title>
      <!--Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Materialize CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
     
      <!-- Styles -->
   <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
   <style type="text/css">
   html {
  min-height: 100%;
  position: relative;
}
body {
  margin: 0;
  margin-bottom: 50px;
}
footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 30px;
  color: white;
  vertical-align: center;
  font-size: 20px;
}
   </style>
</head>
<body>
    <div id="app">
    <ul id="dropdown1" class="dropdown-content">
    
   <li>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Salir</a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 {{ csrf_field() }}
     </form>
    </li>

</ul>
   <nav class="light-blue lighten-1">
      <a href="#!" class="brand-logo center"> {{ config('app.name', 'Laravel') }}</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

                
                    <!-- Left Side Of Navbar -->
                   
                    <!-- Right Side Of Navbar -->
                     <ul class="right hide-on-med-and-down">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Iniciar Sesion" href="{{ route('login') }}"><i class="material-icons">person</i></a></li>
                            <li><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Registrarse" href="{{ route('register') }}"><i class="material-icons">person_add</i></a></li>
                        @else
                            
                            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{ Auth::user()->name }}  {{ Auth::user()->first_name }} <i class="material-icons right">arrow_drop_down</i></a></li>
                        @endif
                    </ul>
                     <ul class="side-nav" id="mobile-demo">
                       <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
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
                        @endif
        
      </ul>
              
            
        </nav>

        @yield('content')

        

    </div>
   <footer class="light-blue lighten-1">
          
          
            <div class="container">

            © 2017 Copyright Text
          <a style="margin-left: 4px;" class="grey-text text-lighten-4 right" href="#!"> <i class="fa fa-facebook-official" aria-hidden="true"></i></a>  
            <a style="margin-left: 4px;" class="grey-text text-lighten-4 right" href="#!"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a style="margin-left: 4px;" class="grey-text text-lighten-4 right" href="#!"> <i class="fa fa-google-plus" aria-hidden="true"></i></a>

            </div>


          
        </footer>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

<script
              src="https://code.jquery.com/jquery-3.2.1.min.js"
              integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
              crossorigin="anonymous"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
     <script type="text/javascript">
    $(document ).ready(function(){
 $(".button-collapse").sideNav();
        });
  </script>
   <!-- FontAwasone Icons -->
      <script src="https://use.fontawesome.com/513c406542.js"></script>
  @yield('Scripts')
</body>
</html>
