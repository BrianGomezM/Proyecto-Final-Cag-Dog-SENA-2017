<?php
include('../include/conex.php');
$link= Conectarse();
$id=$_POST['id'];
$nom=$_POST['nom'];
$sql="UPDATE sespa_veterinaria.especie SET especie = '$nom' WHERE especie.id_especie = '$id';";
$comprobar2= mysql_query($sql,$link);
	if(!$comprobar2)
	{
		//echo "erro al registrar";
	}
	else
	{
		echo '<script language="javascript">alert("Actualizado la especie");
		</script>';
		
		header('../menu/menu_admin.php');
	}

?>