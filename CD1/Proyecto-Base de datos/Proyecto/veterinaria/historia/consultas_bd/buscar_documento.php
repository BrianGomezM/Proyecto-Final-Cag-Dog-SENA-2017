<?php
include('../Conexion_BD/conex.php');
$link= Conectarse();
$cedula=$_GET['cedula'];
$fecha=$_GET['fecha'];

			

$propietario="SELECT id_propietario FROM propietario WHERE codigo='$cedula'";
$confir=mysql_query($propietario,$link);
if ($ob=mysql_fetch_object($confir))
{
	$dt="SELECT id_propietario FROM propietario WHERE codigo='$cedula'";
$confir2=mysql_query($dt,$link);
$row=mysql_fetch_row($confir2);
header('Location:../Completa/historia Clinica.php?propi='.$row[0].'&fecha='.$fecha);
}
else
{
	 echo '<script language="javascript">alert("numero de documento no existe");
				   	var pagina="../Completa/historia Clinica.php";
				   	location.href=pagina				
					</script>';
						
}
	
?>