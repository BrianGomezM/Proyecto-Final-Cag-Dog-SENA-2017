<html>
<head>
<title></title>
<link href="../filtro/estilo_filtro.css" rel="stylesheet">
<script src="../filtro/scrip_filtro.js"></script>
</head>

<body >
<div id="abc">

<div id="popupContact">
	
<form action="buscar_estado.php" id="form1" method="post" name="form">
<img id="close" src="../imagen/del1.png" onclick ="div_hide()">
<h2>Consultar estado</h2>
<hr>		
			ingrese estado:<input type="text" name="estado" id="estado" title="ingrese documento" >
			<input type="submit" name="buscar" value="Buscar"  id="submit"/>

		


				
				


</form>


</div>
<!-- Popup Div Ends Here -->
</div>
<!-- Display Popup Button -->
<button id="submit1" onClick="div_show()">Consultar</button>

                   
</body>
<!-- Body Ends Here -->
</html>