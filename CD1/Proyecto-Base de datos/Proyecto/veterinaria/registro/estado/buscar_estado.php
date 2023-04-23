<?php
include('../conex/conex.php');
$link= Conectarse();
$estado=$_POST['estado'];
$propietario="SELECT est_propi.estado FROM est_propi WHERE estado='$estado'";

$confir=mysql_query($propietario,$link);
if ($ob=mysql_fetch_object($confir))
{
$dt="SELECT est_propi.estado FROM  est_propi WHERE estado='$estado'";
$confir2=mysql_query($dt,$link);
$row=mysql_fetch_row($confir2);
header('Location:../estado/editar_estado.php?user='.$row[0].'&&estado='.$estado);	
}
else
{
	 echo '<script language="javascript">alert("el estado ingresado no existe");
				   	var pagina="../estado/registrar_estado.php"
				   	location.href=pagina				
					</script>';
}
?>