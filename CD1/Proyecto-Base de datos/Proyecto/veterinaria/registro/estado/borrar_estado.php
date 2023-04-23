<?php
	include('../conex/conex.php');//NSR
		$link=Conectarse();//NSR
		$borrar=$_GET['id_borrar'];//Recupero Variables
		$user=$_GET['user'];
		$sql="DELETE FROM estado WHERE estado.id_estado ='$borrar'";
		$result=mysql_query($sql,$link);
		header('location:../estado/editar_estado.php?user='.$user);
		
		
	
?>
