<?php
include ('../include/conex.php');
$link= Conectarse();
$id=$_GET['id_reg'];
//echo "id del registro: ".$id;
$sql="DELETE FROM veterinaria.desparacitacion WHERE desparacitacion.id_despa ='$id'";
$comprobar2= mysql_query($sql,$link);
	if(!$comprobar2)
	{
		echo "error al eliminar la desparacitacion";
	}
	else
	{
		echo '<script language="javascript">alert("Registro eliminado");
	     var pagina="../fondo.php"
	     location.href=pagina				
	     </script>';
	}
?>