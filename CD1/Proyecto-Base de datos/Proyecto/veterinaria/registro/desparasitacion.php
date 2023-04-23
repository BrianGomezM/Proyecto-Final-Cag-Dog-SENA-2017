<?php
include ('../include/conex.php');
$link= Conectarse();
$fecha = date("Y-m-d");
$v="SELECT id_propietario,p_nombre,p_apellido FROM propietario WHERE id_roll='1'";
$vtt=mysql_query($v,$link);
$num="";
$paci[1]="Selecione...";
$paci[2]="";
$paci[3]="";
$paci[5]="";
$paci[6]="";
$paci[7]="";

if(isset($_POST['bus']))
{
	$num= $_POST['num'];
	//echo "numero de documento".$num;
	$q2=  mysql_query ('SELECT id_propietario,p_nombre,p_apellido,celular FROM propietario WHERE numero_tipo="'.$num.'"');
		if ($exite2 = mysql_fetch_object($q2))
		{
			$propietario="SELECT id_propietario,p_nombre,p_apellido,celular FROM propietario WHERE numero_tipo='$num'";
			$query_propi=mysql_query($propietario,$link);
			$propi=mysql_fetch_array($query_propi);
			$paciente="SELECT id_mascota,nombre FROM mascota WHERE id_propietario='$propi[0]'";
			$query_paciente=mysql_query($paciente,$link);
		}
	
	else
		{
				echo '<script language="javascript">alert("El numero es incorrecto o no existe");
				   	var pagina="../fondo.php"
				   	location.href=pagina				
					</script>';
		}
}
if(isset($_POST['gen']))
{
	$gen=$_POST['gen'];
	//echo "id mascota: ".$gen;
	$num= $_POST['num'];
	if ($gen=="null" and $gen==0)
	{
		
	}
	else
	{
		//datos de propi
		$propietario2="SELECT id_propietario FROM propietario WHERE numero_tipo='$num'";
		$query_propi2=mysql_query($propietario2,$link);
		$propi2=mysql_fetch_array($query_propi2);
		//echo "id propietario:".$propi2[0];
		/////////////////
		$paciente2="SELECT mascota.id_mascota,mascota.nombre,mascota.raza,especie.especie,propietario.id_propietario,propietario.p_nombre,
		propietario.p_apellido,propietario.celular FROM mascota,propietario,especie WHERE especie.id_especie= mascota.id_especie AND propietario.id_propietario='$propi2[0]' AND mascota.id_mascota='$gen'";
		$auxpaciente=mysql_query($paciente2,$link);
		$paci=mysql_fetch_array($auxpaciente);
	}
if(isset($_POST['reg']))
{
	$fecha = date("Y-m-d");
	$x=$_POST['num'];
	//echo "numero: ".$x;
	echo "<br>";
	$id_mascota=$_POST['ma'];
	$total="SELECT propietario.id_propietario,mascota.id_mascota FROM mascota,propietario WHERE propietario.numero_tipo='$x'
	AND mascota.nombre='$id_mascota'";
	$query_total=mysql_query($total,$link);
	$total=mysql_fetch_array($query_total);
	$motivos=$_POST['motivos'];
	$veterinario=$_POST['esp'];
	//echo "fecha: ".$fecha." id_mascota: ".$total['1']." id_propietario: ".$total['0']." motivos: ".$motivos." veterinario: ".$veterinario;
	$q2="INSERT INTO veterinaria.desparacitacion (fecha, id_mascota, actividad,id_propietario)
	VALUES ('$fecha','$total[1]','$motivos','$total[0]');";
$comprobar2= mysql_query($q2,$link);
	if(!$comprobar2)
	{
		echo '<script language="javascript">alert("Error al registrar desparacitacion");
		</script>';
		
		header('../fondo.php');
	}
	else
	{
		echo '<script language="javascript">alert("Registro Completado");
		</script>';
		
		header('../fondo.php');
	}
}
	
	
}
?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
<link rel="stylesheet" type="text/css" href="bton.css" />
<style>
.letras{
     font-family: "Arial";
    font-size: 17;
	
}
.jv{
 font-family: "Arial";
    font-size: 17;
  color: #ffffff;
  background-color: #238276;

}
table {     
font-family: "Arial";
    font-size: 17;
     margin: 45px;     widtd: 480px; text-align: left;    border-collapse: collapse; }

