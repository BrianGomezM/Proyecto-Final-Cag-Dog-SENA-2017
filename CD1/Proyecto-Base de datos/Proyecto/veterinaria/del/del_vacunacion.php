<?php
include ('../include/conex.php');
$link= Conectarse();
$id=$_GET['id_reg'];
//echo "".$id;
$slq="DELETE FROM veterinaria.vacunacion WHERE vacunacion.id_vacuna = '$id'";
$comprobar2= mysql_query($slq,$link);
	if(!$comprobar2)
	{
		//echo "erro al registrar";
	}
	else
	{
		echo '<script language="javascript">alert("Registro eliminado");
	     var pagina="../fondo.php"
	     location.href=pagina				
	     </script>';;
	}
?>