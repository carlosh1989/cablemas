
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
  	font-style: italic;
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
  
  .tituloPlanes{
  	font-family: 'Cantarell', sans-serif;
  	color:#555;
  	font-style: italic;
  	text-align: center;
  }
  
  .precioPlanes{
  	font-family: 'Cantarell', sans-serif;
  	font-style: italic;
  	text-align: center;
  	font-size: 2em;
  }
  
  .velocidadPlanes{
  	font-family: 'Cantarell', sans-serif;
  	font-style: italic;
  	text-align: center;
  	font-size: 1.2em;	
  }
  
  .collection-item{
  	color:#777;
  	font-size: 0.9em;
  }
  
</style>@section('content')
<div class="section">
  <div class="row container">
    <div class="col s12 m12 l12">
      <div class="col s12 m12 l1"><br/><i aria-hidden="true" class="iconoBanner fa fa-users fa-3x blue-text"></i></div>
      <div class="col s12 m12 l11">
        <h5 class="tituloBanner">Residencial</h5>
        <div class="divider"></div>
        <p class="grey-text parrafoBanner">
          Producto de acceso permanente a Internet, diseñado para satisfacer las necesidades del hogar. Con CABLEMAS tu familia experimentará la más alta velocidad de navegación. Podrás bajar y subir tu música, videos y fotos, compartir en redes sociales, descargar programas, acceder a tu correo, chat, y mucho más…
          
        </p>
        <h6 class="tituloBanner blue-text">Características del producto:</h6>
        <ul id="lista2">
          <li>Servicio Atención al Cliente 24x7x365 días del año.</li>
          <li>Plan Ilimitado de conexión.</li>
          <li>Precio Fijo Mensual.</li>
          <li>Acceso permanente las 24 horas, los 365 días del año, sin ocupar su línea telefónica.</li>
          <li>Seguridad y escalabilidad.</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="section grey darken-4"><br/>
  <!--#particles(style="z-index:1")-->
  <div class="row">
    <div class="col s12 m12 l4">
      <div class="card">
        <div style="text-align:center;font-size:2em;" class="card-title blue white-text">BASICO</div>
        <div class="precioPlanes green-text">$10,52</div>
        <div class="velocidadPlanes blue-text"><i class="fa fa-star-o fa-3x"></i><br/><a>512Kbps</a><br/><a class="grey-text">Ilimitado</a></div>
        <div class="card-content">
          <ul class="collection">
            <li class="collection-item">Navegar por páginas básicas: bancos, Servipag, Facebook y los principales diarios.</li>
            <li class="collection-item">Comunicarse y compartir: en tus redes sociales favoritas.</li>
            <li class="collection-item">Chatear: usando tus aplicaciones de mensajería instantánea</li>
            <li class="collection-item">Enviar y recibir correos: con tu cuenta de Gmail, Hotmail-Outlook, Yahoo, etc.</li>
            <li class="collection-item">Contratación sujeta a factibilidad técnica y evaluación comercial.</li>
          </ul>
        </div>
        <div class="center-align"></div>
        <button style="width:100%;" class="waves-effect waves-light btn btn-large green tituloBanner">CONTRATAR <i class="fa fa-pencil-square-o"></i></button>
      </div>
    </div>
    <div class="col s12 m12 l4">
      <div class="card">
        <div style="text-align:center;font-size:2em;" class="card-title blue white-text"> MEGA</div>
        <div class="precioPlanes green-text">$24.95</div>
        <div class="velocidadPlanes blue-text"><i class="fa fa-star-half-o fa-3x"></i><br/><a>1024Kbps</a><br/><a class="grey-text">Ilimitado</a></div>
        <div class="card-content">
          <ul class="collection">
            <li class="collection-item">Navegar por páginas básicas: bancos, Servipag, Facebook y los principales diarios.</li>
            <li class="collection-item">Comunicarse y compartir: en tus redes sociales favoritas.</li>
            <li class="collection-item">Chatear: usando tus aplicaciones de mensajería instantánea</li>
            <li class="collection-item">Enviar y recibir correos: con tu cuenta de Gmail, Hotmail-Outlook, Yahoo, etc.</li>
            <li class="collection-item">Contratación sujeta a factibilidad técnica y evaluación comercial.</li>
          </ul>
        </div>
        <div class="center-align"></div>
        <button style="width:100%;" class="waves-effect waves-light btn btn-large green tituloBanner">CONTRATAR <i class="fa fa-pencil-square-o"></i></button>
      </div>
    </div>
    <div class="col s12 m12 l4">
      <div class="card">
        <div style="text-align:center;font-size:2em;" class="card-title blue white-text"> PREMIUN</div>
        <div class="precioPlanes green-text">$39.95</div>
        <div class="velocidadPlanes blue-text"><i class="fa fa-star fa-3x"></i><br/><a>2048Kbps</a><br/><a class="grey-text">Ilimitado</a></div>
        <div class="card-content">
          <ul class="collection">
            <li class="collection-item">Compartir lo que quieras: en redes sociales, chatear y enviar correos.</li>
            <li class="collection-item">Conectar tus dispositivos al mismo tiempo: computadores, smartphones, tableta, etc.</li>
            <li class="collection-item">Jugar en linea: desde tu computador o tu consola.</li>
            <li class="collection-item">Ver vídeos en linea: en YouTube, Netflix u otros servicios.</li>
            <li class="collection-item">Contratación sujeta a factibilidad técnica y evaluación comercial.</li>
          </ul>
        </div>
        <div class="center-align"></div>
        <button style="width:100%;" class="waves-effect waves-light btn btn-large green tituloBanner">CONTRATAR <i class="fa fa-pencil-square-o"></i></button>
      </div>
    </div>
  </div>
