
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
      <div class="col s12 m12 l1"><br/><i aria-hidden="true" class="iconoBanner fa fa-level-down fa-3x blue-text"></i></div>
      <div class="col s12 m12 l11">
        <h5 class="tituloBanner">Dedicado</h5>
        <p class="grey-text parrafoBanner">Producto de Acceso Dedicado a Internet, atendiendo las necesidades de su Empresa, con los más altos estándares de capacidad, flexibilidad, confiabilidad, efectividad, seguridad y disponibilidad.</p>
        <div class="divider"></div>
        <h6 class="tituloBanner blue-text">Características del producto:</h6>
        <ul id="lista2">
          <li>Transporte TDMA WIRELESS.</li>
          <li>Velocidad Simétrica de 1MB hasta 50MB.</li>
          <li>Servicios de tecnología de punta UBIQUITI.</li>
          <li>Calidad garantizada.</li>
          <li>Diseñado para usuarios, con  altos requerimientos de conexión a la Internet. </li>
          <li>Incluye direcciones IP certificadas.</li>
        </ul>
      </div>
    </div>
  </div>
</div>@endsection