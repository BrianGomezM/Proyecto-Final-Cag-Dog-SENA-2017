<?php
include ('../include/conex.php');
$link= Conectarse();
$id=$_POST['id'];
//echo "id mascota: ".$id;
$n = $_POST['nom'];
$pe = $_POST['peso'];
$es = $_POST['est'];
$p = $_POST['pro'];
//echo "nombre ".$n;
//echo "<br>";
//echo "fecha: ".$f;
//echo "<br>";
//echo "color: ".$c;
//echo "<br>";
//echo "peso ".$pe;
//echo "<br>";
//echo "genero: ".$g;
//echo "<br>";
//echo "especie: ".$e;
//echo "<br>";
//echo "estado: ".$es;
	
$slq="UPDATE sespa_veterinaria.mascota SET nombre = '$n', peso_kg = '$pe' , id_estado = '$es', id_propietario = '$p' WHERE mascota.id_mascota = '$id';";

$comprobar2= mysql_query($slq,$link);
	if(!$comprobar2)
	{
		//echo "erro al registrar";
	}
	else
	{
		echo '<script language="javascript">alert("Actualizado el registro");
		</script>';
		
		header('../menu/menu_admin.php');
	}


?>