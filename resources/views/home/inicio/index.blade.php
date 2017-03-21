
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
      max-width: 100%;
  }
  
  .tituloBanner{
  	font-family: 'Cantarell', sans-serif;
  	color:#555;
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
<div class="row">
  <div class="col s12 m12 l6"><img src="https://s-media-cache-ak0.pinimg.com/564x/ed/1c/09/ed1c09272f9f8c9b209389a4b5314294.jpg" alt=""/></div>
  <div class="col s12 m12 l6">
    <div class="col s12 m12 l1"><br/><i aria-hidden="true" class="iconoBanner fa fa-fighter-jet fa-3x blue-text"></i></div>
    <div class="col s12 m12 l11">
      <h4 class="tituloBanner">Velocidad Garantizada</h4>
      <p class="grey-text parrafoBanner">Navega y descargas a velocidades optimas</p>
    </div>
    <div class="col s12 m12 l1"><br/><i aria-hidden="true" class="iconoBanner fa fa-cloud-download fa-3x blue-text"></i></div>
    <div class="col s12 m12 l11">
      <h4 class="tituloBanner">Internet Ilimitado </h4>
      <p class="grey-text parrafoBanner">Descarga todo lo que desees sin limitaciones</p>
    </div>
    <div class="col s12 m12 l1"><br/><i aria-hidden="true" class="iconoBanner fa fa-wifi fa-3x blue-text"></i></div>
    <div class="col s12 m12 l11">
      <h4 class="tituloBanner">Intalación de Router</h4>
      <p class="grey-text parrafoBanner">Da señal a todos tus dispositivos inalambricos</p>
    </div>
    <div class="col s12 m12 l1"><br/><i aria-hidden="true" class="iconoBanner fa fa-credit-card-alt fa-3x blue-text"></i></div>
    <div class="col s12 m12 l11">
      <h4 class="tituloBanner">Pagos Online</h4>
      <p class="grey-text parrafoBanner">
        Registra tus pagos desde la comodidad de tu casa
        
      </p>
    </div>
  </div>
</div>
<div class="divider"></div>
<div class="texto">
  <div class="row">
    <div class="col s12 m12 l3"><br/><i class="fa fa-user fa-2x icono blue-text"></i>
      <div class="titulo">INTERNET RESIDENCIAL</div>
      <div class="col l10 offset-l1">
        <p>Acceso a Internet de Banda Ancha, dirigido al segmento de hogares, con acceso ilimitado a Internet</p>
      </div>
    </div>
    <div class="col s12 m12 l3"><br/><i class="fa fa-briefcase fa-2x icono blue-text"></i>
      <div class="titulo">NTERNET COMERCIAL</div>
      <div class="col l10 offset-l1">
        <p>Acceso a Internet de Banda Ancha, dirigido al segmento de hogares, con acceso ilimitado a Internet</p>
      </div>
    </div>
    <div class="col s12 m12 l3"><br/><i class="fa fa-cloud fa-2x icono blue-text"></i>
      <div class="titulo">INTERNET RESIDENCIAL</div>
      <div class="col l10 offset-l1">
        <p>Acceso a Internet de Banda Ancha, dirigido al segmento de hogares, con acceso ilimitado a Internet</p>
      </div>
    </div>
    <div class="col s12 m12 l3"><br/><i class="fa fa-wifi fa-2x icono blue-text"></i>
      <div class="titulo">INTERNET RESIDENCIAL</div>
      <div class="col l10 offset-l1">
        <p>
          Acceso a Internet de Banda Ancha, dirigido al segmento de hogares, con acceso ilimitado a Internet
          
        </p>
      </div>
    </div>
  </div>
</div>
<div class="section grey darken-4">
  <!--#particles(style="z-index:1")-->
  <div class="row container">
    <div class="col s12 m12 l3"><br/>
      <div style="z-index:2" class="card">
        <div class="card-image"><br/><br/><img src="http://i582.photobucket.com/albums/ss266/otet_2009/Template/parabola-2.png"/></div><br/>
        <div class="divider"></div>
        <div class="card-content">
          <h6 class="blue-text">NODOS CABLEMAS</h6>
          <p class="grey-text">Tecnología TDMA</p>
        </div>
      </div>
    </div>
    <div class="col s12 m12 l3"><br/>
      <div style="z-index:3" class="card">
        <div class="card-image"><br/><br/><img src="http://www.freeiconspng.com/uploads/helpdesk-icon-33.png"/></div><br/>
        <div class="divider"></div>
        <div class="card-content">
          <h6 class="blue-text">SOPORTE TECNICO</h6>
          <p class="grey-text">Personal Años Experiencia</p>
        </div>
      </div>
    </div>
    <div class="col s12 m12 l3"><br/>
      <div style="z-index:4" class="card">
        <div class="card-image"><br/><br/><img src="http://img.clubic.com/01592870-photo-logo-telephone-fax.jpg"/></div><br/>
        <div class="divider"></div>
        <div class="card-content">
          <h6 class="blue-text">TELEFONÍA IP</h6>
          <p class="grey-text">Para Punto Ventas</p>
        </div>
      </div>
    </div>
    <div class="col s12 m12 l3"><br/>
      <div style="z-index:5" class="card">
        <div class="card-image"><img src="https://conceptdraw.com/a3179c3/p14/preview/640/pict--credit-cards-sales-symbols---vector-stencils-library.png--diagram-flowchart-example.png" style="height:295px;"/></div>
        <div class="divider"></div>
        <div class="card-content">
          <h6 class="blue-text">PAGOS ONLINE</h6>
          <p class="grey-text">
            Fácil Y Sencillo
            
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="texto">
  <div class="row">
    <div class="col s12 m12 l12">
      <div class="col s12 m12 l7 offset-l1"><br/><br/>
        <div class="col s12 m12 l1"><br/><i aria-hidden="true" class="iconoBanner fa fa-users fa-3x blue-text"></i></div>
        <div class="col s12 m12 l11">
          <h5 class="tituloBanner">¿Por qué elegirnos? </h5>
          <div class="divider"></div>
          <p style="text-indent:0.8em;" class="grey-text">Somos la primera Empresa Integradora de Telecomunicaciones en Venezuela en ofrecer Servicios de Internet Inalámbrico en la Barinas, con capital 100% Nacional, focalizado al mercado Residencial, Comercial y Empresarial, ofrecemos velocidades de acceso a Internet, según los requerimientos del cliente, en cualquier lugar, gracias a la utilización de tecnologías de última generación. Contamos con un equipo altamente capacitado para ofrecer un buen servicio en atención y rapidez, logrando ser una compañía que se adapte a las necesidades del consumidor.</p>
        </div>
      </div>
      <div class="col s12 m12 l3 offset-l1"><img src="http://lifefreedom.com/wp-content/uploads/2015/07/woman-thinking.png" style="height:300px;position:absolute;z-index:-1;" alt=""/></div>
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