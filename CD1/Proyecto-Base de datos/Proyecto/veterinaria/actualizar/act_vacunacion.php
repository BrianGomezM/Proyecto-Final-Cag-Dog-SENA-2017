<?php
include ('../include/conex.php');
$link= Conectarse();
$id=$_GET['id_reg'];
//echo "id del registro ".$id;
$despara="SELECT vacunacion.id_vacuna,vacunacion.fecha,vacunacion.actividad,mascota.nombre,mascota.raza,especie.especie,
propietario.p_nombre,propietario.p_apellido,Propietario.celular,propietario.numero_tipo FROM vacunacion,mascota,especie,propietario WHERE vacunacion.id_mascota=mascota.id_mascota
AND mascota.id_especie=especie.id_especie AND mascota.id_propietario=propietario.id_propietario AND vacunacion.id_vacuna='$id'";
$query_despara=mysql_query($despara,$link);
$paci=mysql_fetch_array($query_despara);
$v="SELECT id_propietario,p_nombre,p_apellido FROM propietario WHERE id_roll='1'";
$vtt=mysql_query($v,$link);

if(isset($_POST['act']))
{
	$motivos=$_POST['motivos'];
	$esp=$_POST['esp'];
	$fecha=$_POST['fecha'];
	$up="UPDATE vacunacion SET fecha='$fecha',actividad='$motivos',id_propietario='$esp' WHERE id_vacuna='$id'";
	$comprobar2=mysql_query($up,$link);
	if(!$comprobar2)
	{
		//echo "erro al registrar";
	}
	else
	{
		echo '<script language="javascript">alert("Actualizado la vacunacion");
	     var pagina="../fondo.php"
	     location.href=pagina				
	     </script>';
		
		
	}
	
}
?>
<html>
<head>
<style>
.letras{
    font-family: "Arial";
    font-size: 20;
	
}
.jv{

  color: #E6E6E6;
  background-color: #238276;

}
table {     font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 12px;    margin: 45px;     width: 480px; text-align: left;    border-collapse: collapse; }

th {     font-size: 13px;     font-weight: normal;     padding: 8px;     background: #b9c9fe;
    border-top: 4px solid #aabcfe;    border-bottom: 1px solid #fff; color: #039; }

td {    padding: 8px;     background: #e8edff;     border-bottom: 1px solid #fff;
    color: #669;    border-top: 1px solid transparent; }

tr:hover td { background: #d0dafd; color: #339; }
</style>
</head>
<body>
	<center>
	<table border="0">
		<form id="esp" name="esp" action="" method="POST">
		<tr>
		<td colspan="2" class="jv">&nbsp;Fecha:<input type="date" name="fecha"  title="fecha" 
		<?php echo "value='".$paci['1']."'";?>></td>
		<td colspan="4" class="jv"><label class="letras">Desparasitacion</label></td>
		</tr>
		<tr>
		<td colspan="" ><br>&nbsp;Numero de documento: </td>
		<td><br> &nbsp; Paciente: </td>
		<td><br> &nbsp; Raza:</td>
		<td><br> &nbsp; Especie: </td>
		</tr>
		<tr>
		<td><input type="number" name="num"  <?php echo "value='".$paci['9']."'";?>readonly="readonly" ></td>
		<td><input type="text" name="mascota"  <?php echo "value='".$paci['3']."'";?> readonly="readonly"></td>
			<td><input type="text" name="raza" id="raza" <?php echo "value='".$paci['4']."'";?>  readonly="readonly"></td>
		<td><input type="text" name="especie" id="especie" <?php echo "value='".$paci['5']."'";?>  readonly="readonly"></td>
		</tr>
		<tr>
		<td><br>&nbsp; Propietario:</td>
		<td><br>&nbsp; Celular: </td>
		<td colspan=""><br>&nbsp; Veterinario: </td>
		<td colspan="2"><br></td>
		</tr>
		<tr>
		<td><input type="text" name="propie" 
		<?php echo "value='".$paci['7'].' '.$paci['6']."'";?> readonly="readonly" title="propietario" ></td>
		<td><input type="text" name="cel"
		<?php echo "value='".$paci['8']."'";?>readonly="readonly" title="celular" ></td>
		<td colspan="3"><select name="esp" id="esp"  >
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
		<textarea   name="motivos" class=estilotextarea id="motivos" rows="1" cols="98"><?php echo"".$paci['2'];?></textarea>
		</td></tr></tr>
		<tr>
		<td></td>
		<td></td>
		<td><input type="submit"  name="act" value="Actualizar"></td><td>
		</form></tr>
		</table>
</body>
</html>