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

body {
  line-height: 1;
  background: url('http://k31.kn3.net/taringa/9/6/7/A/5/1/ChivitoPrimavera/9A2.jpg') center center cover no-repeat fixed;
}
ol, ul {
  list-style: none;
}
blockquote, q {
  quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
  content: '';
  content: none;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}

/* particleground demo */

* {
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}

html, body {
  width: 100%;
  height: 100%;
  overflow: hidden;
}

/* Responsive Full Background Image Using CSS
 * Tutorial URL: http://sixrevisions.com/css/responsive-background-image/
*/
body {
  /* Location of the image */
  background-image: url(http://cdn.sixrevisions.com/0431-01_responsive_background_image_demo/images/background-photo.jpg);
  
  /* Image is centered vertically and horizontally at all times */
  background-position: center center;
  
  /* Image doesn't repeat */
  background-repeat: no-repeat;
  
  /* Makes the image fixed in the viewport so that it doesn't move when 
     the content height is greater than the image height */
  background-attachment: fixed;
  
  /* This is what makes the background image rescale based on its container's size */
  background-size: cover;
  
  /* Pick a solid background color that will be displayed while the background image is loading */
  background-color:#464646;
  
  /* SHORTHAND CSS NOTATION
   * background: url(background-photo.jpg) center center cover no-repeat fixed;
   */
}

/* For mobile devices */
@media only screen and (max-width: 767px) {
  body {
    /* The file size of this background image is 93% smaller
     * to improve page load speed on mobile internet connections */
    background-image: url(images/background-photo-mobile-devices.jpg);
  }
	}

#particles {
  width: 100%;
  height: 100%;
  overflow: hidden;
  position: absolute;
}

#intro {
  position: absolute;
  left: 0;
  top: 50%;
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
  <li><a style="color:#444;" href="#!"><i class="fa fa-user-plus fa-1x"></i> One</a></li>
  <li><a style="color:#444;" href="#!">two</a></li>
  <li><a style="color:#444;" href="#!">three</a></li>
</ul>
<nav class="white nav-white">
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo"><img src="http://www.cablemas.com.ve/wp-content/uploads/CablemasLogo.png" width="250px;" alt=""></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="sass.html">QUIENES SOMOS?</a></li>
      <li><a href="badges.html">SERVICIOS</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">SERVICIO AL CLIENTE<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a href="{{ url('/login') }}">Login</a></li>
    </ul>
  </div>
</nav>


<div id="particles">
  <div id="intro">
  @yield('content')
<div> 
</div>
 
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
