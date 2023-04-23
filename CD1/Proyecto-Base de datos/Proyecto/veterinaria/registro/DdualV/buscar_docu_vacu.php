<?php
include('../conex/conex.php');
$link= Conectarse();
$cedula=$_GET['cedula'];
$fecha=$_GET['fecha'];

			

$propietario="SELECT id_propietario FROM propietario WHERE numero_tipo='$cedula'";
$confir=mysql_query($propietario,$link);
if ($ob=mysql_fetch_object($confir))
{
	$dt="SELECT id_propietario FROM propietario WHERE numero_tipo='$cedula'";
$confir2=mysql_query($dt,$link);
$row=mysql_fetch_row($confir2);
header('Location:vacunacion.php?propi='.$row[0].'&fecha='.$fecha);
}
else
{
	 echo '<script language="javascript">alert("Numero de documento no existe");
				   	var pagina="vacunacion.php";
				   	location.href=pagina				
					</script>';
						
}
	
?>