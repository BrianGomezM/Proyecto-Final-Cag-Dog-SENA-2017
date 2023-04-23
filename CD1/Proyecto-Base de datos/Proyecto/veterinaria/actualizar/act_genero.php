<?php
include('../include/conex.php');
$link= Conectarse();
$id=$_GET['id_reg'];
//echo " id de registro: ".$id;
$slq="SELECT genero FROM genero WHERE id_genero='$id'";
$query= mysql_query($slq,$link);
$datos=mysql_fetch_row($query);
?>
<html>
<head>
<link rel="stylesheet" href="default.css" TYPE="text/css" MEDIA="screen">

</head>
<body>
<center>
	
	<table border="">
	<form id="reg" action="proce_genero.php" method="POST">
	<input type="Hidden" name="id" id="id" <?PHP echo " value='".$id."'";?>>
	<tr><td class="jv" colspan="2"><?php echo "Actualizar el genero ".$datos[0]; ?></td></tr>
	<tr>
	<td>Ingrese genero: </td>
	<td><input type="text" name="nom" <?PHP echo " value='".$datos['0']."'";?> required></td>
	</tr>
	<tr>
	<td></td>
	<td>
	<input type="submit" value="Actualizar"></form>
	</td>
	</tr>
	</table>
</center>
</body>
</html>
	