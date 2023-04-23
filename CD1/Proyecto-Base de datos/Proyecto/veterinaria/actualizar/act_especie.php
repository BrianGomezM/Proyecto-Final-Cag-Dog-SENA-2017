<?php
include('../include/conex.php');
$link= Conectarse();
$id=$_GET['id_reg'];
//echo " id de registro: ".$id;
$slq="SELECT especie FROM especie WHERE id_especie='$id'";
$query= mysql_query($slq,$link);
$datos=mysql_fetch_row($query);
?>
<html>
<head>
<link rel="stylesheet" href="default.css" TYPE="text/css" MEDIA="screen">
<link rel="stylesheet" href="../registro/bton.css" type="text/css" media="screen">
</head>
<body>
<center>
	<h1> </h1>
	<table border="0">
	<form id="reg" action="proce_especie.php" method="POST">
	<input type="Hidden" name="id" id="id" <?PHP echo " value='".$id."'";?>>
	<tr><td class="jv" colspan="2"><?php echo "Actualizar la especie ".$datos[0]; ?></td></tr>
	<tr>
	<td>Ingrese especie: </td>
	<td><input type="text" name="nom" <?PHP echo " value='".$datos['0']."'";?>required></td>
	</tr>
	<tr>
	<td></td>
	<td>
	<input type="submit" class="submit" value="Actualizar"></form>
	</td>
	</tr>
	</table>
</center>
</body>
</html>
	