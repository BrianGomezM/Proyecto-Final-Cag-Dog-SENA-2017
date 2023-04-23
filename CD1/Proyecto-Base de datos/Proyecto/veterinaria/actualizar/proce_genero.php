<?php
include('../include/conex.php');
$link= Conectarse();
$id=$_POST['id'];
$nom=$_POST['nom'];
$sql="UPDATE sespa_veterinaria.genero SET genero = '$nom' WHERE genero.id_genero = '$id';";
$comprobar2= mysql_query($sql,$link);
	if(!$comprobar2)
	{
		//echo "erro al registrar";
	}
	else
	{
		echo '<script language="javascript">alert("Actualizado el genero");
		</script>';
		
		header('../menu/menu_admin.php');
	}

?>