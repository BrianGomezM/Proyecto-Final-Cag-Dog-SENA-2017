<?php
include('../include/conex.php');
$link= Conectarse();
$nomb=$_POST['nom'];
//echo "nombre de la especie: ".$nomb;
$q=  mysql_query ('select especie from especie where especie="'.mysql_real_escape_string($nomb).'"');
if ($exite = mysql_fetch_object($q))
{
		echo '<script language="javascript">alert("Ya existe la especie");
		</script>';
		
		header('../fondo.php');
}
else
{
$q2="INSERT INTO especie (id_especie, especie) VALUES ('', '$nomb');";
$comprobar2= mysql_query($q2,$link);
	if(!$comprobar2)
	{
		echo '<script language="javascript">alert("Error al Registrar");
		</script>';
		
		header('../fondo.php');
	}
	else
	{
		echo '<script language="javascript">alert("Registro Completado");
		</script>';
		
		header('../fondo.php');
	}
}
?>