<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="http://localhost/cablemas/public/locatario/imagen" method="POST">
{{ csrf_field() }}
	<input type="text" name="handleimagen">
	<input type="submit" value="enviar">
</form>
</body>
</html>