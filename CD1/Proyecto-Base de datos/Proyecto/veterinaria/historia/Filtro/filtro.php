<!DOCTYPE html>
<html>
	<head>
		<title>Consultar</title>
		<link href="../Estilos Css/estilo_filtro.css" rel="stylesheet">
		<script src="../Java Scrip/scrip_filtro.js"></script>
	</head>

		<body >
			<div id="abc">
				<div id="popupContact">

					<form action="../consultas_bd/evaluar_documento.php" id="form1" method="POST" name="form">
						<img id="close" src="../imagenes/images.png" onclick ="div_hide()">
						<h2>Consultar Historia Clinica</h2>
						<hr>			
					
							<select required name="sel" id ="sel" >
								  <option selected="selected" value="1">Codigo</option>
								  <option value="2">Primer Nombre </option>
								  <option value="3">Numero De Documento</option>
								  
							</select>
							<input type="text" name="busc"  >
						
							 <input type="submit" name="buscar" value="Buscar" id="submit" required>	
					</form>
				</div>
			</div>
			
				<button id="submit1" onclick="div_show()">Consultar</button>
		</body>
</html>