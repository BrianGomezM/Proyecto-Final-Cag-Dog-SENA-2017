<?php
include ('../include/conex.php');
$link= Conectarse();
$id=$_GET['id_reg'];
//echo "".$id;
$slq="DELETE FROM veterinaria.propietario WHERE propietario.id_propietario = '$id'";
$comprobar2= mysql_query($slq,$link);
	if(!$comprobar2)
	{
		//echo "erro al registrar";
	}
	else
	{
		echo '<script language="javascript">alert("Se elimino el propietario");
		</script>';
		
		header('../menu/menu_admin.php');
	}
?>