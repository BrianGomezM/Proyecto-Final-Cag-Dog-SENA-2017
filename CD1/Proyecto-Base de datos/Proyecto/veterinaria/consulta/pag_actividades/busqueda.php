<?php
include ('../../include/conex.php');
$mensaje="Registros de pacientes";
$link= Conectarse();
$x="SELECT estado_agenda,estado FROM estado_agenda";
$query_paciente=mysql_query($x,$link);
$x="default";
$reg=0;
if(isset($_GET['tiempo']))
{
$tiempo= $_GET['tiempo'];
if ($tiempo==1)
		{
			$mensaje="Registros de pacientes en una semana";
			$cons="SELECT agenda.motivo,Time_Format(agenda.hora,'%r'),mascota.nombre,propietario.p_nombre,.propietario.p_apellido,agenda.fecha_fin,estado_agenda.estado,agenda.id_agenda from agenda,mascota,propietario,estado_agenda WHERE DATEDIFF(fecha_fin,fecha_registro)='7' AND  agenda.id_mascota=mascota.id_mascota AND mascota.id_propietario=propietario.id_propietario AND estado_agenda.estado_agenda=agenda.estado_agenda";
			$conf= mysql_query($cons,$link);$cant=1;
			
		}
		if($tiempo==2)
		{
			$mensaje="Registros de pacientes en un mes";
			$cons="SELECT agenda.motivo,Time_Format(agenda.hora,'%r'),mascota.nombre,propietario.p_nombre,.propietario.p_apellido,agenda.fecha_fin,estado_agenda.estado,agenda.id_agenda from agenda,mascota,propietario,estado_agenda WHERE agenda.id_mascota=mascota.id_mascota AND mascota.id_propietario=propietario.id_propietario AND estado_agenda.estado_agenda=agenda.estado_agenda AND DATEDIFF(agenda.fecha_fin,agenda.fecha_registro)>'28' AND DATEDIFF(agenda.fecha_fin,agenda.fecha_registro)<'32'";
			$conf= mysql_query($cons,$link);$cant=1;
			

		}	
		if($tiempo==3)
		{
			header('Location:index.php');
			
		}
}
if(isset($_GET['buscar2']))
{
	$dias= $_GET['buscar2'];
	$mensaje="Registros en ".$dias." dias";
	$cons="SELECT agenda.motivo,Time_Format(agenda.hora,'%r'),mascota.nombre,propietario.p_nombre,.propietario.p_apellido,agenda.fecha_fin,
	estado_agenda.estado,agenda.id_agenda from agenda,mascota,propietario,estado_agenda WHERE DATEDIFF(fecha_fin,fecha_registro)='$dias' AND 
	estado_agenda.estado_agenda=agenda.estado_agenda AND agenda.id_mascota=mascota.id_mascota AND mascota.id_propietario=propietario.id_propietario";
	$conf= mysql_query($cons,$link);$cant=1;
	
	

}
if(isset($_GET['est']))
{
	$est= $_GET['est'];
	$x2="SELECT estado_agenda,estado FROM estado_agenda WHERE estado_agenda='$est'";
	$query_paciente2=mysql_query($x2,$link);
	$f=mysql_fetch_array($query_paciente2);
	$mensaje="Registros en estado ".$f[1];
	$cons="SELECT agenda.motivo,Time_Format(agenda.hora,'%r'),mascota.nombre,propietario.p_nombre,.propietario.p_apellido,agenda.fecha_fin,
	estado_agenda.estado,agenda.id_agenda from agenda,mascota,propietario,estado_agenda WHERE agenda.id_mascota=mascota.id_mascota AND estado_agenda.estado_agenda=agenda.estado_agenda AND 
	estado_agenda.estado_agenda='$est' AND mascota.id_propietario=propietario.id_propietario";
	$conf= mysql_query($cons,$link);$cant=1;
	
}
//******************************************************Consultar ahora en esta pag
if(isset($_POST['tiempo2']))
{
	$tiempo2= $_POST['tiempo2'];
//echo "tiempo selecionado ".$tiempo2;
		if ($tiempo2==1)
		{
			$mensaje="Registros de pacientes en una semana";
			$cons="SELECT agenda.motivo,Time_Format(agenda.hora,'%r'),mascota.nombre,propietario.p_nombre,.propietario.p_apellido,agenda.fecha_fin,estado_agenda.estado,agenda.id_agenda from agenda,mascota,propietario,estado_agenda WHERE DATEDIFF(fecha_fin,fecha_registro)='7' AND  agenda.id_mascota=mascota.id_mascota AND mascota.id_propietario=propietario.id_propietario AND estado_agenda.estado_agenda=agenda.estado_agenda";
			$conf= mysql_query($cons,$link);$cant=1;
		}
		if($tiempo2==2)
		{
			$mensaje="Registros de pacientes en un mes";
			$cons="SELECT agenda.motivo,Time_Format(agenda.hora,'%r'),mascota.nombre,propietario.p_nombre,.propietario.p_apellido,agenda.fecha_fin,estado_agenda.estado,agenda.id_agenda from agenda,mascota,propietario,estado_agenda WHERE agenda.id_mascota=mascota.id_mascota AND mascota.id_propietario=propietario.id_propietario AND estado_agenda.estado_agenda=agenda.estado_agenda AND DATEDIFF(agenda.fecha_fin,agenda.fecha_registro)>'28' AND DATEDIFF(agenda.fecha_fin,agenda.fecha_registro)<'32'";
			$conf= mysql_query($cons,$link);$cant=1;

		}	
		if($tiempo2==3)
		{
			header('Location:index.php');
			
		}
}
if(isset($_POST['buscar3']))
{
	$dias= $_POST['dias'];
	$mensaje="Registros en ".$dias." dias";
	$cons="SELECT agenda.motivo,Time_Format(agenda.hora,'%r'),mascota.nombre,propietario.p_nombre,.propietario.p_apellido,agenda.fecha_fin,
	estado_agenda.estado,agenda.id_agenda from agenda,mascota,propietario,estado_agenda WHERE DATEDIFF(fecha_fin,fecha_registro)='$dias' AND  estado_agenda.estado_agenda=agenda.estado_agenda AND agenda.id_mascota=mascota.id_mascota AND mascota.id_propietario=propietario.id_propietario";
	$conf= mysql_query($cons,$link);$cant=1;
}
if(isset($_POST['est2']))
{
	$est2= $_POST['est2'];
	$x2="SELECT estado_agenda,estado FROM estado_agenda WHERE estado_agenda='$est2'";
	$query_paciente2=mysql_query($x2,$link);
	$f=mysql_fetch_array($query_paciente2);
	
	
	$mensaje="Registros en estado ".$f[1];
	$cons="SELECT agenda.motivo,Time_Format(agenda.hora,'%r'),mascota.nombre,propietario.p_nombre,.propietario.p_apellido,agenda.fecha_fin,
	estado_agenda.estado,agenda.id_agenda from agenda,mascota,propietario,estado_agenda WHERE agenda.id_mascota=mascota.id_mascota AND estado_agenda.estado_agenda=agenda.estado_agenda AND 
	estado_agenda.estado_agenda='$est2' AND mascota.id_propietario=propietario.id_propietario";
	$conf= mysql_query($cons,$link);$cant=1;
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
		//echo "base: ".$reg;
		while($fila=mysql_fetch_row($conf)){
		$reg=$cant;
		if ($reg>0)
		{
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
			echo "<a href='../../actualizar/act_activi.php?id_reg=$fila[7]' target='proceso' onclick='return editar();'><img src='../../img/edit.png' width='20' height='20' /></a>";
			echo "</td>";
			echo "<td>";
			echo "<a href='../../del/del_acti.php?id_reg=$fila[7]' target='proceso' onclick='return confirmar();'><img src='../../img/del.gif' width='20' height='20' /></a>";
			echo "</td>";
			echo "</tr>";			
		}
		
		}
		if ($reg==0)
		{
			echo "<tr><td colspan='9'>";
			echo "<center><h2>No hay registro</center></h2>";
			echo "</tr></td>";
		}
		//echo "<br>con registro: ".$reg;

?>
       
    </tbody>
  </table>
  <form action=""  target="proceso" method="POST" name="tiempo2">
  <table><tr><td>Buscar por</td></tr>
  <tr><td>Lapso de tiempo de :</td><td> <select name="tiempo2" onchange="document.tiempo2.submit();">
  <option value="null">Selecione...</option>
  <option value="1">Una Semana</option>
  <option value="2">Un mes</option>
  <option value="3">TODO</option>
  </select>
  <input type="submit" value="" name="buscar" style="display:none">
  </td></tr>
  <tr><td>Dias restantes para la cita: </td><td><input type="number" name="dias"> <input type="Submit"  name="buscar3" value="Buscar"></td></tr></form>
  <form action=""  target="proceso" method="POST" name="est2">
  <tr><td>Estado: </td><td>
  <select name="est2" onchange="document.est2.submit();">
  <option value="null">Selecione...</option>
	<?php
	//mostrar la mascota del propietaraio
	while($fila=mysql_fetch_row($query_paciente)){
	echo "<option  value='".$fila['0']."'>".$fila['1']."</option>";
	}					
	?>
  </select><input type="submit" value="" name="buscar5" style="display:none"></td></tr>
  </form>
  </table>
</main>
</div>
</center>
</body>
</html>