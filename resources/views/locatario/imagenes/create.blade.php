
@extends('layouts.locatario')
@section('content')
<script type="text/javascript" src="https://static.filestackapi.com/v3/filestack.js"></script>
<script type="text/javascript">
  var client = filestack.init('AcNYN21MkSPGpArAJAEbDz');
  function showPicker() {
  client.pick({
  }).then(function(result) {
  console.log(JSON.stringify(result.filesUploaded))
  });
  }
  
</script>
<input type="button" value="Upload" onclick="showPicker()"/>@endsection