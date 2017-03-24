
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
      <div class="col s12 m12 l1"><br/><i aria-hidden="true" class="iconoBanner fa fa-money fa-3x blue-text"></i></div>
      <div class="col s12 m12 l11">
        <h5 class="tituloBanner">Registro de Pago</h5>
        <div class="divider"></div>
        <p class="grey-text parrafoBanner">Este formulario le permitirá agilizar su tramite de activación y servicios de Internet</p>
      </div>
      <div class="row col s12 m12 l9 offset-l1">
        <form>
          <div class="row">
            <div class="input-field col s6">
              <input id="nombreapellido" type="text" class="validate"/>
              <label for="nombreapellido">Nombre y Apellido o razón social</label>
            </div>
            <div class="input-field col s6">
              <input id="last_name" type="text" class="validate"/>
              <label for="last_name">Cédula o Rif</label>
            </div>
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
            <h6 class="grey-text">Metodo de Pago</h6>
            <div class="divider"></div>
            <p>
              <input id="test1" name="metodo_pago" type="radio" class="with-gap"/>
              <label for="test1">Deposito</label>
            </p>
            <p>
              <input id="test2" name="metodo_pago" type="radio" class="with-gap"/>
              <label for="test2">Transferencia</label>
            </p>
            <p>
              <input id="test3" name="metodo_pago" type="radio" class="with-gap"/>
              <label for="test3">Pago efectivo</label>
            </p>
            <p>
              <input id="test4" name="metodo_pago" type="radio" class="with-gap"/>
              <label for="test4">Pago por punto de venta</label>
            </p>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="fecha" type="text" class="validate"/>
              <label for="fecha">Fecha Ejemplo: 05/03/2013 11.30 a. m.</label>
            </div>
            <div class="input-field col s6">
              <input id="monto" type="number" class="validate"/>
              <label for="monto">Monto</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="comentarioPago" type="text" class="validate"/>
              <label for="comentarioPago">Número Deposito, Cheque o Transfrencia, punto venta  REFERENCIA</label>
            </div>
            <div class="input-field col s12">
              <input id="entidadbancaria" type="text" class="validate"/>
              <label for="entidadbancaria">Entidad Bancaria</label>
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