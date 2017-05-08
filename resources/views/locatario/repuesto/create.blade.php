@extends('layouts.locatario')
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
  <form action="{{ url('/locatario/repuesto') }}" method="POST">{{ csrf_field() }}<br/>
    <div class="row">
      <div class="col l10 offset-l1 s12 m12">
        <div class="card-panel z-depth-4">
          <div class="row">
            <div class="col l12 s12">
              <h5 class="grey-text center animated pulse titulo">Ingresando Repuestos</h5>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="razon" type="text" name="nombre" class="validate"/>
              <label for="razon" data-error="Ingrese un email valido" data-success="Correcto">Nombre repuesto</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="rif" type="text" name="descripcion" class="validate"/>
              <label for="rif" data-error="Ingrese dato valido" data-success="Correcto">Descripción</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="responsable" type="text" name="modelo" class="validate"/>
              <label for="responsableemail" data-error="Ingrese dato valido" data-success="Correcto">Modelo</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="telefono" type="number" name="ano" class="validate"/>
              <label for="telefono" data-error="Ingrese dato valido" data-success="Correcto">Año</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <select name="marca_id" class="validate">
                <option value="" required="required" disabled="disabled" selected="selected">Seleccione Marca</option>@foreach($marcas as $m)
                @var('id_marca',$m->id)
                <option value="{{$id_marca}}" required="required"> {{$m->marca}}</option>@endforeach
              </select>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <select name="categoria_id" class="validate">
                <option value="" required="required" disabled="disabled" selected="selected">Categorias</option>@foreach($categorias as $c)
                @var('id_categoria',$c->id)
                <option value="{{$id_categoria}}" required="required"> {{$c->categoria}}</option>@endforeach
              </select>
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