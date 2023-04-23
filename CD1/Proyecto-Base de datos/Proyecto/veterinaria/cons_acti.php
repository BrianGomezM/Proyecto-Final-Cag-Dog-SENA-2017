<?php
include ('include/conex.php');
$mensaje="Registros de pacientes";
$link= Conectarse();
$cons="SELECT agenda.motivo,Time_Format(agenda.hora,'%r'),mascota.nombre,propietario.p_nombre,.propietario.p_apellido,agenda.fecha_fin,estado_agenda.estado,agenda.id_agenda from agenda,mascota,propietario,estado_agenda WHERE agenda.estado_agenda=estado_agenda.estado_agenda AND agenda.id_mascota=mascota.id_mascota AND mascota.id_propietario=propietario.id_propietario";
$conf= mysql_query($cons,$link);$cant=1;

if(isset($_POST['est']))
{
	$est= $_POST['est'];
	if($est=="null")
	{
		echo "Por favor selecione una de las opciones";
	}
	else
	{
	$mensaje="Registros en estado ".$est;
	$cons="SELECT agenda.motivo,Time_Format(agenda.hora,'%r'),mascota.nombre,propietario.p_nombre,.propietario.p_apellido,agenda.fecha_fin,
	estado_agenda.estado,agenda.id_agenda from agenda,mascota,propietario,estado_agenda WHERE agenda.id_mascota=mascota.id_mascota AND estado_agenda.estado='$est' AND mascota.id_propietario=propietario.id_propietario AND agenda.estado_agenda=estado_agenda.estado_agenda";
	$conf= mysql_query($cons,$link);$cant=1;
	}
}
if(isset($_POST['buscar2']))
{
	$dias= $_POST['dias'];
	$mensaje="Registros en ".$dias." dias";
	$cons="SELECT agenda.motivo,Time_Format(agenda.hora,'%r'),mascota.nombre,propietario.p_nombre,.propietario.p_apellido,agenda.fecha_fin,
	estado_agenda.estado,agenda.id_agenda from agenda,mascota,propietario,estado_agenda WHERE DATEDIFF(fecha_fin,fecha_registro)='$dias' AND  agenda.id_mascota=mascota.id_mascota AND mascota.id_propietario=propietario.id_propietario AND agenda.estado_agenda=estado_agenda.estado_agenda";
	$conf= mysql_query($cons,$link);$cant=1;
	
}
if(isset($_POST['tiempo']))
{
$tiempo= $_POST['tiempo'];
//echo "tiempo selecionado ".$tiempo;
		if ($tiempo==1)
		{
			$mensaje="Registros de pacientes en una semana";
			$cons="SELECT agenda.motivo,Time_Format(agenda.hora,'%r'),mascota.nombre,propietario.p_nombre,.propietario.p_apellido,agenda.fecha_fin,estado_agenda.estado,agenda.id_agenda from agenda,mascota,propietario,estado_agenda WHERE DATEDIFF(fecha_fin,fecha_registro)='7' AND  agenda.id_mascota=mascota.id_mascota AND mascota.id_propietario=propietario.id_propietario AND agenda.estado_agenda=estado_agenda.estado_agenda";
			$conf= mysql_query($cons,$link);$cant=1;
		}
		if($tiempo==2)
		{
			$mensaje="Registros de pacientes en un mes";
			$cons="SELECT agenda.motivo,Time_Format(agenda.hora,'%r'),mascota.nombre,propietario.p_nombre,.propietario.p_apellido,agenda.fecha_fin,estado_agenda.estado,agenda.id_agenda from agenda,mascota,propietario,estado_agenda WHERE agenda.id_mascota=mascota.id_mascota AND mascota.id_propietario=propietario.id_propietario AND
			agenda.estado_agenda=estado_agenda.estado_agenda AND DATEDIFF(agenda.fecha_fin,agenda.fecha_registro)>'28' AND DATEDIFF(agenda.fecha_fin,agenda.fecha_registro)<'32'";
			$conf= mysql_query($cons,$link);$cant=1;

		}	
		if($tiempo==3)
		{
			$mensaje="Registros de todos pacientes";
			$cons="SELECT agenda.motivo,Time_Format(agenda.hora,'%r'),mascota.nombre,propietario.p_nombre,.propietario.p_apellido,agenda.fecha_fin,estado_agenda.estado,agenda.id_agenda from agenda,mascota,propietario,estado_agenda WHERE agenda.id_mascota=mascota.id_mascota AND mascota.id_propietario=propietario.id_propietario AND
			agenda.estado_agenda=estado_agenda.estado_agenda";
			$conf= mysql_query($cons,$link);$cant=1;
			
		}
}


