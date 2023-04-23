<?php
include('../../../include/conex.php');
$link=Conectarse();
$tratamiento=$_POST['tratamiento'];
$user=$_POST['user'];
$mas=$_POST['mas'];

$Brian="SELECT propietario.p_nombre, propietario.s_nombre, propietario.p_apellido, propietario.s_apellido, mascota.nombre FROM propietario, mascota WHERE propietario.id_propietario=mascota.id_propietario AND propietario.id_propietario ='$user' AND mascota.id_mascota='$mas'";
$Julio=mysql_query($Brian, $link);
$Gomez=mysql_fetch_array($Julio);
	require_once("dompdf/dompdf_config.inc.php");
	$codigo='<table border="1">
<tr>
	<td>
		<IMG SRC="logo_sena.png">
	</td>
	<td colspan="3">
		<IMG SRC="logo_sespa.png">
	</td>
</tr>
<tr>
	<td colspan="4">
	</td>
</tr>
<tr>
	<td>
		Nombre usuario:
	</td>
	<td>
		'.$Gomez[0]." ".$Gomez[1]." ".$Gomez[3].'
	</td>
	<td>
		Nombre mascota:
	</td>
	<td>
		'.$Gomez[4].'
	</td>
</tr>
<tr>
	<th colspan="4"> 
		<h3>TRATAMIENTO</h3>
	</th>
</tr>
<tr>
<td colspan="4">
<h4>'.$tratamiento.'</h4>
</td>
</tr>
</table>';
	$codigo=utf8_decode($codigo);
	$dompdf=new DOMPDF();
	$dompdf->load_html($codigo);
	ini_set("memory_limit","32M");
	$dompdf->render();
	$dompdf->stream("tratamiento.pdf");
?>