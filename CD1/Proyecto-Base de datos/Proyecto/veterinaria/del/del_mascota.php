<?php
include ('../include/conex.php');
$link= Conectarse();
$id=$_GET['id_reg'];
//echo "".$id;
$slq="DELETE FROM sespa_veterinaria.mascota WHERE mascota.id_mascota = '$id'";
$comprobar2= mysql_query($slq,$link);
	if(!$comprobar2)
	{
		echo '<script language="javascript">alert("Error al eliminar");
		</script>';
	}
	else
	{
		echo '<script language="javascript">alert("Se elimino la mascota");
		</script>';
		
		header('../fondo.php');
	}
?>