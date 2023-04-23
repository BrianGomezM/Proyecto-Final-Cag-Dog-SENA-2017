<?php
include('../include/conex.php');
$link= Conectarse();
$id=$_POST['dp'];
$idm=$_POST['masc'];
//echo "mascota: ".$idm;
//--------------------------datos mascota-------------
$slq="SELECT mascota.nombre,mascota.peso_kg,estado.estado,propietario.p_nombre,propietario.p_apellido,estado.estado,propietario.id_propietario 
FROM mascota,propietario,estado WHERE mascota.id_propietario=propietario.id_propietario AND mascota.id_estado=estado.id_estado AND mascota.id_propietario='$id' AND mascota.id_mascota='$idm'";
$query=mysql_query($slq,$link);
$datos=mysql_fetch_row($query);
//-------------------------------------------------------------


?>
<html>
<body><center>
	<h1><?php echo "Datos de ".$datos[0]; ?> </h1>
	<table border="">
	<form id="reg" action="proce_mascota.php" method="POST">
	<input type="Hidden" name="id" id="id" <?PHP echo " value='".$id."'";?>>
	<tr>
	<td>Nombre: </td>
	<td><input  readonly="readonly" type="text" name="nom" <?PHP echo " value='".$datos['0']."'";?>required></td>
	</tr>
	<tr>
	<td>Peso en kg: </td>
	<td><input  readonly="readonly" type="number" name="peso" <?PHP echo " value='".$datos['1']."'";?> required></td>
	</tr>
   	<tr><td><p class="compañia">Estado:</p> </td><td><input  readonly="readonly" type="text" name="peso" <?PHP echo " value='".$datos['5']."'";?> required></td></tr>
	<tr><td><p class="compañia">Propietario:</p> </td><td><input  readonly="readonly" type="text" name="peso" <?PHP echo " value='".$datos['3']." ".$datos['4']."'";?> required></td></tr>
	<tr>
	<td colspan="3"><center>
	</form>
	</center>
	</td>
	</tr>
	</table>
</body></center>
</html>