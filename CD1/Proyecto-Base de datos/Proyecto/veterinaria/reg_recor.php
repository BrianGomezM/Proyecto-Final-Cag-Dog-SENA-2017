<?php
include('include/conex.php');
$link= Conectarse();
$numero="";
$dp[1]="";
$dp[2]="";

//////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['consu']))
{
	header('Location:consulta/pag_actividades/index.php');
}
if (isset($_POST['buscar_num']))
{
	//ECHO "PULSO EL BOTON";
	$numero=0;
	$numero= $_POST['nd'];
	$q2=  mysql_query ('SELECT id_propietario,p_nombre,p_apellido FROM propietario WHERE numero_tipo="'.$numero.'"');
		if ($exite2 = mysql_fetch_object($q2))
		{
			$datos="SELECT id_propietario,p_nombre,p_apellido FROM propietario WHERE numero_tipo='$numero'";
			$confirmar=mysql_query($datos,$link);
			$dp=mysql_fetch_array($confirmar);
			$cons2="SELECT id_mascota,nombre FROM mascota WHERE id_propietario='$dp[0]'";
			$query= mysql_query($cons2,$link);
		
		}
		else
		{
				echo '<script language="javascript">alert("El numero es incorrecto o no existe");
				   	var pagina="fondo.php"
				   	location.href=pagina				
					</script>';
		}
		
	
}
if (isset($_POST['reg']))
{
	$numero=0;
	$numero= $_POST['nd'];
	//proceso de paciente y propietario
	$cons3="SELECT id_propietario,p_nombre,p_apellido FROM propietario WHERE numero_tipo='$numero'";
	$confirmar3=mysql_query($cons3,$link);
	if(!$confirmar3)
	{
		
	
		
	}
	else
	{
		$cons3="SELECT id_mascota,nombre FROM mascota WHERE id_propietario='$dp[0]'";
		$query3= mysql_query($cons3,$link);
	}
	//
	$fecha = date("Y-m-d");
	$mascota="";
	$mascota= $_POST['mas'];
	$hra="";
	$hra= $_POST['hora'];
	$fh="";
	$fh= $_POST['fecha'];
	$mt="";
	$mt= $_POST['motivos'];
	if($mascota=="null")
	{
		
	}
	else
	{
	//echo "mascota: ".$mascota." //hora: ".$hra." //fecha: ".$fh." //motivos: ".$mt." //fecha actual: ".$fecha;
	header('Location:save_recordatorio.php?fecha='.$fh.'&hora='.$hra.'&mas='.$mascota.'&mot='.$mt.'&act='.$fecha);
	
	}
}


?>
<html>
<head>
<link rel="stylesheet" href="registro/bton.css" type="text/css" media="screen">
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
<center>
<form action="" method="POST" target="proceso">
<table>
<tr><td colspan="4" class="jv"><label class="letras">Actividades</label></td></tr>
<tr><td>
Numero de documento:</td><td><input type="number" name="nd" placeholder="Numero de documento" <?php echo "value='".$numero."'";?>></td>
<td colspan="2"><input type="submit"class="submit" name="buscar_num" value="Buscar"></td></tr><tr>
<td>Nombre del propietario: </td><td><input readonly="readonly"	type="text" <?php echo "value='".$dp[1]." ".$dp[2]."'";?>></td><td>
Mascota:</td><td> <select name="mas" id="mas" onchange="document.mas.submit();">
	<option  value="null">Selecione...</option>
	<?php
	//mostrar los tipo de documento
	while($row=mysql_fetch_row($query)){
	echo "<option  value='".$row['0']."'>".$row['1']."</option>";
	}					
   ?>
</select></td></tr>
<tr><td>Fecha: </td><td><input type="date" name="fecha" ></td><td>Hora</td><td>
<input type="time" name="hora"></td></tr>
<tr><td colspan="4">Actividad:</td></tr>
<tr><td colspan="4"><textarea  name="motivos" placeholder="Actividad a recordar" rows="3" cols="66" value="null"></textarea></td></tr>
<tr><td colspan="2"><center><input type="submit" class="submit" name="reg" value="Registrar"></td><td colspan="2"> <input type="submit" class="submit" name="consu" value="Consultar"></form></center></td>
</tr></table>

</center>
</body>
</html>