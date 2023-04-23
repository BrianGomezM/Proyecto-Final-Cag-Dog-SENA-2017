<?php
												//Vacunacion Almacenar Informacion variables /						
	include('../conex/conex.php');						
	$link=Conectarse();	
	$editar=$_GET['editar'];
	$motivos=$_GET['motivos'];
	$vete=$_GET['vete'];	
	$fecha=$_GET['fecha'];
	$id_mas=$_GET['id_mas'];
	$id_vacuna=$_GET['id_vacuna'];
	if ($editar==1)
	{
	$sqleditar="UPDATE vacunacion SET fecha = '$fecha', motivos = '$motivos', vete = '$vete' WHERE vacunacion.id_vacuna = '$id_vacuna'";
	if($resulteditar=mysql_query($sqleditar,$link))
			{header('location:vacunacion.php?Ediccion_Correcta=1');}
		else  
			{header('location:vacunacion.php?Ediccion_Incorrecta=2');}
	}
        else
	{
		$sql="INSERT INTO  vacunacion (fecha ,id_mascota ,actividad ,id_propietario) VALUES ('$fecha', '$id_mas', '$motivos', '$vete')";
		if($result=mysql_query($sql,$link))
		{ 
		  echo '<script language="javascript">alert(" Vacunaci&oacute;n Registrada ");
		  var pagina="vacunacion.php";
		  location.href=pagina				
		  </script>';
		}
		
               else
                {
	  	  echo '<script language="javascript">alert("Error al registrar Vacunaci&oacute;n");
		  var pagina="vacunacion.php";
		  location.href=pagina				
		  </script>';
                }	
	}	
?>