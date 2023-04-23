<?php
		include('../conex/conex.php');//NSR
		$link=Conectarse();//NSR
		$borrar=$_GET['id_borrar'];//Recupero Variables
		$user=$_GET['user'];
		$sql="DELETE FROM veterinaria.desparacitacion WHERE desparacitacion.id_despa ='$borrar'";
		$comprueba=mysql_query($sql,$link);
		if(!$comprueba)
		{
			//echo "no se pudo eliminar el registro de desparasitacion";
		}
		else
		{
			echo '<script language="javascript">alert("se elimino el registro de desparasitacion");</script>';
			header('location:desparasitacion.php?user='.$user);
		}
		
?>