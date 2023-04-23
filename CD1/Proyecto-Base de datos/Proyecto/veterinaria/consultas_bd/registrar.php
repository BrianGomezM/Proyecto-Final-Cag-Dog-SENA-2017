<?php
												//HISTORIA CLINICA VARIABLES Almacenar Informacion //
	
	$motivos=$_GET['motivos'];	
	$piel_anexos=$_GET['piel_anexos'];
	$ganglios_linfaticos=$_GET['ganglios_linfaticos'];
	$aparato_respiratorio=$_GET['aparato_respiratorio'];
	$aparato_reproductor=$_GET['aparato_reproductor'];
	$mucosa=$_GET['mucosa'];
	$plan_sanitario=$_GET['plan_sanitario'];
	$organos_sentidos=$_GET['organos_sentidos'];
	$aparato_neurologico=$_GET['aparato_neurologico'];
	$signos_clinicos=$_GET['signos_clinicos'];
	$examen_muscoesqueletico=$_GET['examen_muscoesqueletico'];
	$aparato_cardiovascular=$_GET['aparato_cardiovascular'];
	$aparato_digestivo=$_GET['aparato_digestivo'];
	$frecuencia_cardiaca=$_GET['frecuencia_cardiaca'];
	$frecuencia_respiratoria=$_GET['frecuencia_respiratoria'];
	$pulso=$_GET['pulso'];
	$temperatura_rectal=$_GET['temperatura_rectal'];
	$phc=$_GET['phc'];
	$caprologia=$_GET['caprologia'];
	$citologias=$_GET['citologias'];
	$quimicas_sericas=$_GET['quimicas_sericas'];
	$imagenologia=$_GET['imagenologia'];
	$rspaje_koh=$_GET['rspaje_koh'];
	$uroanalisis=$_GET['uroanalisis'];
	$patologias=$_GET['patologias'];
	$test_diagnostico=$_GET['test_diagnostico'];
	$d_definitivo=$_GET['d_definitivo'];
	$d_diferencial=$_GET['d_diferencial'];
	$tratamiento=$_GET['tratamiento'];

	$sql="INSERT INTO  historia_clinica (motivos ,piel_anexos ,ganglios_linfaticos ,aparato_respiratorio ,aparato_reproductor ,mucosa ,plan_sanitario ,organos_sentidos ,aparato_neurologico ,signos_clinicos ,examen_muscoesqueletico ,aparato_cardiovascular ,aparato_digestivo ,frecuencia_cardiaca ,frecuencia_respiratoria ,pulso ,temperatura_rectal ,phc ,caprologia ,citologias ,quimicass_serica ,imagenologia ,rspaje_koh ,uroanalisis ,patologias ,test_diagnostico ,d_diferencial ,d_definitivo ,tratamiento)VALUES ('$motivos', '$piel_anexos', '$ganglios_linfaticos', '$aparato_respiratorio', '$aparato_reproductor', '$mucosa', '$plan_sanitario', '$organos_sentidos', '$aparato_neurologico', '$signos_clinicos', '$examen_muscoesqueletico ', '$aparato_cardiovascular', '$aparato_digestivo', '$frecuencia_cardiaca ', '$frecuencia_respiratoria', '$pulso', '$temperatura_rectal ', '$phc', '$caprologia ', '$citologias ', '$quimicas_sericas', '$imagenologia ', '$rspaje_koh', '$uroanalisis', '$patologias', '$test_diagnostico ', '$d_definitivo', '$d_diferencial', '$tratamiento');";
	
	if($result=mysql_query($sql,$link))
		{header('location:historia Clinica.php?user1='.$user);}
	else  
		{header('location:historia Clinica.php?key=3');}	
?>