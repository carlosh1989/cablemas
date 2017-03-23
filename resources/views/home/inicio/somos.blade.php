
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
      <div class="col s12 m12 l1"><br/><i aria-hidden="true" class="iconoBanner fa fa-users fa-3x blue-text"></i></div>
      <div class="col s12 m12 l11">
        <h5 class="tituloBanner">Quiénes somos</h5>
        <div class="divider"></div>
        <p class="grey-text parrafoBanner">Cablemas, Fundada en el año 2013 es la primera Empresa Integradora de Telecomunicaciones en Venezuela en ofrecer Servicios de Internet Inalámbrico en la Región los Andes y Centroccidental del País, con capital 100% Nacional, focalizado al mercado Residencial, PYMES y Empresarial, ofrecemos velocidades de acceso a Internet, según los requerimientos del cliente, en cualquier lugar, gracias a la utilización de tecnologías de última generación.</p>
      </div>
      <div class="col s12 m12 l1"><br/><i aria-hidden="true" class="iconoBanner fa fa-eye fa-3x blue-text"></i></div>
      <div class="col s12 m12 l11">
        <h5 class="tituloBanner">Visión</h5>
        <div class="divider"></div>
        <p class="grey-text parrafoBanner">
          Ser reconocidos como el proveedor preferido de servicios y soluciones de Telecomunicaciones en Venezuela, por medio de la adopción de tecnologías de ultima generación.
          
        </p>
      </div>
      <div class="col s12 m12 l1"><br/><i aria-hidden="true" class="iconoBanner fa fa-heartbeat fa-3x blue-text"></i></div>
      <div class="col s12 m12 l11">
        <h5 class="tituloBanner">Misión</h5>
        <div class="divider"></div>
        <p class="grey-text parrafoBanner">
          Proveer servicios de Telecomunicaciones más rápidos, más confiables, con la mejor relación precio-valor del mercado, con los mejores tiempos de respuestas y que puedan llegar a cualquier lugar, con el uso de las últimas tecnologías en telecomunicaciones.
          
        </p>
      </div>
      <div class="col s12 m12 l1"><br/><i aria-hidden="true" class="iconoBanner fa fa-child fa-3x blue-text"></i></div>
      <div class="col s12 m12 l11">
        <h5 class="tituloBanner">Oportunidades</h5>
        <div class="divider"></div>
        <ul id="lista2">
          <li>Crecimiento en la demanda de servicios.</li>
          <li>Diversificación de servicios IP.</li>
          <li>Zonas desatendidas.</li>
          <li>Bajo nivel técnico/conocimiento y demoras en soporte de la competencia.</li>
          <li>Producto / Servicio Innovador.</li>
          <li>Saturación de la infraestructura actual de la competencia.</li>
          <li>Revolución Inalámbrica en el mercado.</li>
        </ul>
      </div>
    </div>
  </div>
</div>@endsection