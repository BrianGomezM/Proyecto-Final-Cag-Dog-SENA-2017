<!DOCTYPE html>
<html>
<head>
<title>Consultar</title>
<link href="../js/estilo_filtro.css" rel="stylesheet">
<script src="../js/scrip_filtro.js"></script>
</head>

<body >
<div id="abc">

<div id="popupContact">
<form action="#" id="form1" method="POST" name="form">
<img id="close" src="../imagenes/images.png" onclick ="div_hide()">
<h2>Consultar Usuario</h2>
<hr>			
				Numero Documento: <input type="number" name="documento" value><input type="submit" name="Consultar" value="Buscar"/>
				Paciente:	<select name="Paciente"><option>perro1</option><option>perro2</option><option>perro3</option></select>
				Fecha Historia Clinica<select name="Paciente"><option>perro1</option><option>perro2</option><option>perro3</option></select>
				<center><a href="javascript:%20check_empty()" id="submit">Consultar</a></center>
				


</form>
</div>
<!-- Popup Div Ends Here -->
</div>
<!-- Display Popup Button -->
<button id="submit1" onclick="div_show()">Consultar</button>
</body>
<!-- Body Ends Here -->
</html>