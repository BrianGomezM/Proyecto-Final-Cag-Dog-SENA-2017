<?php
header("Content-Type: text/html;charset=utf-8");
include ('../include/conex.php');
$link= Conectarse();
$n = $_POST['nom'];
$f = $_POST['fecha'];
$c = $_POST['color'];
$p = $_POST['peso'];
$r = $_POST['raza'];
$g = $_POST['gen'];
$e = $_POST['esp'];
$es = $_POST['est'];
$pro = $_POST['pro'];

//echo "nombre ".$n;
//echo "<br>";
//echo "fecha de nacimiento: ".$f;
//echo "<br>";
//echo "color: ".$c;
//echo "<br>";
//echo "peso ".$p;
//echo "<br>";
//echo "genero: ".$g;
//echo "<br>";
//echo "especie: ".$e;
//echo "<br>";
//echo "estado: ".$es;
//echo "<br>propietario: ".$pro;
//echo "<br>raza: ".$r;
if($g=="null" and $e=="null" and $es=="null" and $pro=="null")
{
	echo '<script language="javascript">alert("Hay Campos Vacios");
		</script>';
		
	header('../menu/menu_admin.php');
}
else
{
	$fecha = date("Y-m-d");
	$reg="INSERT INTO mascota (id_mascota, nombre, fecha_nacimiento, color, peso_kg, raza, id_genero, id_especie, id_estado, id_propietario, fecha_actu)
 VALUES ('','$n', '$f', '$c', '$p', '$r', '$g', '$e','$es','$pro','$fecha');";
$comprobar2= mysql_query($reg,$link);
	if(!$comprobar2)
	{
		echo '<script language="javascript">alert("Error al Registrar");
		</script>';
		
		header('../fondo.php');
	}
	else
	{
		echo '<script language="javascript">alert("Registro Completado");
		</script>';
		
		header('../fondo.php');
	}
}

?>