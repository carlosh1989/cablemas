
@extends('layouts.home')
@section('content')
<style type="text/css">
  p{
  	text-align: justify;
  	color:#777;
  }
  .img {
      width: 100%;
      height: auto;
      margin-top: 50px;
  	vertical-align: middle;
  }
  
  .texto
  {
  	color: #777;
  }
  
  body
  {
  	background: #fff;
  }
  
  .imagenBanner{
      width: 100%;
      height: auto;
      max-width: 100%;
  }
  
  .tituloBanner{
  	font-family: 'Cantarell', sans-serif;
  	color:#555;
  }
  
  .parrafoBanner{
  	text-indent: 0.7em;
  	text-align: justify;
  }
  
  @media (max-width: 600px) {
  	.tituloBanner{
  		font-family: 'Cantarell', sans-serif;
  		text-align: center;
  	}
  	
  	.parrafoBanner{
  		text-indent: 0.7em;
  		text-align: justify;
  	}
  }
  
</style>
<div class="section">
  <div class="row container">
    <div class="col s12 m12 l12">
      <div class="col s12 m12 l1"><br/><i aria-hidden="true" class="iconoBanner fa fa-building-o fa-3x blue-text"></i></div>
      <div class="col s12 m12 l11">
        <h5 class="tituloBanner">Comercial</h5>
        <div class="divider"></div>
        <p class="grey-text parrafoBanner">
          Producto de acceso a Internet de conexión permanente diseñado para medianas y pequeñas empresas.
          
        </p>
        <h6 class="tituloBanner blue-text">Características del producto:</h6>
        <ul id="lista2">
          <li>Plan ilimitado de conexión.</li>
          <li>Transporte TDMA Wirelles.</li>
          <li>Soportado en la plataforma TDMA.</li>
          <li>Velocidad Asimétrica de 256kbps hasta 10240kbps.</li>
          <li>Diseñado para usuarios de aplicaciones no críticas.</li>
        </ul>
      </div>
    </div>
  </div>
</div>@endsection