td {   padding: 8px;     background: #b9c9fe;
    border-top: 4px solid #aabcfe;    border-bottom: 1px solid #fff; color: #039; }

td {    padding: 8px;     background: #e8edff;     border-bottom: 1px solid #fff;
    color: #669;    border-top: 1px solid transparent; }

tr:hover td { background: #d0dafd; color: #339; }
</style>
</head>
	<body>
	<center>
	<table border="0">
		<form id="gen" name="gen" action="" method="POST">
		<tr>
		<td colspan="2" class="jv">&nbsp;Fecha:<input type="date" name="fecha"  title="fecha" 
		<?php echo "value='".$fecha."'";?>></td>
		<td colspan="4" class="jv"><label class="letras">Desparasitacion</label></td>
		</tr>
		<tr>
		<td colspan="2" ><br>&nbsp;Numero de documento: </td>
		<td><br> &nbsp; Paciente: </td>
		<td><br> &nbsp; Raza:</td>
		<td><br> &nbsp; Especie: </td>
		</tr>
		<tr>
		<td><input type="number" name="num" required <?php echo "value='".$num."'";?> ></td>
		<td align="center" ><input type="submit" name="bus" value="Buscar"></td>
		<td><select name="gen" id="gen" onchange="document.gen.submit();">
		<option name="0" value="null"><?php echo "".$paci[1];?></option>
		<?php
			//mostrar la mascota del propietaraio
			while($fila=mysql_fetch_row($query_paciente)){
			echo "<option  value='".$fila['0']."' $tipo id='".$fila['0']."'  name='".$fila['0']."'>".$fila['1']."</option>";
			}					
	    ?>
		</td></select>
		<input type="hidden"  name="ma"  <?php echo "value='".$paci['1']."'";?>>
		<td><input type="text" name="raza" id="raza" <?php echo "value='".$paci['2']."'";?>  readonly="readonly"></td>
		<td><input type="text" name="especie" id="especie" <?php echo "value='".$paci['3']."'";?>  readonly="readonly"></td>
		</tr>
		<tr>
		<td><br>&nbsp; Propietario:</td>
		<td><br>&nbsp; Celular: </td>
		<td colspan=""><br>&nbsp; Veterinario: </td>
		<td colspan="2"><br></td>
		</tr>
		<tr>
		
		
		
		
		<td><input type="text" name="propie" 
		<?php echo "value='".$paci['5'].' '.$paci['6']."'";?> readonly="readonly" title="propietario" ></td>
		<td><input type="text" name="cel"
		<?php echo "value='".$paci['7']."'";?>readonly="readonly" title="celular" ></td>
		<td colspan="3"><select name="esp" id="esp" onchange="document.esp.submit();" required>
		<option name="0" id="0" value="0">Selecione...</option>
		<?php
		//mostrar todos los veterinarios
		while($fila6=mysql_fetch_row($vtt)){
		echo "<option value='".$fila6['0']."' $tipo id='".$fila6['0']."'  name='".$fila6['0']."'>".$fila6['1']." ".$fila6['2']."</option>";
		}					
		?>				
		</td></select> 
		</tr>
		<tr>
		<td colspan="6"><br>&nbsp; Actividad:</td>
		<tr>
		<td colspan="6">
		<textarea name="motivos"  name="motivos" class=estilotextarea id="motivos" rows="1" cols="98"></textarea>
		</td></tr></tr>
		<tr>
		<td colspan="2"></td>
		<td><input type="submit"  name="reg" value="Registrar" class="submit"></td>
		</form><form id="" name="" action="../consulta/cons_despa.php" method="POST" target="proceso">
		<br><td><input type="submit" class="submit" value="Consultar"></form></td><td></td></tr>
		</table>
	</center>
	</body>
</html>