<html>
<head>
<title></title>
<link href="../filtro/estilo_filtro.css" rel="stylesheet">
<script src="../filtro/scrip_filtro.js"></script>
<link href="../bton.css" rel="stylesheet">
</head>

<body >
<div id="abc">

<div id="popupContact">
	

<form action="buscar_tipod.php" id="form1" method="post" name="form">
<img id="close" src="../imagen/del1.png" onclick ="div_hide()">
<h2>Consultar Usuarios Registrados</h2>
<hr>
								<select required name="sel" id ="sel" >
								  <option selected="selected" value="">Seleccione</option>
								  <br><br><option selected="selected" value="1">Todo</option>
								  <option value="2">Tipo documento </option>
							</select>
							<input type="text" name="busc" id="busc">
							<center><input type="submit" name="buscar" value="Buscar" class="submit"/></center>

</form>

				
				


</form>


</div>
<!-- Popup Div Ends Here -->
</div>
<!-- Display Popup Button -->
<button class="submit" onClick="div_show()">Consultar</button>

                   
</body>
<!-- Body Ends Here -->
</html>