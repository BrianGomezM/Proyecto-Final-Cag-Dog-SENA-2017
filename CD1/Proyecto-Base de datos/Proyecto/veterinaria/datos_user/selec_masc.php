<?php
include('../include/conex.php');
$link= Conectarse();
$id=$_GET['user'];
$id=base64_decode($id);
$datos[0]="";
$datos[1]="";
$datos[2]="";
$datos[3]="";
$datos[4]="";
$datos[5]="";
$datos[6]="";
$sql="SELECT `id_mascota`,`nombre`, `id_propietario` FROM `mascota` WHERE `id_propietario`='$id'";
$query1=mysql_query($sql,$link);
if(isset($_POST['masc']))
{
	$idm=$_POST['masc'];
//echo "mascota: ".$idm;
//--------------------------datos mascota-------------
$slq="SELECT mascota.nombre,mascota.peso_kg,estado.estado,propietario.p_nombre,propietario.p_apellido,estado.estado,propietario.id_propietario 
FROM mascota,propietario,estado WHERE mascota.id_propietario=propietario.id_propietario AND mascota.id_estado=estado.id_estado AND mascota.id_propietario='$id' AND mascota.id_mascota='$idm'";
$query=mysql_query($slq,$link);
$datos=mysql_fetch_row($query);
//-------------------------------------------------------------
	
}
?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
<link rel="stylesheet" href="default.css" TYPE="text/css" MEDIA="screen">
</head>
<body>
<center>
<table>
<tr><td class="jv" colspan="3">Mis mascotas</td></tr>
	<form id="masc" name="masc" action="" method="POST" target="proceso">
	<tr><td>Elija la mascota que quieras:</td><td><select name="masc" id="masc" onchange="document.masc.submit();">
						<option name="0" value="null">Selecione...</option>
						<?php
							//mostrar la mascota del propietaraio
							while($fila=mysql_fetch_row($query1)){
							echo "<option  value='".$fila['0']."' $tipo id='".$fila['0']."'  name='".$fila['0']."'>".$fila['1']."</option>";
							}					
					    ?>				
					</td></select>
					<input type="hidden"  name="dp" id="dp" <?php echo "value='".$id."'";?>>
					<input type="submit" value="" style="display:none"></form>
	</tr>
	<tr><td colspan="3" class="jv"><center><?php echo "Datos de la mascota ".$datos[0]; ?></center></td></tr>
	<form id="reg" action="proce_mascota.php" method="POST">
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
</center>
</body>
</html>