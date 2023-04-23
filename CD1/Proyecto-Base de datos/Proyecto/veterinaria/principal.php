<?php
header("Content-Type: text/html;charset=utf-8");
include('include/conex.php');
$link= Conectarse();
$user=$_GET['user'];
$user=base64_decode($user);
//echo "id del usuario: ".$user;

$datos= "Select * from propietario WHERE id_propietario='$user'";
$consulta=mysql_query($datos,$link);
$row = mysql_fetch_array($consulta);
$fecha = date("Y-m-d");
$d="UPDATE sespa_veterinaria.agenda SET fecha_registro = '$fecha' WHERE DATEDIFF(fecha_fin,fecha_registro)='7'";
$conf=mysql_query($d,$link);
	if (!$conf)
	{
		echo '<script language="javascript">alert("error inesperado");</script>';
		require('index.php');
	}
else
{
	
	if ($row[13]==1)
	{
	include('contenido.php');	

	}
	else
	{
	//echo "id del usuario: ".$user;
	header('Location:index.php');
	}
}

?>
