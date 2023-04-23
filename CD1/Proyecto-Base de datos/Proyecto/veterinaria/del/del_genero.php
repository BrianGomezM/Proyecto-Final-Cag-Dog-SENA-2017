<?php
include ('../include/conex.php');
$link= Conectarse();
$id=$_GET['id_reg'];
//echo "".$id;
$slq="DELETE FROM sespa_veterinaria.genero WHERE genero.id_genero = '$id'";
$comprobar2= mysql_query($slq,$link);
	if(!$comprobar2)
	{
		//echo "erro al registrar";
	}
	else
	{
		echo '<script language="javascript">alert("Se elimino el genero");
		</script>';
		
		header('../fondo.php');
	}

?>