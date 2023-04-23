<?php
include('include/conex.php');
$link= Conectarse();
$fecha=$_GET['fecha'];
$hora=$_GET['hora'];
$id_mas=$_GET['mas'];
$mot=$_GET['mot'];
$act=$_GET['act'];
//echo "fecha : ".$fecha." //hora: ".$hora." //mascota: ".$id_mas." //motivo: ".$mot."fecha actual: ".$act;
$reg="INSERT INTO agenda(fecha_fin, hora, id_mascota, motivo, fecha_registro, estado_agenda)
 VALUES ('$fecha','$hora','$id_mas','$mot','$act','1')";
 $comprobar2= mysql_query($reg,$link);
	if(!$comprobar2)
	{
		//echo "erro al registrar";
	}
	else
	{
		echo '<script language="javascript">alert("Registro Completado");
		</script>';
		
	}
	



?>