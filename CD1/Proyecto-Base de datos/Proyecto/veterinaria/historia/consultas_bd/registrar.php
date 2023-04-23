<?php
												//HISTORIA CLINICA VARIABLES Almacenar Informacion //
	include('../Conexion_BD/conex.php');						
	$link=Conectarse();	
	$editar=$_GET['editar'];
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
	$fecha=$_GET['fecha'];
	$id_mas=$_GET['id_mas'];
	$id_historia=$_GET['id_historia'];
	if ($editar==1)
	{
	$sqleditar="UPDATE historia_clinica SET fecha = '$fecha', motivos = '$motivos', piel_anexos = '$piel_anexos', ganglios_linfaticos = '$ganglios_linfaticos', aparato_respiratorio = '$aparato_respiratorio', aparato_reproductor = '$aparato_reproductor', mucosa = '$mucosa', plan_sanitario = '$plan_sanitario', organos_sentidos = '$organos_sentidos', aparato_neurologico = '$aparato_neurologico', signos_clinicos = '$signos_clinicos', examen_muscoesqueletico = '$examen_muscoesqueletico', aparato_cardiovascular = '$aparato_cardiovascular', aparato_digestivo = '$aparato_digestivo', frecuencia_cardiaca = ' $frecuencia_cardiaca', frecuencia_respiratoria = '$frecuencia_respiratoria', pulso = '$pulso', temperatura_rectal = ' $temperatura_rectal', phc = '$phc', caprologia = ' $caprologia', citologias = ' $citologias', quimicass_serica = '$quimicass_serica', imagenologia = ' $imagenologia', rspaje_koh = '$rspaje_koh', uroanalisis = '$uroanalisis', patologias = '$patologias', test_diagnostico = ' $test_diagnostico', d_diferencial = '$d_diferencial', d_definitivo = '$d_definitivo', tratamiento = '$tratamiento' WHERE historia_clinica.id_historial = '$id_historia'";
	if($resulteditar=mysql_query($sqleditar,$link))
			{ echo '<script language="javascript">alert("La historia clinica fue editada con exito");
				   	var pagina="../Completa/historia Clinica.php?Ediccion_Correcta=1";
				   	location.href=pagina				
					</script>';
			}
		else  
			{header('location:../Completa/historia Clinica.php?Ediccion_Incorrecta=2');}
	}
	else
	{
		$sql="INSERT INTO  historia_clinica (fecha ,id_mascota ,motivos ,piel_anexos ,ganglios_linfaticos ,aparato_respiratorio ,aparato_reproductor ,mucosa ,plan_sanitario ,organos_sentidos ,aparato_neurologico ,signos_clinicos ,examen_muscoesqueletico ,aparato_cardiovascular ,aparato_digestivo ,frecuencia_cardiaca ,frecuencia_respiratoria ,pulso ,temperatura_rectal ,phc ,caprologia ,citologias ,quimicass_serica ,imagenologia ,rspaje_koh ,uroanalisis ,patologias ,test_diagnostico ,d_diferencial ,d_definitivo ,tratamiento)VALUES ('$fecha', '$id_mas', '$motivos', '$piel_anexos', '$ganglios_linfaticos', '$aparato_respiratorio', '$aparato_reproductor', '$mucosa', '$plan_sanitario', '$organos_sentidos', '$aparato_neurologico', '$signos_clinicos', '$examen_muscoesqueletico ', '$aparato_cardiovascular', '$aparato_digestivo', '$frecuencia_cardiaca ', '$frecuencia_respiratoria', '$pulso', '$temperatura_rectal ', '$phc', '$caprologia ', '$citologias ', '$quimicas_sericas', '$imagenologia ', '$rspaje_koh', '$uroanalisis', '$patologias', '$test_diagnostico ', '$d_definitivo', '$d_diferencial', '$tratamiento');";
		if($result=mysql_query($sql,$link))
			{header('location:../Completa/historia Clinica.php?Registro_Correctoo=1');}
		else  
			{header('location:../Completa/historia Clinica.php?Registro_incorrecto=2');}
	}	
?>