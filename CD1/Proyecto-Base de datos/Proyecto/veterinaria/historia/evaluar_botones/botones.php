<?php
	if ($_POST['Descargar'])
		{
			$tratamiento=$_POST['tratamiento'];
			$user=$_POST['user'];
			$mas=$_POST['mas'];
			$user1=$_POST['user1'];
			$mas1=$_POST['mas1'];
			
			header('Location:../descargar/ver.php?tratamiento='.$tratamiento.'&user='.$user.'&mas='.$mas.'&user1='.$user1.'&mas1='.$mas1); 	
		}
		else
	if ($_POST['Guardar'])
		{
			$motivos=$_POST['motivos'];	
			$piel_anexos=$_POST['piel_anexos'];
			$ganglios_linfaticos=$_POST['ganglios_linfaticos'];
			$aparato_respiratorio=$_POST['aparato_respiratorio'];
			$aparato_reproductor=$_POST['aparato_reproductor'];
			$mucosa=$_POST['mucosa'];
			$plan_sanitario=$_POST['plan_sanitario'];
			$organos_sentidos=$_POST['organos_sentidos'];
			$aparato_neurologico=$_POST['aparato_neurologico'];
			$signos_clinicos=$_POST['signos_clinicos'];
			$examen_muscoesqueletico=$_POST['examen_muscoesqueletico'];
			$aparato_cardiovascular=$_POST['aparato_cardiovascular'];
			$aparato_digestivo=$_POST['aparato_digestivo'];
			$frecuencia_cardiaca=$_POST['frecuencia_cardiaca'];
			$frecuencia_respiratoria=$_POST['frecuencia_respiratoria'];
			$pulso=$_POST['pulso'];
			$temperatura_rectal=$_POST['temperatura_rectal'];
			$phc=$_POST['phc'];
			$caprologia=$_POST['caprologia'];
			$citologias=$_POST['Citologias'];
			$quimicas_sericas=$_POST['quimicas_sericas'];
			$imagenologia=$_POST['imagenologia'];
			$rspaje_koh=$_POST['rspaje_koh'];
			$uroanalisis=$_POST['uroanalisis'];
			$patologias=$_POST['patologias'];
			$test_diagnostico=$_POST['test_diagnostico'];
			$d_definitivo=$_POST['d_definitivo'];
			$d_diferencial=$_POST['d_diferencial'];
			$tratamiento=$_POST['tratamiento'];
			$fecha=$_POST['fecha'];
			$id_mas=$_POST['mas'];
			$editar=$_POST['editar'];
			$id_historia=$_POST['id_historia'];
			header('Location:../consultas_bd/registrar.php?motivos='.$motivos.'&id_mas='.$id_mas.'&id_historia='.$id_historia.'&editar='.$editar.'&piel_anexos='.$piel_anexos.'&ganglios_linfaticos='.$ganglios_linfaticos.'&aparato_respiratorio='.$aparato_respiratorio.'&aparato_reproductor='.$aparato_reproductor.'&mucosa='.$mucosa.'&plan_sanitario='.$plan_sanitario.'&organos_sentidos='.$organos_sentidos.'&aparato_neurologico='.$aparato_neurologico.'&signos_clinicos='.$signos_clinicos.'&examen_muscoesqueletico='.$examen_muscoesqueletico.'&aparato_cardiovascular='.$aparato_cardiovascular.'&aparato_digestivo='.$aparato_digestivo.'&frecuencia_cardiaca='.$frecuencia_cardiaca.'&frecuencia_cardiaca='.$frecuencia_cardiaca.'&frecuencia_respiratoria='.$frecuencia_respiratoria.'&pulso='.$pulso.'&temperatura_rectal='.$temperatura_rectal.'&phc='.$phc.'&caprologia='.$caprologia.'&citologias='.$citologias.'&quimicas_sericas='.$quimicas_sericas.'&imagenologia='.$imagenologia.'&rspaje_koh='.$rspaje_koh.'&uroanalisis='.$uroanalisis.'&patologias='.$patologias.'&test_diagnostico='.$test_diagnostico.'&d_definitivo='.$d_definitivo.'&d_diferencial='.$d_diferencial.'&tratamiento='.$tratamiento.'&fecha='.$fecha);	
		}
		else
		if ($_POST['buscar'])	
			{
				$cedula=$_POST['cedula']; 
				$fecha=$_POST['fecha'];
				header('Location:../consultas_bd/buscar_documento.php?cedula='.$cedula.'&fecha='.$fecha); 
			}
			else
			if ($_POST['mas'])	
			{
				$fecha=$_POST['fecha'];
				$mas=$_POST['mas'];
				$propi=$_POST['user'];
				echo "hola".$mas;
				header('Location:../Completa/historia Clinica.php?mas='.$mas.'&propi='.$propi.'&fecha='.$fecha); 
			}
	
?>