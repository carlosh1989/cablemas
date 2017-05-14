
@extends('layouts.locatario')
@section('content')
{{ csrf_field() }}
<script type="text/javascript" src="https://static.filestackapi.com/v3/filestack.js"></script>
<script type="text/javascript">
  var client = filestack.init('AcNYN21MkSPGpArAJAEbDz');
  function showPicker() {
  client.pick({
  accept: 'image/*',
  }).then(function(result) {
  console.log(JSON.stringify(result.filesUploaded[0].url));
  var _token = $('input[name="_token"]').val();
  urlimagen = JSON.stringify(result.filesUploaded[0].url);
  $.ajax({
  url     :  "{{url('locatario/imagen')}}",
  type    :  'post',
  dataType:  'json',
  data    :   {urlimagen: urlimagen, _token: _token},
  success :   function (data) {
  alert(data.mensaje);
  console.log(JSON.stringify(data));
  },
  error   :   function() {
  alert('error');
  }
  });
  })
  }
</script>
<div class="container"><br/>
  <div class="row">
    <div class="col l10 offset-l1 s12 m12">
      <div class="card-panel z-depth-4">
        <div class="row">
          <div class="col l12 s12">
            <h5 class="grey-text center animated pulse titulo">Ingresar Imagen</h5>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input type="button" value="Buscar Imagen" onclick="showPicker()" class="btn red"/>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>@endsection