<!DOCTYPE html>
<html>
<head>
<title>Consultar</title>
		<link href="../filtro/estilo_filtro.css" rel="stylesheet">
              <link href="../bton_filtro.css" rel="stylesheet">
		<script src="../filtro/scrip_filtro.js"></script>
</head>

<body >
<div id="abc">

<div id="popupContact">

<form action="buscar_documento.php" id="form1" method="post" name="form">
<img id="close" src="../imagen/del1.png" onclick ="div_hide()">
<h2>Consultar usuarios registrados</h2>
<hr>
								<select required name="sel" id ="sel" >
								  <option selected="selected" value="">seleccione</option>
								  <br><br><option selected="selected" value="1">Numero de Documento</option>
								  <option value="2">Primer Nombre </option>
                                                                <option value="3">Por Codigo</option>
							</select>
							<input type="text" name="busc" id="busc" required >
							<center><input type="submit" name="buscar" value="Buscar" class="submit"/></center>

</form>



</div>

</div>

<button class="submit" onClick="div_show()">consultar</button>

                   
</body>

</html>

		
