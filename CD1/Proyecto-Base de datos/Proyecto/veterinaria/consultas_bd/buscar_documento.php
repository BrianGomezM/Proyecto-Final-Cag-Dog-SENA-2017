<?php
include ('../include/conex.php');
$link= Conectarse();
$cedula=$_GET['cedula'];
$propietario="SELECT id_propietario FROM propietario WHERE numero_tipo='$cedula'";
$confir=mysql_query($propietario,$link);
if ($ob=mysql_fetch_object($confir))
{
$dt="SELECT id_propietario FROM propietario WHERE numero_tipo='$cedula'";
$confir2=mysql_query($dt,$link);
$row=mysql_fetch_row($confir2);
header('Location:../Completa/historia Clinica.php?propi='.$row[0]);	
}
else
{
	 echo '<script language="javascript">alert("numero de documento no existe");
	
					</script>';
}
?>