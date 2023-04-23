<!DOCTYPE html>
<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=big5">
		<title>Consultar</title>
		<link href="../filtro/estilo_filtro.css" rel="stylesheet">
                <link href="../boton_des.css" rel="stylesheet">
		<script src="../filtro/scrip_filtro.js"></script>
	</head>
        <body >
	  <div id="abc">
	     <div id="popupContact">
                <form action="../DdualV/evaluar_documento_despa.php" id="form1" method="POST" name="form">
		    <img id="close" src="../imagen/del1.png" onclick ="div_hide()">
			<h2>Consultar Desparasitaci&oacute;n</h2>
			<hr>			
			<select required name="sel" id ="sel" style="width:170px">
			  <option selected="selected" value="1">Codigo </option>
			  <option value="2">Primer Nombre </option>
                          <option value="3">Numero De Documento </option>
			</select>
			<input type="text" name="busc" required />
			<center><input class="submit" type="submit" name="buscar" value="Buscar"/></center>
                 </form>
               </div>
            </div>
            <button class="submit" onClick="div_show()">Consultar</button>
         </body>
</html>

		