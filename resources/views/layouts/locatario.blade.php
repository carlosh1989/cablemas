<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Cantarell:400,700i" rel="stylesheet">
    <link rel="stylesheet" href="{{url('bower/materialize/dist/css/materialize.min.css')}}">
    <link rel="stylesheet" href="{{url('/bower/sweetalert/dist/sweetalert.css')}}">
    <link rel="stylesheet" href="{{url('bower/components-font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('/bower/lightbox2/dist/css/lightbox.min.css')}}">
   <!-- <link rel="stylesheet" href="{{url('bower/animate.css/animate.min.css')}}"> -->
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <script src="{{url('bower/pusher.min/index.js')}}"></script>
    <script>
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;
    var pusher = new Pusher('5a6a7f37ae077a81c1d4', {
    encrypted: true
    });
    var channel = pusher.subscribe('test_channel');
    channel.bind('my_event', function(data) {
    Materialize.toast(data.message, 4000);
    });
    </script> -->
    <!-- Scripts -->
    <script>
    window.Laravel = <?php echo json_encode([
    'csrfToken' => csrf_token(),
    ]); ?>
    </script>
    <style>

    body{
      overflow-x: hidden;
    }
    .autocomplete
    {
    z-index: 888;
    }
    #particles {
    width: 100%;
    height: 100%;
    overflow: hidden;
    position: absolute;
    }
    .login {
    position: absolute;
    left: 0;
    top: 10%;
    padding: 0 20px;
    width: 100%;
    text-align: left;
    }
    .nav-white a
    {
    color: #444;
    }
    .lista
    {
    color:#444;
    }
    .dropdown-content {
    min-width: 0;
    min-height: 0;
    overflow: visible !important;
    }
    .secondDropDown {
    /*adjust by your needs*/
    margin-left: 124px !important;
    margin-top: -50px !important;
    }
    #lista2 {
    counter-reset: li;
    list-style: none;
    *list-style: decimal;
    padding: 0;
    margin-bottom: 4em;
    text-shadow: 0 1px 0 rgba(255,255,255,.5);
    }
    #lista2 ol {
    margin: 0 0 0 2em;
    }
    #lista2 li{
    position: relative;
    display: block;
    padding: .4em .4em .4em 2em;
    *padding: .4em;
    margin: .5em 0;
    color: #777;
    text-decoration: none;
    border-radius: .3em;
    transition: all .3s ease-out;
    }
    #lista2 li:hover{
    background: #eee;
    }
    #lista2 li:before{
    content: counter(li);
    counter-increment: li;
    color: #fff;
    position: absolute;
    left: -1.3em;
    top: 50%;
    margin-top: -1.3em;
    background: #777;
    height: 2em;
    width: 2em;
    line-height: 2em;
    border: .3em solid #fff;
    text-align: center;
    font-weight: bold;
    border-radius: 2em;
    transition: all .3s ease-out;
    }

    </style>
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
  </head>
