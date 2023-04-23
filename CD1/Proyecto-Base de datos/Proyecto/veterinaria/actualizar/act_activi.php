<?php
include('../include/conex.php');
$link= Conectarse();
$id=$_GET['id_reg'];
//echo "id del registro: ".$id;
$ac="SELECT agenda.fecha_fin,agenda.hora,agenda.motivo,estado_agenda.estado,mascota.nombre,mascota.id_mascota FROM agenda,mascota,estado_agenda WHERE agenda.id_mascota=mascota.id_mascota AND id_agenda='$id' AND 		agenda.estado_agenda=estado_agenda.estado_agenda";
$queryac=mysql_query($ac,$link);
$total=mysql_fetch_array($queryac);

if (isset($_POST['reg']))
{
//actualizion
$fecha= $_POST['fecha'];
$hora= $_POST['hora'];
$motivos= $_POST['motivos'];
$est= $_POST['est'];
//echo "fecha :".$fecha." hora: ".$hora." motivos: ".$motivos." estado: ".$est;
if($fecha=="" AND $hora="" AND $motivo="" AND $est="null")
{
	
}
else
{
$fin="UPDATE agenda SET fecha_fin = '$fecha', hora = '$hora', motivo = '$motivos', estado_agenda = '$est' WHERE
 id_mascota = '$total[5]' AND id_agenda='$id'";
$queryfin=mysql_query($fin,$link);
if(!$queryfin)
	{
		echo "erro al actualiar el registro";
	}
	else
	{
		echo '<script language="javascript">alert("Actualizado registro Completado");
		</script>';
		
		
	}
}

}
if (isset($_POST['consu']))
{
//cancelar la actualizacon	

						  echo '<script language="javascript">alert("Canclelar Actividad");
				   	var pagina="../reg_recor.php"
				   	location.href=pagina				
					</script>';
}

?>
<html>
<head>
<style>
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
.letras{
    font-family: "Arial";
    font-size: 20;
	
}

</style>
<link rel="stylesheet" href="../registro/bton.css" type="text/css" media="screen">
</head>
<center>
<form action="" name="est" method="POST" target="proceso">
<table border="0">
<tr><td colspan="4" class="jv"><label class="letras">Actualizar actividad</label></td></tr>
<tr><td>Paciente</td><td colspan="2"><input readonly="readonly"	type="text" <?php echo "value='".$total[4]."'";?>></td><td></td></tr>
<tr><td>Fecha: </td><td><input type="date"  name="fecha" <?php echo "value='".$total[0]."'";?> ></td><td>Hora</td><td>
<input type="time" name="hora" <?php echo "value='".$total[1]."'";?>></td></tr>
<tr><td colspan="">Estado:</td><td colspan="4"><select name="est" >
<option value="null">Seleccione</option>
      <?php
	   $sql="SELECT estado_agenda,estado FROM estado_agenda";
	   $result=mysql_query($sql,$link);
	   while($row2=mysql_fetch_array($result))
	   {
		   	  if ($row2[1]==$total[3]) {$ver='Selected="Selected"';}
			else
			{$ver='';}
	    echo '<option value="'.$row2[0].'" '.$ver.'>'.$row2[1].'</option>';
	   }
		?>
</select></td></tr>
<tr><td colspan="4">Actividad:</td></tr>
<tr><td colspan="4"><textarea  name="motivos" rows="3"  cols="66" ><?php echo "".$total[2];?></textarea></td></tr>
<tr><td colspan="4"><center><input type="submit" class="submit" id="submit" name="reg" value="Actualizar"> <input type="submit"  class="submit" name="consu" value="Canclelar"></form></center></td>
</tr>
</table>
</center>
</html>