<?php
include('include/conex.php');
$link= Conectarse();
$user=$_GET['user'];
$user=base64_decode($user);
//echo "id del usuario: ".$user;
$online="UPDATE sespa_veterinaria.propietario SET online = '2' WHERE propietario.id_propietario ='$user'";
$conf=mysql_query($online,$link);
	if (!$conf)
	{
		echo '<script language="javascript">alert("error al cerrar secion");</script>';
		require('index.php');
	}
	else
	{
	//echo "actualizo es estado a : ".$row[12];
		header('Location:index.php');
	}
?>