<?php
	include('../conex/conex.php');//NSR
		$link=Conectarse();//NSR
		$borrar=$_GET['id_borrar'];//Recupero Variables
		$user=$_GET['user'];
		$sql="DELETE FROM tipo_document WHERE tipo_document.id_tipo_docu ='$borrar'";
		$result=mysql_query($sql,$link);
		header('location:../tipo_documento/editar_tipodoc.php?user='.$user);
		
		
	
?>