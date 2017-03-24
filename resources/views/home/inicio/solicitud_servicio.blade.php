
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
      <div class="col s12 m12 l1"><br/><i aria-hidden="true" class="iconoBanner fa fa-clipboard fa-3x blue-text"></i></div>
      <div class="col s12 m12 l11">
        <h5 class="tituloBanner">Solicitud de Servicio Residencial</h5>
        <div class="divider"></div>
        <p class="grey-text parrafoBanner">Para solicitar servicio de internet, llene el siguiente formulario y nos comunicaremos con usted.</p>
      </div>
      <div class="row col s12 m12 l9 offset-l1">
        <form>
          <div class="row">
            <div class="input-field col s6">
              <input id="nombreapellido" type="text" class="validate"/>
              <label for="nombreapellido">Nombre y Apellido</label>
            </div>
            <div class="input-field col s6">
              <input id="last_name" type="text" class="validate"/>
              <label for="last_name">Cédula</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="numerotelefono" type="text" class="validate"/>
              <label for="numerotelefono">Número de telefono</label>
            </div>
            <div class="input-field col s6">
              <input id="email" type="text" class="validate"/>
              <label for="email">Correo electronico</label>
            </div>
          </div>
          <div class="row"> 
            <h6 class="grey-text">Seleccionar Plan</h6>
            <div class="divider"></div>
            <p>
              <input id="test1" name="metodo_pago" type="radio" class="with-gap"/>
              <label for="test1">BASICO</label>
            </p>
            <p>
              <input id="test2" name="metodo_pago" type="radio" class="with-gap"/>
              <label for="test2">MEGA</label>
            </p>
            <p>
              <input id="test3" name="metodo_pago" type="radio" class="with-gap"/>
              <label for="test3">PREMIUN</label>
            </p>
          </div>
          <div class="row"> 
            <h6 class="grey-text">Posee antena?</h6>
            <div class="divider"></div>
            <p>
              <input id="antenano" name="antena" type="radio" class="with-gap"/>
              <label for="antenano">NO</label>
            </p>
            <p>
              <input id="antenasi" name="antena" type="radio" class="with-gap"/>
              <label for="antenasi">SI</label>
            </p>
            <script type="text/javascript">
              $(document).ready(
              function() {
              $("#antenasi").click(function() {
              $("#antena").show("slow");
              });
              $("#antenano").click(function() {
              $("#antena").hide("slow");
              });
              });
            </script>
          </div>
          <div id="antena" style="display:none;" class="row">
            <h6 class="grey-text">Seleccionar Plan</h6>
            <div class="divider"></div>
            <p>
              <input id="tipoantena1" name="tipoantena" type="radio" class="with-gap"/>
              <label for="tipoantena1">LocoM2</label>
            </p>
            <p>
              <input id="tipoantena2" name="tipoantena" type="radio" class="with-gap"/>
              <label for="tipoantena2">LocoM5</label>
            </p>
            <p>
              <input id="tipoantena3" name="tipoantena" type="radio" class="with-gap"/>
              <label for="tipoantena3">NanoStation M2</label>
            </p>
            <p>
              <input id="tipoantena4" name="tipoantena" type="radio" class="with-gap"/>
              <label for="tipoantena4">NanoStation M5</label>
            </p>
            <p>
              <input id="tipoantena5" name="tipoantena" type="radio" class="with-gap"/>
              <label for="tipoantena5">PowerBeam M5</label>
            </p>
            <p>
              <input id="tipoantena6" name="tipoantena" type="radio" class="with-gap"/>
              <label for="tipoantena6">Mikrotik (2.4Ghz/5Ghz)</label>
            </p>
            <p>
              <input id="test3" name="tipoantena" type="radio" class="with-gap"/>
              <label for="test3">Tplink (2.4Ghz/5Ghz)</label>
            </p>
          </div>
          <div class="row">
            <form class="col s12"></form>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="textarea1" class="materialize-textarea"></textarea>
                <label for="textarea1">Dirección</label>
              </div>
            </div>
          </div>
          <div class="row">
            <button class="col s2 push-s10 btn blue waves-effect waves-light">ENVIAR <i class="fa fa-paper-plane"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>@endsection