<?php
include('../Conexion_BD/conex.php');
$link=Conectarse();
$tratamiento=$_GET['tratamiento'];
$user=$_GET['user'];
$mas=$_GET['mas'];

$user1=$_GET['user1'];
$mas1=$_GET['mas1'];



$Brian="SELECT propietario.p_nombre, propietario.s_nombre, propietario.p_apellido, propietario.s_apellido, mascota.nombre FROM propietario, mascota WHERE propietario.id_propietario=mascota.id_propietario AND propietario.id_propietario ='$user' AND mascota.id_mascota='$mas'";
$Julio=mysql_query($Brian, $link);
$Gomez=mysql_fetch_array($Julio);



$sam="SELECT propietario.p_nombre, propietario.s_nombre, propietario.p_apellido, propietario.s_apellido, mascota.nombre FROM propietario, mascota WHERE propietario.id_propietario=mascota.id_propietario AND propietario.id_propietario ='$user1' AND mascota.id_mascota='$mas1'";
$var3=mysql_query($sam, $link);
$var5=mysql_fetch_array($var3);


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
		'.$Gomez[0]." ".$Gomez[1]." ".$Gomez[3].$var5[0]." ".$var5[1]." ".$var5[3].'
	</td>
	<td>
		Nombre mascota:
	</td>
	<td>
		'.$Gomez[4]." ".$var5[4].'
	</td>
</tr>
<tr>
		<td colspan="4">
		</td>
	</tr>
	<tr>
	<th colspan="4"> 
		<h3>TRATAMIENTO</h3>
	</th>
	</tr>
	<tr>
		<td colspan="4">
		</td>
	</tr>
	<tr>
		<td colspan="4"><h5>'.$tratamiento.'</h5><br><br><br><br><br><br><br><br><br><br>
		</td>
	</tr>
	<tr>
		<td colspan="4">
		</td>
	</tr>
	<tr>
		<td colspan="2">
			FIRMA DEL VETERINARIO ENCARGADO:
			<br>
		</td>
		<td colspan="2">
			<br><br><br><br><br><br>
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