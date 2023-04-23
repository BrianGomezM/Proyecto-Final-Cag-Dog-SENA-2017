<?php
include ('../include/conex.php');
$link= Conectarse();
$id=$_GET['id_reg'];
//echo "".$id;
$slq="DELETE FROM veterinaria.especie WHERE especie.id_especie = '$id'";
$comprobar2= mysql_query($slq,$link);
	if(!$comprobar2)
	{
		//echo "erro al registrar";
	}
	else
	{
		echo '<script language="javascript">alert("Se elimino la especie");
		</script>';
		
		header('../menu/menu_admin.php');
	}

?>