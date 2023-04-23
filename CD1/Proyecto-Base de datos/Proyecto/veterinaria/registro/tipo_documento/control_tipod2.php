<?php
	include('../conex/conex.php');						
	$link=Conectarse();	
	$user=$_POST['user'];
	$tipod=$_POST['tipod'];
	$editar=$_POST['editar'];
	
	
$sql="UPDATE  tipo_document SET tipo =  '$tipod' WHERE  tipo_document.id_tipo_docu ='$editar'";

	$result=mysql_query($sql,$link);
	header('location:../tipo_documento/registrar_tipod.php?user='.$user);
?>