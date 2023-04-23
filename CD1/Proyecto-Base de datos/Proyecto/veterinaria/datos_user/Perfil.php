<?php
include('../include/conex.php');
$link= Conectarse();
$id=$_GET['user'];
//echo "id del registro: ".$id;

//--------------------------datos propietario-------------
$slq="SELECT propietario.id_propietario,propietario.p_nombre,
propietario.s_nombre,propietario.p_apellido,propietario.s_apellido,propietario.numero_tipo,
propietario.celular,propietario.direccion,propietario.email,tipo_document.tipo,roll.roll,est_propi.estado,est_propi.id_est_propi,
roll.id_roll,tipo_document.id_tipo_docu FROM propietario,tipo_document,roll,est_propi WHERE  propietario.id_tipo_docu=tipo_document.id_tipo_docu AND propietario.id_roll=roll.id_roll AND propietario.id_propietario='$id' AND est_propi.id_est_propi=propietario.id_est_propi";
$query=mysql_query($slq,$link);
$datos=mysql_fetch_row($query);
//-------------------------------------------------------------

//----------------------------tipo documento------------------------
$consul3= "SELECT id_tipo_docu, tipo FROM tipo_document";
$resul3= mysql_query($consul3,$link);

//----------------------------------------------------------
//----------------------------roll------------------------
$consul4= "SELECT id_roll, roll FROM roll";
$resul4= mysql_query($consul4,$link);

//----------------------------------------------------------
//----------------------------estado------------------------
$consul5= "SELECT id_est_propi, estado FROM est_propi";
$resul5= mysql_query($consul5,$link);

//----------------------------------------------------------
?>
<html>
<head>
<meta charset="UTF-8">
</head>
<body><center>
	<h1><?php echo "Actualizar los datos de ".$datos[1]." ".$datos[3]; ?> </h1>
	<table border="">
	<form id="reg" action="proce_propi.php" method="POST" target="proceso">
	<input type="Hidden" name="id" id="id" <?PHP echo " value='".$id."'";?>>
	<tr>
	<td>Primer Nombre: </td>
	<td><input type="text" name="p_n" <?PHP echo " value='".$datos['1']."'";?>required></td>
	</tr>
	<tr>
	<td>Segundo Nombre: </td>
	<td><input type="text" name="s_n" <?PHP echo " value='".$datos['2']."'";?> ></td>
	</tr>
	<tr>
	<td>Primer Apellido: </td>
	<td><input type="text" name="p_a" <?PHP echo " value='".$datos['3']."'";?> required></td>
	</tr>
	<tr>
	<td>Segundo Apellido: </td>
	<td><input type="text" name="s_a" <?PHP echo " value='".$datos['4']."'";?> ></td>
	</tr>
   	<tr><td><p class="compañia">Tipo de documento:</p> </td><td><select name="tipo" id="tipo" onchange="document.tipo.submit();">
	<option name="0" id="0" <?PHP echo " value='".$datos['14']."'";?>><?PHP echo "".$datos['9'];?></option>
	<?php
		//tipos de documento
	 while($fila=mysql_fetch_row($resul3)){
	 echo "<option value='".$fila['0']."' $tipo id='".$fila['0']."'  name='".$fila['0']."'>".$fila['1']."</option>";
	 }					
	?>				
	</tr></td></select>
	<tr>
	<td>Numero de documento: </td>
	<td><input type="number" name="num_d" <?PHP echo " value='".$datos['5']."'";?> required></td>
	</tr>
	<tr>
	<td>Celular: </td>
	<td><input type="number" name="cel" <?PHP echo " value='".$datos['6']."'";?> required></td>
	</tr>
	<tr>
	<td>Direccion: </td>
	<td><input type="text" name="direccion" <?PHP echo " value='".$datos['7']."'";?> required></td>
	</tr>
	<tr>
	<td>Correo: </td>
	<td><input type="email" name="msn" <?PHP echo " value='".$datos['8']."'";?> required></td>
	</tr>
	<tr><td><p class="compañia">Roll:</p> </td><td><select name="roll" id="roll" onchange="document.roll.submit();">
	<option name="0" id="0" <?PHP echo " value='".$datos['13']."'";?>><?PHP echo "".$datos['10'];?></option>
	<?php
		//tipos de roll
	 while($fila=mysql_fetch_row($resul4)){
	 echo "<option value='".$fila['0']."' $tipo id='".$fila['0']."'  name='".$fila['0']."'>".$fila['1']."</option>";
	 }					
	?>				
	</tr></td></select>
	<tr><td><p class="compañia">Estado:</p> </td><td><select name="est" id="est" onchange="document.est.submit();">
	<option <?PHP echo " value='".$datos['12']."'";?>><?PHP echo "".$datos['11'];?></option>
	<?php
		//tipos de estado
	 while($fila=mysql_fetch_row($resul5)){
	 echo "<option value='".$fila['0']."' $tipo id='".$fila['0']."'  name='".$fila['0']."'>".$fila['1']."</option>";
	 }					
	?>				
	</tr></td></select>
	<tr>
	<td colspan="3"><center>
	<input type="submit" value="Actualizar"></form>
	</center>
	</td>
	</tr>
	</table>
</body></center>
</html>