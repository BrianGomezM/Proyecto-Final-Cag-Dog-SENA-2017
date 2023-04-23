<?php
	if ($_POST['Descargar'])
		{
			$motivos=$_POST['motivos'];
			header('Location:../descargar/ver.php?motivos='.$motivos); 
		}
		else
	if ($_POST['Guardar'])
		{
			$motivos=$_POST['motivos'];
			$vete=$_POST['vete'];
			$id_mas=$_POST['mas'];
			$id_vacuna=$_POST['id_vacuna'];
			$editar=$_POST['editar'];
			$fecha=$_POST['fecha'];
			header('Location:registrar_vacu.php?motivos='.$motivos.'&vete='.$vete.'&id_mas='.$id_mas.'&id_vacuna='.$id_vacuna.'&editar='.$editar.'&fecha='.$fecha);	
		}
		else
		if ($_POST['buscar'])	
			{
				$cedula=$_POST['cedula']; 
				$fecha=$_POST['fecha'];
				header('Location:buscar_docu_vacu.php?cedula='.$cedula.'&fecha='.$fecha); 
			}
			else
			if ($_POST['mas'])	
			{
				$fecha=$_POST['fecha'];
				$mas=$_POST['mas'];
				$propi=$_POST['user'];
				header('Location:vacunacion.php?mas='.$mas.'&propi='.$propi.'&fecha='.$fecha); 
			}
	
?>