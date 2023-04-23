<?php
	 if ($id_mas=="null" and $motivos=="null"and $vtt=="null" )
		{
	           echo '<script language="javascript">alert("Verifica!!.. Hay Campos Vacios");
		         </script>';
		
	           header('../menu/menu_admin.php');
		}
		else
		{
			if ($_POST['Guardar'])
				{
					$motivos=$_POST['motivos'];
					$vtt=$_POST['vtt'];
					$id_mas=$_POST['mas'];
					$id_despa=$_POST['id_despa'];
					$editar=$_POST['editar'];
					$fecha=$_POST['fecha'];
					header('Location:registrar_despa.php?motivos='.$motivos.'&vtt='.$vtt.'&id_mas='.$id_mas.'&id_despa='.$id_despa.'&editar='.$editar.'&fecha='.$fecha);	
				}
				else
				if ($_POST['buscar'])	
					{
						$cedula=$_POST['cedula']; 
						$fecha=$_POST['fecha'];
						header('Location:buscar_docu_despa.php?cedula='.$cedula.'&fecha='.$fecha); 
					}
					else
					if ($_POST['mas'])	
					{
						$fecha=$_POST['fecha'];
						$mas=$_POST['mas'];
						$propi=$_POST['user'];
						header('Location:desparasitacion.php?mas='.$mas.'&propi='.$propi.'&fecha='.$fecha); 
					}
    		}
?>