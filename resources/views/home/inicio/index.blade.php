
@extends('layouts.home')
@section('content')
<style type="text/css">
  .parallax-container
  	{
  		height:350px;
  	}
  .img-parallax1{
      width: 100%;
      height: auto;
      max-width: 100%;
  }
  .titulo{
  	font-size: 1.3em;
  	text-shadow: 0px 1px 1px #777;
  	text-align: center;
  	color:#555;
  }
  
  p{
  	text-align: justify;
  	color:#777;
  }
  
  .parallax-contenedor
  {
  	height:100px;
  }
  
  .icono{
    /*IMPORTANTE*/
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .imagenBanner{
      width: 100%;
      height: auto;
      max-width: 70%;
  }
  
  .imagenBanner2{
      width: 100%;
      height: auto;
      max-width: 100%;
  }
  
  .tituloBanner{
  	font-family: 'Cantarell', sans-serif;
  	color:#555;
  	font-style: italic;
  }
  
  .parrafoBanner{
  	line-height: 0px;
  	text-indent: 0.7em;
  }
  
  @media (max-width: 600px) {
  	.tituloBanner{
  		font-family: 'Cantarell', sans-serif;
  		text-align: center;
  	}
  	
  	.parrafoBanner{
  		line-height: 0px;
  		text-indent: 0.7em;
  		text-align: center;
  	}
  }
  
  #particles {
    width: 100%;
    overflow: hidden;
    position: absolute;
  }
  
  
</style>
<div class="slider">
  <ul class="slides">
    <li><img src="https://www.ingeniumweb.com/Themes/IngeniumWeb/Content/img/slider/Mobile%20App%20Development%20Showcase.jpg"/>
      <div class="caption center-align">
        <h4><a href="#" style="padding:5px;" class="white tituloBanner">TITULO</a></h4>
        <h5 class="light white-text text-lighten-3 white-text"> <a href="#" style="padding:5px;" class="green white-text">Here is our small slogan</a></h5>
      </div>
    </li>
    <li><img src="https://www.mercedes-amg.com/webspecial/beastofthegreenhell/img/jungleGallery/gallery/04.jpg"/>
      <div class="caption center-align">
        <h4><a href="#" style="padding:5px;" class="white tituloBanner">TITULO</a></h4>
        <h5 class="light white-text text text-lighten-3 white-text"> <a href="#" style="padding:5px;" class="green white-text">Here is our small slogan</a></h5>
      </div>
    </li>
  </ul>
</div>
<div class="row">
  <div class="col s12 m12 l6"><br/><img src="http://www.toyoclub.com/img/combo.png" alt="" class="imagenBanner"/></div>
  <div class="col s12 m12 l6">
    <div class="col s12 m12 l1 center-align"><br/><a class="iconoBanner fa fa-tachometer fa-3x green-text"></a></div>
    <div class="col s12 m12 l11">
      <h4 class="tituloBanner">LLega rapido</h4>
      <p class="grey-text parrafoBanner">Navega y descargas a velocidades optimas</p>
    </div>
    <div class="col s12 m12 l1 center-align"><br/><i aria-hidden="true" class="iconoBanner fa fa-wifi fa-3x green-text"></i></div>
    <div class="col s12 m12 l11">
      <h4 class="tituloBanner">Encuantra el mas cercano</h4>
      <p class="grey-text parrafoBanner">Da señal a todos tus dispositivos inalambricos</p>
    </div>
    <div class="col s12 m12 l1 center-align"><br/><i aria-hidden="true" class="iconoBanner fa fa-credit-card-alt fa-3x green-text"></i></div>
    <div class="col s12 m12 l11">
      <h4 class="tituloBanner">Pagos Online</h4>
      <p class="grey-text parrafoBanner">
        Registra tus pagos desde la comodidad de tu casa
        
        
      </p>
    </div>
  </div>
</div>
<div class="texto grey darken-4">
  <div class="row">
    <div class="col s12 m12 l6"><br/>
      <div class="col s12 m12 l1 center-align"><br/><a class="iconoBanner fa fa-tachometer fa-3x green-text"></a></div>
      <div class="col s12 m12 l11">
        <h4 class="tituloBanner white-text">LLega rapido</h4>
        <p class="grey-text parrafoBanner">Navega y descargas a velocidades optimas</p>
      </div>
      <div class="col s12 m12 l1 center-align"><br/><i aria-hidden="true" class="iconoBanner fa fa-wifi fa-3x green-text"></i></div>
      <div class="col s12 m12 l11">
        <h4 class="tituloBanner white-text">Encuantra el mas cercano</h4>
        <p class="grey-text parrafoBanner">Da señal a todos tus dispositivos inalambricos</p>
      </div>
      <div class="col s12 m12 l1 center-align"><br/><i aria-hidden="true" class="iconoBanner fa fa-credit-card-alt fa-3x green-text"></i></div>
      <div class="col s12 m12 l11">
        <h4 class="tituloBanner white-text">Pagos Online</h4>
        <p class="grey-text parrafoBanner">Registra tus pagos desde la comodidad de tu casa</p>
      </div>
    </div>
    <div class="col s12 m12 l6"><br/><br/><br/><img src="http://www.clipartbest.com/cliparts/RTG/kb7/RTGkb7qTL.png" alt="" class="imagenBanner2"/></div>
  </div><br/>
</div>
<div class="row">
  <div class="col s12 m12 l6"><br/><img src="http://www.toyoclub.com/img/combo.png" alt="" class="imagenBanner"/></div>
  <div class="col s12 m12 l6">
    <div class="col s12 m12 l1 center-align"><br/><a class="iconoBanner fa fa-tachometer fa-3x green-text"></a></div>
    <div class="col s12 m12 l11">
      <h4 class="tituloBanner">LLega rapido</h4>
      <p class="grey-text parrafoBanner">Navega y descargas a velocidades optimas</p>
    </div>
    <div class="col s12 m12 l1 center-align"><br/><i aria-hidden="true" class="iconoBanner fa fa-wifi fa-3x green-text"></i></div>
    <div class="col s12 m12 l11">
      <h4 class="tituloBanner">Encuantra el mas cercano</h4>
      <p class="grey-text parrafoBanner">Da señal a todos tus dispositivos inalambricos</p>
    </div>
    <div class="col s12 m12 l1 center-align"><br/><i aria-hidden="true" class="iconoBanner fa fa-credit-card-alt fa-3x green-text"></i></div>
    <div class="col s12 m12 l11">
      <h4 class="tituloBanner">Pagos Online</h4>
      <p class="grey-text parrafoBanner">
        Registra tus pagos desde la comodidad de tu casa
        
      </p>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
  particleground(document.getElementById('particles'), {
  dotColor: '#555',
  lineColor: '#444'
  });
  });
</script>@endsection