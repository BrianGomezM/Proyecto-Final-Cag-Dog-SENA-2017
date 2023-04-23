<?php
	include('../../include/conex.php');
	$link=Conectarse();
	$fecha=$_POST['fecha'];
	$id=$_POST['mas'];
	$user=$_POST['user'];
	
	
	header('Location:../historia.php?mas='.$id.'&user='.$user.'&fecha='.$fecha);
	
?>