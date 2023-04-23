<?php
include ('../include/conex.php');
$link= Conectarse();
$slq="SELECT id_tipo_docu, tipo FROM tipo_document";
$resul1=mysql_query($slq,$link);
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/form.css" />
</head>
<body>
<center>
<div class="title"><h2>Registro de Propietario</h2></div>
<table border="0">
<form   id="reg_pro" name="reg_pro" action="proce_pro.php" method="POST" target="proceso">
<tr><td>Primer nombre: </td><td><input type="text" placeholder="Primer Nombre" name="pn" required></td></tr>
<tr><td>Segundo nombre: </td><td><input type="text" placeholder="Segundo Nombre" name="sn"></td></tr>
<tr><td>Primer apellido: </td><td><input type="text"  placeholder="Primer apellido" name="pa" required></td></tr>
<tr><td>Segundo apellido: </td><td><input type="text"   placeholder="Segundo apellido"name="sp"></td></tr>
<tr><td>Tipo de documento: </td><td><select name="docu" id="docu" onchange="document.docu.submit();">
	<option name="0" value="null">Selecione...</option>
	<?php
	//mostrar los tipo de documento
	while($row=mysql_fetch_row($resul1)){
	echo "<option  value='".$row['0']."' $tipo id='".$row['0']."'  name='".$row['0']."'>".$row['1']."</option>";
	}					
   ?>				
</select></td></tr>
<tr><td>Numero de documento: </td><td><input type="number" placeholder="numero de documento" name="num" required></td></tr>
<tr><td>Clave: </td><td><input type="password" name="pass" required></td></tr>
<tr><td>Celular: </td><td><input type="number" placeholder="Ceular" name="cel" required></td></tr>
<tr><td>Direccion: </td><td><input type="text" name="direc" placeholder="Direccion" required></td></tr>
<tr><td>Email: </td><td><input type="email" name="msn" placeholder="Correo electronico" required></td></tr>
<tr><td></td><td><input type="submit" class="bt" name="next" value="registrar"></td></tr>
</form>
<form id="cons_pro" name="cons_pro"  action="../consulta/cons_pro.php" method="POST" target="proceso">
<tr><td></td><td><input type="submit" class="bt" name="next2" value="consultar"></td></tr>
</fieldset>
</form>
</table>
</center>
</body>
</html>