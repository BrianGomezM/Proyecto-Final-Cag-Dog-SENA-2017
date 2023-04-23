<?php
												//desparacitacion Almacenar Informacion variables //
	include('../conex/conex.php');						
	$link=Conectarse();	
	$editar=$_GET['editar'];
	$motivos=$_GET['motivos'];
	$vtt=$_GET['vtt'];	
	$fecha=$_GET['fecha'];
	$id_mas=$_GET['id_mas'];
	$id_despa=$_GET['id_despa'];
	if ($editar==1)
	{
	$sqleditar="UPDATE desparacitacion SET fecha = '$fecha', motivos = '$motivos', vtt = '$vtt' WHERE desparacitacion.id_despa = '$id_despa'";
	if($resulteditar=mysql_query($sqleditar,$link))
			{header('location:desparasitacion.php?Ediccion_Correcta=1');}
		else  
			{header('location:desparasitacion.php?Ediccion_Incorrecta=2');}
	}
	else
	{
	     if ($id_mas=="null" and $motivos=="null"and $vtt=="null" )
		{
	           echo '<script language="javascript">alert("Verifica!!.. Hay Campos Vacios");
		         </script>';
		
	           header('../menu/menu_admin.php');
		}
		else
		{	
			$sql="INSERT INTO  desparacitacion (fecha ,id_mascota ,actividad ,id_propietario) VALUES ('$fecha', '$id_mas', '$motivos', '$vtt');";
			if($result=mysql_query($sql,$link))
			{ 
			  echo '<script language="javascript">alert("Desparasitacion  registrada");
			  var pagina="desparasitacion.php";
			  location.href=pagina				
			  </script>';
			}
			
	               else
	                {
		  	  echo '<script language="javascript">alert("error al registrar Desparasitacion");
			  var pagina="desparasitacion.php";
			  location.href=pagina				
			  </script>';
	                }
	         }	
	}	
?>