<body>
<script type="text/javascript" src="{{asset('/bower/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('/bower/sweetalert/dist/sweetalert.min.js')}}"></script>
<script src="{{asset('/bower/materialize/dist/js/materialize.min.js')}}"></script>
<script src="{{asset('/bower/lightbox2/dist/js/lightbox.min.js')}}"></script>

    <div id="app">
       
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a class="teal-text" href="{{ url('/logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i> Salir</a></li>
</ul>

 <div class="navbar-fixed">
      <nav class="white nav-white">
        <div class="nav-wrapper">
          <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
          <a href="{{ url('/') }}" class="brand-logo green-text lighten-2" style="font-family: 'Anton', sans-serif;letter-spacing: 0.2em"><img width="50" src="http://www.iconeasy.com/icon/ico/Sport/Dragon%20Ball%20Z/Dragon%20Radar.ico">RECARLINE</a>
    <ul class="right hide-on-med-and-down">

    
            <li><a class="dropdown-button" href="#!" data-activates="serviciosSubmenu1"><i class="fa fa-building-o"></i>  LOCATARIO<i class="material-icons right">arrow_drop_down</i></a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-button" href="#!" data-activates="serviciosClientesSubmenu1"><i class="fa fa-address-card"></i> PROMOTOR<i class="material-icons right">arrow_drop_down</i></a></li>

            <li><a class="dropdown-button" href="#!" data-activates="serviciosClientesSubmenu1"><i class="fa fa-address-card"></i> TALLERES<i class="material-icons right">arrow_drop_down</i></a></li>



         @if (Auth::guest())
            <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
         @else
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button green-text truncate" href="#" data-activates="menuLog"><i class="fa fa-user fa-2x green-text"></i> {{ Auth::user()->email }}</a></li>
         @endif
    
    </ul>
        </div>
      </nav>
  </div>
        

      <!-- Dropdown Structure -->
      <ul id="dropdown1" class="dropdown-content lista">
        <li><a style="color:#444;" href="#!"><i class="fa fa-user-plus fa-1x"></i> REGISTRA TU PAGO</a></li>
        <li><a style="color:#444;" href="#!">SOLICITUD DE SERVICIO RESIDENCIAL</a></li>
        <li><a class='dropdown-button2 d' href='#' data-activates='dropdown2' data-hover="hover" data-alignment="left">PREGUNTAS FRECUENTES</a></li>
      </ul>
      <ul id="serviciosSubmenu1ASDSA" class="dropdown-content lista">
        <li><a href="#!"><i class="fa fa-user-plus fa-1x"></i> INTERNET RESIDENCIAL</a></li>
        <li class="divider"></li>
        <li><a href="#!"> INTERNET COMERCIAL</a></li>
        <li><a style="color:#444;" href="#!"> INTERNET COMERCIAL</a></li>
        <li class="divider"></li>
        <li><a href="#!"> INTERNET DEDICADO</a></li>
      </ul>
      <ul id="serviciosClientesSubmenu2" class="dropdown-content lista">
        <li><a style="color:#444;" href="{{ url('/registroPago') }}"><i class="fa fa-user-plus fa-1x"></i> REGISTRA TU PAGO</a></li>
        <li><a style="color:#444;" href="{{ url('/solicitudServicio') }}">SOLICITUD DE SERVICIO RESIDENCIAL</a></li>
        <li><a style="color:#444;" href="{{ url('/preguntasFrecuentes') }}">PREGUNTAS FRECUENTES</a></li>
      </ul>
      <!-- Dropdown Structure -->
      <ul id='serviciosSubmenu1' class='dropdown-content'>
        <li><a style="color:#444;" href="{{ url('/residencial') }}">INGRESAR</a></li>
        <li><a style="color:#444;" href="#!" class="dropdown-button" href="#!" data-activates="internetComercial">SMS</a></li>
        <li><a style="color:#444;" href="{{ url('/dedicado') }}">RESET PASSWORD</a></li>
      </ul>
      <ul id='internetComercial' class='dropdown-content secondDropDown'>
        <li><a class="truncate green-text" href="{{ url('/empresarial') }}">MASIVO</a></li>
        <li><a class="truncate green-text" href="{{ url('/telefoniaip') }}">PARTICULAR</a></li>
      </ul>

      <ul id="menuLog" class="dropdown-content lista">
        <li><a style="color:#444;" href="#!"><i class="fa fa-cog" aria-hidden="true"></i> Configuración</a></li>
        <li><a  class='dropdown-button2 green-text d' href="{{ url('/logout') }}" data-activates='dropdown2' data-hover="hover" data-alignment="left"> <i class="fa fa-external-link-square" aria-hidden="true"></i> SALIR</a></li>
      </ul>


    <ul id="slide-out" class="side-nav">
      <li><a href="{{url('/admin')}}">Inicio <i class="fa fa-home fa-2x" aria-hidden="true"></i></a></li>
      <li><a href="{{url('/admin/archivos/ingresar')}}">Ingresar archivo<i class="fa fa-plus-square fa-2x" aria-hidden="true"></i></a></li>
      <li><a href="{{url('/admin/archivos/')}}">Archivos
      <i class="fa fa-folder-open fa-2x" aria-hidden="true"></i></a></li>
      <li><a href="{{url('/admin/publicaciones')}}">Publicaciones
      <i class="fa fa-file-text fa-2x" aria-hidden="true"></i></i></a></li>
      <li><a href="{{url('/admin/cuentas/ingresar')}}">Cuenta Ingresar
      <i class="fa fa-user-plus fa-2x" aria-hidden="true"></i>
</a></li>
      <li><a href="{{url('/admin/chat')}}">Chat
      <i aria-hidden="true" class="fa fa-commenting fa-2x"></i>
</a></li>
 <li><a class="teal-text" href="{{ url('/logout') }}"><i class="fa fa-sign-out fa-2x" aria-hidden="true"></i> Salir</a></li>
    </ul>
  

  <nav style="display:none;background:#fff;color:#444;" id="busqueda">
    <div class="nav-wrapper">
      <form autocomplete="off" action="{{url('/admin/busquedaProcesar')}}" method="POST">
       {{ csrf_field() }}
        <div class="input-field">
          <input name="search" id="search" type="search" placeholder="Que busca?" class="autocomplete" required>
          <label for="search"><i class="material-icons">search</i></label>
          <i id="closeSearch" class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>
<meta name="csrf-token" content="{{ csrf_token() }}">

        @yield('content')
 @include('sweet::alert')
 <script>
        
  // Initialize collapse button
  $(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  //$('.collapsible').collapsible();
  $(".dropdown-button").dropdown();
      </script>
      <script>
        (function($){
  $(function(){
    // Plugin initialization
    $('.slider').slider({full_width: true});
    $('.parallax').parallax();
    $('.datepicker').pickadate({selectYears: 20});
    $('select').material_select();
    $('.chips-placeholder').material_chip({
      placeholder: 'Enter a tag',
      secondaryPlaceholder: '+Tag',
    });
    $('.chips').material_chip();
  $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left' // Displays dropdown with edge aligned to the left of button
    }
  );
      
  }); // end of document ready
})(jQuery); // end of jQuery name space
      </script>

<!-- BOTON DE BUSQUEDA -->
<script>
$(document).ready(function(){
    $("#mostrarBusqueda").click(function(){
        $("#busqueda").toggle();
    });
});
</script>

    </div>
    <!-- REFRESCAR PAGINA BACK -->
<script type="text/javascript" language="javascript">
onload=function(){
var e=document.getElementById("refreshed");
if(e.value=="no")e.value="yes";
else{e.value="no";location.reload();}
}
</script>
<input type="hidden" id="refreshed" value="no">
</body>
</html>