?>
<html>
<head>
<script>
	function confirmar()
	{
		var confirmacion= confirm("seguro desea eliminar Item?");
		if(confirmacion==true)

		{return true;}
	else
	{return false;}
	}
	function editar()
	{
	var confirmacion= confirm("seguro que desea editar este item?");
	if(confirmacion==true)
	{return true;}
	else
	{return false;}
	}
	</script>
<style>
@import url(http://fonts.googleapis.com/css?family=Covered+By+Your+Grace);
*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

html, body {
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
}

body {
  padding: 5em 1em;
  
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}

h1 {
  text-align: center;
  font-size: 275%;
  font-family: ';
  font-weight: 300;
  margin-top: -1em;
  text-shadow: 0 2px 1px white;
}

#box {
  margin: auto;
  width: 50em;
  height: 100%;
  white-space: nowrap;
}
@media all and (max-width: 52em) {
  #box {
    width: 100%;
  }
}

#center {
  vertical-align: middle;
  display: inline-block;
  white-space: normal;
}

#box:after {
  content: "";
 
  vertical-align: middle;
  display: inline-block;
  margin-right: -10px;
}

table {
  background-color: #E6E6E6;
  padding: 1em;
}
table, table * {
  border-color: #238276 !important;
}
table th {
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  color: #E6E6E6;
  background-color: #238276;
  position: relative;
}
table th:after {
  content: "";
  display: block;
  height: 5px;
  right: 0;
  left: 0;
  bottom: 0;
  background-color: #16a085;
  position: absolute;
}

#credits {
  text-align: right;
  color: white;
}
#credits a {
  color: #16a085;
  text-decoration: none;
}
#credits a:hover {
  text-decoration: underline;
}

</style>

</head>
<body>
<center>
<div id="box">
<main id="center">
  <h1><?php echo "".$mensaje;?></h1>
  <table class="pure-table pure-table-horizontal" border="0">
    <thead>
      <tr>
        <th>No</th>
        <th>Motivo</th>
        <th>Hora</th>
        <th>Paciente</th>
        <th>Propietario</th>
        <th>Fecha</th>
        <th>Estado</th>
        <th colspan="3">Opciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
	  <?php
//mostrar todas las especies
	 while($fila=mysql_fetch_row($conf)){
	$reg=$cant-1+1;
	echo "<tr>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['0']."' name='numero_especie'>".$cant++."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['1']."' name='nombre_especie'>".$fila['0']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['1']."' name='fecha'>".$fila['1']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['1']."' name='color'>".$fila['2']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['1']."' name='peso'>".$fila['3'].' '.$fila['4']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['1']."' name='peso'>".$fila['5']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['1']."' name='peso'>".$fila['6']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<a href='actualizar/act_activi.php?id_reg=$fila[7]' target='proceso' onclick='return editar();'><img src='img/edit.png' width='20' height='20' /></a>";
	echo "</td>";
	echo "<td>";
	echo "<a href='del/del_acti.php?id_reg=$fila[7]' target='proceso' onclick='return confirmar();'><img src='img/del.gif' width='20' height='20' /></a>";
	echo "</td>";
	echo "</tr>";
   }										
?>
       
    </tbody>
  </table>
  <form action=""  target="proceso" method="POST" name="tiempo">
  <table><tr><td>Buscar por</td></tr>
  <tr><td>Lapso de tiempo de :</td><td> <select name="tiempo" onchange="document.tiempo.submit();">
  <option value="null">Selecione...</option>
  <option value="1">Una Semana</option>
  <option value="2">Un mes</option>
  <option value="3">TODO</option>
  </select>
  <input type="submit" value="" class="submit" name="buscar" style="display:none">
  </td></tr>
  <tr><td>Dias restantes para la cita: </td><td><input type="number" name="dias"> <input type="Submit" class="submit" name="buscar2" value="Buscar"></td></tr></form>
  <form action=""  target="proceso" method="POST" name="est">
  <tr><td>Estado: </td><td>
  <select name="est" onchange="document.est.submit();">
  <option value="null">Selecione...</option>
   <?php
	   $sql="SELECT estado FROM estado_agenda";
	   $result=mysql_query($sql,$link);
	   while($row2=mysql_fetch_array($result))
	   {
		 echo '<option value="'.$row2[0].'" '.$ver.'>'.$row2[0].'</option>';
	   }
		?>
  </select><input type="submit" value="" name="buscar3" style="display:none"></td></tr>
  </form>
  </table>
</main>
</div>
</center>
</body>
</html>