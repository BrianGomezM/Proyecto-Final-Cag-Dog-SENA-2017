<?php
header("Content-Type: text/html;charset=utf-8");
include('../include/conex.php');
$link= Conectarse();
$id=$_GET['id_reg'];
//--------------------------datos mascota-------------
$slq="SELECT mascota.nombre,mascota.peso_kg,estado.estado,propietario.p_nombre,propietario.p_apellido,estado.id_estado,propietario.id_propietario 
FROM mascota,propietario,estado WHERE mascota.id_propietario=propietario.id_propietario AND mascota.id_estado=estado.id_estado AND
 mascota.id_mascota='$id'";
$query=mysql_query($slq,$link);
$datos=mysql_fetch_row($query);
//-------------------------------------------------------------
//echo "id del registro: ".$id;
//----------------------------estadoa------------------------
$consul3= "SELECT id_estado,estado FROM estado";
$resul3= mysql_query($consul3,$link);

//----------------------------------------------------------

//-----------------------------propietario--------------------------
$consul4="SELECT id_propietario,p_nombre,p_apellido FROM propietario";
$resul4= mysql_query($consul4,$link);
//-------------------------------------------------------------------

?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link rel="stylesheet" href="default.css" TYPE="text/css" MEDIA="screen">
<link rel="stylesheet" type="text/css" href="../registro/bton.css" />
</head>
<body><center>
	<h1> </h1>
	<table border="0">
	<form id="reg" action="proce_mascota.php" method="POST">
	<input type="Hidden" name="id" id="id" <?PHP echo " value='".$id."'";?>>
	<tr><td colspan="2" class="jv"><?php echo "Actualizar los datos de ".$datos[0]; ?></td></tr>
	<tr>
	<td>Nombre: </td>
	<td><input type="text" name="nom" <?PHP echo " value='".$datos['0']."'";?>required></td>
	</tr>
	<tr>
	<td>Peso en kg: </td>
	<td><input type="number" name="peso" <?PHP echo " value='".$datos['1']."'";?> required></td>
	</tr>
   	<tr><td><p class="compañia">Estado:</p> </td><td><select name="est" id="est" onchange="document.est.submit();">
	<option value="0">Seleccione</option>
      <?php
	   $sql="SELECT estado FROM estado";
	   $result=mysql_query($sql,$link);
	   while($row2=mysql_fetch_array($result))
	   {
		   	  if ($row2[0]==$datos[2]) {$ver='Selected="Selected"';}
			else
			{$ver='';}
	    echo '<option value="'.$row2[0].'" '.$ver.'>'.$row2[0].'</option>';
	   }
		?>
	</tr></td></select>
	<tr><td><p class="compañia">Propietario:</p> </td><td><select name="pro" id="pro" onchange="document.pro.submit();">
	<option value="0">Seleccione</option>
      <?php
	   $sql="SELECT p_nombre,p_apellido FROM propietario";
	   $result=mysql_query($sql,$link);
	   while($row2=mysql_fetch_array($result))
	   {
		   	  if ($row2[0]==$datos[3]) {$ver='Selected="Selected"';}
			else
			{$ver='';}
	    echo '<option value="'.$row2[0].'" '.$ver.'>'.$row2[0].' '.$row2[1].'</option>';
	   }
		?>
		
	</tr></td></select>
	<tr>
	<td colspan="3"><center>
	<input type="submit" class="submit" value="Actualizar"></form>
	</center>
	</td>
	</tr>
	</table>
</body></center>
</html>