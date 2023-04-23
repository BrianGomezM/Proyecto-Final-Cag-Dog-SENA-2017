<?php
include('../conex/conex.php');
$link= Conectarse();
$roll=$_POST['roll'];
$propietario="SELECT roll.roll FROM roll WHERE roll='$roll'";

$confir=mysql_query($propietario,$link);
if ($ob=mysql_fetch_object($confir))
{
$dt="SELECT   roll.roll FROM  roll WHERE roll='$roll'";
$confir2=mysql_query($dt,$link);
$row=mysql_fetch_row($confir2);
header('Location:../roll/editar_roll.php?user='.$row[0].'&&roll='.$roll);	
}
else
{
	 echo '<script language="javascript">alert("el roll ingresado  no existe");
				   	var pagina="../roll/registrar_roll.php"
				   	location.href=pagina				
					</script>';
}
?>