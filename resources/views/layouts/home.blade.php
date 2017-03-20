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
    <link href="/css/app.css" rel="stylesheet">
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

.dropdown-content.nested {
   overflow-y: visible;
}

.dropdown-content .dropdown-content {
   margin-left: 100%;
}
    </style>
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

<ul id="serviciosSubmenu" class="dropdown-content lista">
  <li><a style="color:#444;" href="#!"><i class="fa fa-user-plus fa-1x"></i> REGISTRA TU PAGO</a></li>
  <li><a style="color:#444;" href="#!">SOLICITUD DE SERVICIO RESIDENCIAL</a></li>
  <li><a style="color:#444;" href="#!">PREGUNTAS FRECUENTES</a></li>
</ul>

<nav class="white nav-white">
  <div class="nav-wrapper">
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
    <a href="#!" class="brand-logo"><img src="http://www.cablemas.com.ve/wp-content/uploads/CablemasLogo.png" width="250px;" alt=""></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="sass.html"><i class="fa fa-address-card-o"></i> QUIENES SOMOS?</a></li>
       <li><a class='dropdown-button d' href='#' data-activates='dropdown4' data-hover="hover" data-alignment="left">SERVICIOS</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="serviciosSubmenu"><i class="fa fa-handshake-o"></i> SERVICIO AL CLIENTE<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a href="badges.html"><i class="fa fa-address-book"></i> CONTACTO</a></li>
      <li><a href="{{ url('/login') }}"><i class="fa fa-sign-in"></i> LOGIN</a></li>
    </ul>
  </div>
</nav>



<ul id='dropdown4' class='dropdown-content'>
    <li><a href="#!">two</a></li>
    <li class="divider"></li>
    <li><a href="#!">three</a></li>
    <li><a class='dropdown-button2 d' href='#' data-activates='dropdown5' data-hover="hover" data-alignment="left">Drop Me!</a></li>
</ul>
<ul id='dropdown5' class='dropdown-content'>
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider"></li>
    <li><a href="#!">three</a></li>
</ul>


  <ul id="slide-out" class="side-nav hide-on-med-and-up">
      <li><a href="sass.html"><i class="fa fa-address-card-o fa-2x"></i> QUIENES SOMOS?</a></li>
      <li><a href="badges.html"><i class="fa fa-briefcase fa-2x"></i> SERVICIOS</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="fa fa-handshake-o fa-2x"></i> SERVICIO AL CLIENTE<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a href="badges.html"><i class="fa fa-address-book fa-2x"></i> CONTACTO</a></li>
      <li><a href="{{ url('/login') }}"><i class="fa fa-sign-in fa-2x"></i> LOGIN</a></li>
  </ul>

        

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
