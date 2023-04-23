<?php
	include('../conex/conex.php');//NSR
		$link=Conectarse();//NSR
		$borrar=$_GET['id_borrar'];//Recupero Variables
		$user=$_GET['user'];
		$sql="DELETE FROM roll WHERE roll.id_roll ='$borrar'";
		$result=mysql_query($sql,$link);
		header('location:../roll/editar_roll.php?user='.$user);
		
		
	
?>


