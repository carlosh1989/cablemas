
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
      <div class="col s12 m12 l1"><br/><i aria-hidden="true" class="iconoBanner fa fa-volume-control-phone fa-3x blue-text"></i></div>
      <div class="col s12 m12 l11">
        <h5 class="tituloBanner">Telefonía IP</h5>
        <div class="divider"></div>
        <h6 class="tituloBanner blue-text">Que es telefonia Ip?</h6>
        <p class="grey-text parrafoBanner">
          El mundo entero se está dando cuenta que la telefonía por Internet es la más innovadora y práctica manera de comunicarse.  Al contrario de las compañías de telefonía convencionales,  el servicio de teléfono por Internet permite que usuarios hagan y reciban llamadas telefónicas a un bajo costo aprovechando su conexión de Internet de banda ancha y un teléfono para Internet ó un adaptador (ATA).
          
        </p>
      </div>
    </div>
  </div>
</div>@endsection