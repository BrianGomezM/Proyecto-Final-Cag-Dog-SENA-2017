<?php
include ('../include/conex.php');
$link= Conectarse();
//datos de vacunacion
$slq="SELECT propietario.id_propietario,mascota.id_mascota,propietario.p_nombre,propietario.p_apellido ,
mascota.nombre,vacunacion.fecha,vacunacion.actividad,vacunacion.id_vacuna FROM propietario,mascota,vacunacion 
WHERE mascota.id_mascota=vacunacion.id_mascota AND mascota.id_propietario=propietario.id_propietario";
$query=mysql_query($slq,$link);$cant=1;
//-----------------------------------------------------------------------------------------------------

//datos del propietario
$slq2="SELECT id_propietario, p_nombre,p_apellido FROM propietario";
$query2=mysql_query($slq2,$link);

if (!$query AND !$query2)
{
	echo '<script language="javascript">alert("error");			
	</script>';
}
else
{
	include('cons_vacu_datos.php');
}
?>