<?php
include ('../include/conex.php');
$link= Conectarse();
$id=$_GET['id_reg'];
//echo "".$id;
$slq="DELETE FROM agenda WHERE agenda.id_agenda = '$id'";
$comprobar2= mysql_query($slq,$link);
	if(!$comprobar2)
	{
		//echo "erro al registrar";
	}
	else
	{
		echo '<script language="javascript">alert("Se elimino la actividad");
		</script>';
		
		header('../menu/menu_admin.php');
	}
?>