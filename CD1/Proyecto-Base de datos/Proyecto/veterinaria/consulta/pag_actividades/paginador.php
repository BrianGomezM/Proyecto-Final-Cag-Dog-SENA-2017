<html>
<center>
<?php
include ('../../include/conex.php');
$con= Conectarse();
$link= Conectarse();
//buscador
$consul4="SELECT estado_agenda,estado FROM estado_agenda";
$query_paciente= mysql_query($consul4,$link);
if(isset($_POST['tiempo']))
{
	$tiempo= $_POST['tiempo'];
	//echo "opcion: ".$tiempo;
	$RegistrosAMostrar=5;
			if(isset($_GET['pag']))
			{
				$RegistrosAEmpezar=($_GET['pag']-1)*$RegistrosAMostrar;
				$PagAct=$_GET['pag'];
			}
			else
			{
				$RegistrosAEmpezar=0;
				$PagAct=1;
			}
	

if($tiempo>0)
{
	header('Location:busqueda.php?tiempo='.$tiempo);
}
}
if(isset($_POST['buscar2']))
{
	$buscar2= $_POST['dias'];
	if ($buscar2>0)
	{
		header('Location:busqueda.php?buscar2='.$buscar2);
	}
}
if(isset($_POST['est']))
{
	$est= $_POST['est'];
	if($est>0)
	{
		header('Location:busqueda.php?est='.$est);
	}
}


//------------------------------------------------------------------------------------------
$RegistrosAMostrar=2;
//estos valores los recibo por GET
if(isset($_GET['pag'])){
	$RegistrosAEmpezar=($_GET['pag']-1)*$RegistrosAMostrar;
	$PagAct=$_GET['pag'];
//caso contrario los iniciamos
}else{
	$RegistrosAEmpezar=0;
	$PagAct=1;
	
}
$Resultado=mysql_query("SELECT agenda.motivo,Time_Format(agenda.hora,'%r'),mascota.nombre,propietario.p_nombre,.propietario.p_apellido,agenda.fecha_fin,estado_agenda.estado,agenda.id_agenda from agenda,mascota,propietario,estado_agenda WHERE estado_agenda.estado_agenda=agenda.estado_agenda AND agenda.id_mascota=mascota.id_mascota AND mascota.id_propietario=propietario.id_propietario LIMIT $RegistrosAEmpezar, $RegistrosAMostrar",$con);$cant=1;
echo "<table border='1'>";
echo "<tr>";
	echo "<th>No</th>";
	echo "<th>Motivo</th>";
	echo "<th>Hora</th>";
	echo "<th>Paciente</th>";
	echo "<th>Propietario</th>";
	echo "<th>Fecha</th>";
	echo "<th>Estado</th>";
	echo "<th colspan='2'>OPCIONES</th>";
	echo "</tr>";
while($MostrarMostrarFila=mysql_fetch_array($Resultado)){
		$reg=$cant-1+1;
	
	echo "<tr>";
	echo "<td>";
	echo "<p class='compañia' value='".$MostrarMostrarFila['0']."' name='numero_especie'>".$cant++."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$MostrarMostrarFila['1']."' name='nombre_especie'>".$MostrarMostrarFila['0']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$MostrarMostrarFila['1']."' name='fecha'>".$MostrarMostrarFila['1']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$MostrarMostrarFila['1']."' name='color'>".$MostrarMostrarFila['2']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$MostrarMostrarFila['1']."' name='peso'>".$MostrarMostrarFila['3'].' '.$MostrarMostrarFila['4']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$MostrarMostrarFila['1']."' name='peso'>".$MostrarMostrarFila['5']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$MostrarMostrarFila['1']."' name='peso'>".$MostrarMostrarFila['6']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<a href='../../actualizar/act_activi.php?id_reg=$MostrarMostrarFila[7]' target='proceso' onclick='return editar();'><img src='../../img/edit.png' width='20' height='20' /></a>";
	echo "</td>";
	echo "<td>";
	echo "<a href='../../del/del_acti.php?id_reg=$MostrarMostrarFila[7]' target='proceso' onclick='return confirmar();'><img src='../../img/del.gif' width='20' height='20' /></a>";
	echo "</td>";
	echo "</tr>";
   }										
//******--------determinar las páginas---------******//
$NroRegistros=mysql_num_rows(mysql_query("SELECT agenda.motivo,Time_Format(agenda.hora,'%r'),mascota.nombre,propietario.p_nombre,.propietario.p_apellido,agenda.fecha_fin,estado_agenda.estado,agenda.id_agenda from agenda,mascota,propietario,estado_agenda WHERE estado_agenda.estado_agenda=agenda.estado_agenda AND agenda.id_mascota=mascota.id_mascota AND mascota.id_propietario=propietario.id_propietario",$con));

$PagAnt=$PagAct-1;
$PagSig=$PagAct+1;
$PagUlt=$NroRegistros/$RegistrosAMostrar;

//verificamos residuo para ver si llevará decimales
$Res=$NroRegistros%$RegistrosAMostrar;
// si hay residuo usamos funcion floor para que me
// devuelva la parte entera, SIN REDONDEAR, y le sumamos
// una unidad para obtener la ultima pagina
if($Res>0) $PagUlt=floor($PagUlt)+1;

//desplazamiento
echo "<table>";
echo "<tr>";
echo "<td><a  onclick=\"Pagina('1')\">Primero</a></td>";
if($PagAct>1) echo "<td><a onclick=\"Pagina('$PagAnt')\">Anterior</a></td>";
echo "<td><strong>Pagina ".$PagAct."/".$PagUlt."</strong></td>";
if($PagAct<$PagUlt)  echo "<td><a onclick=\"Pagina('$PagSig')\">Siguiente</a></td>";
echo "<td><a  onclick=\"Pagina('$PagUlt')\">Ultimo</a></td>";
echo "</tr>";
echo "</table>";
?>
 <form action=""  target="proceso" method="POST" name="tiempo">
  <table><tr><td>Buscar por</td></tr>
  <tr><td>Lapso de tiempo de :</td><td> <select name="tiempo" onchange="document.tiempo.submit();">
  <option value="null">Selecione...</option>
  <option value="1">Una Semana</option>
  <option value="2">Un mes</option>
  <option value="null">TODO</option>
  </select>
  <input type="submit" value="" name="buscar" style="display:none">
  </td></tr>
  <tr><td>Dias restantes para la cita: </td><td><input type="number" name="dias"> <input type="Submit"  name="buscar2" value="Buscar"></td></tr></form>
  <form action=""  target="proceso" method="POST" name="est">
  <tr><td>Estado: </td><td>
  <select name="est" onchange="document.est.submit();">
  <option value="null">Selecione...</option>
  <?php
	//mostrar la mascota del propietaraio
	while($fila=mysql_fetch_row($query_paciente)){
	echo "<option  value='".$fila['0']."'>".$fila['1']."</option>";
	}					
	?>
  </select><input type="submit" value="" name="buscar3" style="display:none"></td></tr>
  </form>
  </table>
  </center>
 