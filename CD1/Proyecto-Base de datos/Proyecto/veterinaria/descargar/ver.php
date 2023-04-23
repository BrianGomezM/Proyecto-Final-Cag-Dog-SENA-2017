<?php
$tratamiento=$_GET['tratamiento']; 

	require_once("dompdf/dompdf_config.inc.php");
	$codigo='<table border="4">
<tr>
	<td>
		<IMG SRC="logo_sena.jpg">
	</td>
	<td>
		<IMG SRC="logo_sespa.png">
	</td>
</tr>
<tr>
	<th colspan="2"> 
		<h1>TRATAMIENTO</h1>
	</th>
</tr>
<tr>
<td colspan="2">
<h3>'.$tratamiento.'</h3>
</td>
<tr>
</table>';
	$codigo=utf8_decode($codigo);
	$dompdf=new DOMPDF();
	$dompdf->load_html($codigo);
	ini_set("memory_limit","32M");
	$dompdf->render();
	$dompdf->stream("tratamiento.pdf");
	




?>