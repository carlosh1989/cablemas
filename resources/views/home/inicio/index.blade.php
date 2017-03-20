
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
  	text-shadow: 0px 1px 1px #444;
  	text-align: center;
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
  <div class="row">
    <div class="col s12 m12 l3"><br/>
      <div class="card">
        <div class="card-image"><img src="http://www.cablemas.com.ve/wp-content/uploads/Nodos-Cablemas.png"/></div>
        <div class="card-content">
          <h5 class="blue-text">NODOS CABLEMAS</h5>
          <p>Tecnología TDMA</p>
        </div>
      </div>
    </div>
    <div class="col s12 m12 l3"><br/>
      <div class="card">
        <div class="card-image"><img src="http://www.cablemas.com.ve/wp-content/uploads/soporte-tecnico.png"/></div>
        <div class="card-content">
          <h5 class="blue-text">SOPORTE TECNICO</h5>
          <p>Personal Años Experiencia</p>
        </div>
      </div>
    </div>
    <div class="col s12 m12 l3"><br/>
      <div class="card">
        <div class="card-image"><img src="http://www.cablemas.com.ve/wp-content/uploads/Telefonia-IP.png"/></div>
        <div class="card-content">
          <h5 class="blue-text">TELEFONÍA IP</h5>
          <p>Para Punto Ventas</p>
        </div>
      </div>
    </div>
    <div class="col s12 m12 l3"><br/>
      <div class="card">
        <div class="card-image"><img src="http://www.cablemas.com.ve/wp-content/uploads/Pagos-Online.png"/></div>
        <div class="card-content">
          <h5 class="blue-text">PAGOS ONLINE</h5>
          <p>
            Fácil Y Sencillo
            
            
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="texto">
  <div class="row">
    <div class="col s12 m12 l6"><br/><img src="http://www.cablemas.com.ve/wp-content/uploads/CablemasLogo.png" alt="" class="img-parallax1"/></div>
    <div class="col s12 m12 l6"><br/>
      <h4 class="blue-text">Porque elegirnos?</h4>
      <div class="divider"></div>
      <p>
         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit laborum, molestiae eveniet ipsum natus ullam, explicabo autem laudantium magni porro minima dignissimos sequi vel. Incidunt ipsam accusamus modi error aliquam.
        
      </p>
    </div>
  </div>
</div>
<div class="parallax-container parallax-contenedor">
  <div class="parallax"><img src="https://curiosoando.com/wp-content/uploads/2014/06/server_room.jpg"/></div>
</div>@endsection