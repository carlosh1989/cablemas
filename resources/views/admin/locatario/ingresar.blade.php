@extends('layouts.admin')
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
  
  .titulo
  {
  	font-family: 'Anton', sans-serif;letter-spacing: 0.2em;
  }
</style>@section('content')
<div class="container">
  <form action="{{ url('/admin/locatario') }}" method="POST">{{ csrf_field() }}
    <div class="row">
      <div class="col l10 offset-l1 s12 m12">
        <div class="card-panel">
          <div class="row">
            <div class="col l12 s12">
              <h5 class="teal-text center animated pulse titulo green-text">Ingresando locatario</h5>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="razon" type="text" name="razon_social" class="validate"/>
              <label for="razon" data-error="Ingrese un email valido" data-success="Correcto">Razon Social</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="rif" type="text" name="rif" class="validate"/>
              <label for="rif" data-error="Ingrese dato valido" data-success="Correcto">R.I.F.</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="direccion" type="text" name="direccion" class="validate"/>
              <label for="direccion" data-error="Ingrese dato valido" data-success="Correcto">Dirección</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="responsable" type="email" name="email" class="validate"/>
              <label for="responsableemail" data-error="Ingrese dato valido" data-success="Correcto">Email local</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="telefono" type="text" name="telefono" class="validate"/>
              <label for="telefono" data-error="Ingrese dato valido" data-success="Correcto">Telefono local</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="servicios" type="text" name="servicios" class="validate"/>
              <label for="servicios" data-error="Ingrese dato valido" data-success="Correcto">Servicios</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="horarios" type="text" name="horarios" class="validate"/>
              <label for="horarios" data-error="Ingrese dato valido" data-success="Correcto">Horarios</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="redes" type="text" name="redes_sociales" class="validate"/>
              <label for="redes" data-error="Ingrese dato valido" data-success="Correcto">Redes sociales</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <select name="forma_pago">
                <option value="" required="required" disabled="disabled" selected="selected">Formas de pago</option>
                <option value="1">Efectivo</option>
                <option value="2">Efectivo y Tarjeta de debito</option>
                <option value="3">Efectivo y Tarjeta de debito y credito</option>
                <option value="4">Efectivo y Tarjeta de credito</option>
                <option value="5">Todas las anteriores</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <select name="encargos">
                <option value="" required="required" disabled="disabled" selected="selected">Encargos</option>
                <option value="1">Si</option>
                <option value="0">No</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="responsable" type="text" name="responsable" class="validate"/>
              <label for="responsablenombre" data-error="Ingrese dato valido" data-success="Correcto">Responsable Nombre</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="responsable" type="text" name="responsable_telefono" class="validate"/>
              <label for="responsabletelefono" data-error="Ingrese dato valido" data-success="Correcto">Responsable Telefono</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="responsable" type="email" name="responsable_email" class="validate"/>
              <label for="responsableemail" data-error="Ingrese dato valido" data-success="Correcto">Responsable Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input type="password" id="password" name="password" class="validate"/>
              <label for="password" data-error="Ingrese dato valido" data-success="Correcto">Password</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input type="password" id="confirm_password" class="validate"/>
              <label for="confirm_password" data-error="El password no coincide" data-success="Correcto">Repita Password</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <button type="submit" class="waves-effect waves-light green btn-large pull-right">Guardar <i class="fa fa-send"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
<script type="text/javascript">
  $('.chips').material_chip();
  $('.chips-initial').material_chip({
  data: [{
  tag: 'Apple',
  }, {
  tag: 'Microsoft',
  }, {
  tag: 'Google',
  }],
  });
  $('.chips-placeholder').material_chip({
  placeholder: 'Enter a tag',
  secondaryPlaceholder: '+Tag',
  });
  $('.chips-autocomplete').material_chip({
  autocompleteOptions: {
  data: {
  'Apple': null,
  'Microsoft': null,
  'Google': null
  },
  limit: Infinity,
  minLength: 1
  }
  });
  
  var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");
  
  function validatePassword(){
  if(password.value != confirm_password.value) {
  confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
  confirm_password.setCustomValidity('');
  }
  }
  
  password.onchange = validatePassword;
  confirm_password.onkeyup = validatePassword;
</script>@endsection