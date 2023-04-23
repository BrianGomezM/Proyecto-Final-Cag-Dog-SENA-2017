<?php
include ('../include/conex.php');
$link= Conectarse();
$idp=$_POST['prop'];
$idm=$_POST['pas'];
//echo "id del propietario: ".$idp;
//echo "<br>";
//echo "id de la mascota: ".$idm;
if ($idm=="null")
{
echo '<script language="javascript">alert("seleccione un paciente");
				   	var pagina="../consulta/cons_despa.php"
				   	location.href=pagina				
					</script>';
}
else
{
$consulta1="SELECT id_mascota,nombre FROM mascota WHERE id_propietario='$idp'";
$query1= mysql_query($consulta1,$link);
//------------------------------------------
//datos propietario Selecionado
$consulta2="SELECT id_propietario,p_nombre,p_apellido FROM propietario WHERE id_propietario='$idp'";
$query2= mysql_query($consulta2,$link);
$d2=mysql_fetch_row($query2);

$slq2="SELECT id_propietario, p_nombre,p_apellido FROM propietario";
$query2a=mysql_query($slq2,$link);
//----------------------------------------------
//todos los datos
$slq="SELECT propietario.id_propietario,mascota.id_mascota,propietario.p_nombre,propietario.p_apellido ,
mascota.nombre,vacunacion.fecha,vacunacion.actividad,vacunacion.id_vacuna FROM propietario,mascota,vacunacion 
WHERE mascota.id_mascota=vacunacion.id_mascota AND mascota.id_mascota='$idm' AND propietario.id_propietario='$idp'";
$query=mysql_query($slq,$link);$cant=1;
//-----------------------------------------------
}
?>
<html>
<head>
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
<div id="box">
<main id="center">
<table class="pure-table pure-table-horizontal" border="">
<form id="prod" name="prod" action="../consulta/cons_vacunacion.php" target="proceso" method="POST">
<tr> 
<td colspan="5">Filtro</td>
</tr>
<tr>
<td><p class="compañia">Propietario:</p> </td><td><select name="pro" id="pro" onchange="document.pro.submit();">
	<option name="0" <?php echo "value='".$idp."'";?>><?php echo "".$d2['1']." ".$d2['2'];	?></option>
	<?php
		//mostrar todos los propietarios
	 while($d1=mysql_fetch_row($query2a)){
	 echo "<option  value='".$d1['0']."' $tipo id='".$d1['0']."'  name='".$d1['0']."'>".$d1['1']." ".$d1['2']."</option>";
	 }					
	?>				
</td></select>
<td><p class="compañia">Paciente:</p> </td><td><select name="pas" id="pas" onchange="document.pas.submit();">
	<option name="0" value="null">Selecione...</option>
	<?php
		//mostrar todos los pacientes
	 while($d1=mysql_fetch_row($query1)){
	 echo "<option  value='".$d1['0']."' $tipo id='".$d1['0']."'  name='".$d1['0']."'>".$d1['1']."</option>";
	 }					
	?>				
</td></select>
<td>
<input type="hidden"  name="prop" id="prop" <?php echo "value='".$idp."'";?>>
<input type="submit" value="Buscar"></td>
</tr>
</form>
</table>
<br>
<table border="">
<tr>
<td>No</td>
<td>Primer nombre</td>
<td>Primer Apellido</td>
<td>Nombre del paciente</td>
<td>Fecha</td>
<td>Actividad</td>
<td colspan="2">Opciones</td>
</tr>
<?php
	//mostrar datos
	 while($fila=mysql_fetch_row($query)){
	$reg=$cant-1+1;
	echo "<tr>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['0']."' name='numero_especie'>".$cant++."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['0']."' name='primer_nombre'>".$fila['2']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['0']."' name='primer_apellido'>".$fila['3']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['1']."' name='nombre_mascota'>".$fila['4']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['1']."' name='fecha'>".$fila['5']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['1']."' name='actividad'>".$fila['6']."</p>";
	echo "</td>";
	echo "<td>";
    echo "<a href='../actualizar/act_mascota.php?id_reg=$fila[7]' target='proceso' ><img src='../img/edit.png' width='20' height='20' /></a>";
	echo "</td>";
	echo "<td>";
	echo "<a href='../del/del_vacunacion.php?id_reg=$fila[7]' target='proceso' ><img src='../img/del.gif' width='20' height='20' /></a>";
	echo "</td>";
	echo "</tr>";
   }					
?>
</table>
</body>
</html>