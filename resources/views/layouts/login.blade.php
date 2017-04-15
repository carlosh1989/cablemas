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
    <link rel="stylesheet" href="{{url('bower/animate.css/animate.min.css')}}">
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
    <script type='text/javascript' src="http://localhost/cablemas/public/bower/particleground/jquery.particleground.js"></script>
    <script type='text/javascript' src='http://localhost/cablemas/public/bower/particleground/demo/js/demo.js'></script>
    <div id="app">
      
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
        <li><a style="color:#444;" href="{{ url('/residencial') }}">INTERNET RESIDENCIAL</a></li>
        <li><a style="color:#444;" href="#!" class="dropdown-button" href="#!" data-activates="internetComercial">INTERNET COMERCIAL</a></li>
        <li><a style="color:#444;" href="{{ url('/dedicado') }}">INTERNET DEDICADO</a></li>
      </ul>
      <ul id='internetComercial' class='dropdown-content secondDropDown'>
        <li><a class="truncate" href="{{ url('/empresarial') }}">EMPRESARIAL</a></li>
        <li><a class="truncate" href="{{ url('/telefoniaip') }}">TELEFONIA IP</a></li>
      </ul>
      <!-- Dropdown Structure -->
      <ul id='serviciosClientesSubmenu1' class='dropdown-content'>
        <li><a style="color:#444;" href="{{ url('/registroPago') }}"> REGISTRA TU PAGO</a></li>
        <li><a style="color:#444;" href="{{ url('/solicitudServicio') }}">SOLICITUD DE SERVICIO RESIDENCIAL</a></li>
        <li><a style="color:#444;" href="{{ url('/preguntasFrecuentes') }}">PREGUNTAS FRECUENTES</a></li>
      </ul>
      <nav class="white nav-white">
        <div class="nav-wrapper">
          <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
          <a href="{{ url('/') }}" class="brand-logo green-text lighten-2" style="font-family: 'Anton', sans-serif;letter-spacing: 0.2em"><img width="50" src="http://www.iconeasy.com/icon/ico/Sport/Dragon%20Ball%20Z/Dragon%20Radar.ico">RECARLINE</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="{{ url('/somos') }}"><i class="fa fa-address-card-o"></i> QUIENES SOMOS?</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="serviciosSubmenu1"><i class="fa fa-handshake-o"></i> SERVICIOS<i class="material-icons right">arrow_drop_down</i></a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-button" href="#!" data-activates="serviciosClientesSubmenu1"><i class="fa fa-handshake-o"></i> SERVICIO AL CLIENTE<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href=""><i class="fa fa-address-book"></i> CONTACTO</a></li>
            <li><a href="{{ url('/login') }}"><i class="fa fa-sign-in"></i> LOGIN</a></li>
          </ul>
        </div>
      </nav>
<style type="text/css">
::-webkit-input-placeholder { /* WebKit browsers */
    color:    #fff;
}
:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
    color:    #fff;
}
::-moz-placeholder { /* Mozilla Firefox 19+ */
    color:    #fff;
}
:-ms-input-placeholder { /* Internet Explorer 10+ */
    color:    #fff;
}
</style>


      <ul id='dropdown4' class='dropdown-content'>
        <li><a href="#!">two</a></li>
        <li class="divider"></li>
        <li><a href="#!">three</a></li>
        <li><a class='dropdown-button2 d' href='#' data-activates='dropdown5' data-hover="hover" data-alignment="left">Drop Me!</a></li>
      </ul>
      <!-- Dropdown Structure -->
      <ul id="dropdown5" class="dropdown-content lista">
        <li><a style="color:#444;" href="#!"><i class="fa fa-user-plus fa-1x"></i> REGISTRA TU PAGO</a></li>
        <li><a style="color:#444;" href="#!">SOLICITUD DE SERVICIO RESIDENCIAL</a></li>
        <li><a class='dropdown-button2 d' href='#' data-activates='dropdown2' data-hover="hover" data-alignment="left">PREGUNTAS FRECUENTES</a></li>
      </ul>
      <ul id="slide-out" class="side-nav hide-on-med-and-up">
        <li><a href="sass.html"><i class="fa fa-address-card-o fa-2x"></i> QUIENES SOMOS?</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown5"><i class="fa fa-handshake-o fa-2x"></i> SERVICIOS<i class="material-icons right">arrow_drop_down</i></a></li>
        <!-- Dropdown Trigger -->
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="fa fa-handshake-o fa-2x"></i> SERVICIO AL CLIENTE<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="badges.html"><i class="fa fa-address-book fa-2x"></i> CONTACTO</a></li>
        <li><a href="{{ url('/login') }}"><i class="fa fa-sign-in fa-2x"></i> LOGIN</a></li>
      </ul>
      
      <script>
      $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: true, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'left' // Displays dropdown with edge aligned to the left of button
      }
      );
      </script>
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
      
      }); // end of document ready
      })(jQuery); // end of jQuery name space
      </script>
      <!-- BOTON DE BUSQUEDA -->
      <script>
      $(document).ready(function(){
      $("#mostrarBusqueda").click(function(){
      $("#busqueda").toggle();
      });
      particleground(document.getElementById('particles'), {
      dotColor: '#fff',
      lineColor: '#fff'
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