</div>
<div class="section">
  <div class="row container">
    <div class="col s12 m12 l1"><br/><i aria-hidden="true" class="iconoBanner fa fa-eye fa-3x blue-text"></i></div>
    <div class="col s12 m12 l11">
      <p class="grey-text parrafoBanner">
        (√) Según Convenio Cambiario 35, publicado en la Gaceta Oficial Nro. 40.865 de fecha 09 de Marzo de 2016, el cual en su artículo 28, deroga el Convenio Cambiario 25, en sus artículos 1 y 2, que fueron publicados en Gaceta Oficial número 6122 Extraordinario en fecha 23 de enero de 2014, los cuales regían al Sector Telecomunicaciones, a tasa SICAD, motivo por el cual desde el 09 de Marzo se regirá ahora el Sector a tasa DICOM, mercado complementario flotante de divisas, el cual será publicado periódicamente por el Banco Central de Venezuela, y los montos serán facturados a dicha tasa DICOM, según sea el valor al momento de la facturación mensual del servicio, y a los efectos del pago, el cambio tomado en cuenta será de la fecha efectiva de pago.
        
        *IVA 12% NO incluído Marcaje 01 de Marzo de 2016.
        
        **Prepagando monto anual usted obtiene un mes de renta gratis. Puede depositar en las cuentas: BANESCO: 0134-0057-1105-7101-7646  a nombre de INVERSIONES UZCARGUIN C.A informe su pago al email: administracion@cablemas.com.ve
        
        • Cheque Devuelto Genera Gastos Administrativos  2500,00 BsF.
        
         • Cualquier consumo de material adicional a cada instalación sera facturado por separado.
        
        • Contáctenos para hacer un relevamiento de sus necesidades.
      </p>
      <ul id="lista2">
        <li>Cheque Devuelto Genera Gastos Administrativos  2500,00 BsF.</li>
        <li>Cualquier consumo de material adicional a cada instalación sera facturado por separado.</li>
        <li>Contáctenos para hacer un relevamiento de sus necesidades.</li>
      </ul>
    </div>
  </div>
</div>@endsection