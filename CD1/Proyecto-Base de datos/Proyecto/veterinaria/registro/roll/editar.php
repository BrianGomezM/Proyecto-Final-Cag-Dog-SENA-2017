<?php
												
	include('../conex/conex.php');						
	$link=Conectarse();	
	$user=$_POST['user'];
	$roll=$_POST['roll'];
	$editar=$_POST['editar'];
	
	
$sql="UPDATE  roll SET roll =  '$roll' WHERE  roll.id_roll ='$editar'";
//echo $sql;

$result=mysql_query($sql,$link);
header('location:../roll/registrar_roll.php?user='.$user);
		
?>
