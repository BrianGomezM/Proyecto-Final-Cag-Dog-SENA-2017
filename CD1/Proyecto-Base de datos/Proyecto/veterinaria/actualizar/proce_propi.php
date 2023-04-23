<?php
include ('../include/conex.php');
$link= Conectarse();
$id=$_POST['id'];
$p_n=$_POST['p_n'];
$s_n=$_POST['s_n'];
$p_a=$_POST['p_a'];
$s_a=$_POST['s_a'];
$tipo=$_POST['tipo'];
$num_d=$_POST['num_d'];
$cel=$_POST['cel'];
$direccion=$_POST['direccion'];
$msn=$_POST['msn'];
$roll=$_POST['roll'];
$est=$_POST['est'];
//echo "id del propietaro: ".$id;
//echo "<br>";
//echo "primer nombre: ".$p_n;
//echo "<br>";
//echo "segundo nombre:".$s_n;
//echo "<br>";
//echo "primer apellido: ".$p_a;
//echo "<br>";
//echo "segundo apellido: ".$s_a;
//echo "<br>";
//echo "tipo de documento: ".$tipo;
//echo "<br>";
//echo "numero de documento: ".$num_d;
//echo "<br>";
//echo "celular".$cel;
//echo "<br>";
//echo "direcion: ".$direccion;
//echo "<br>";
//echo "correo: ".$msn;
//echo "<br>";
//echo "id roll: ".$roll;
//echo "<br>";
//echo "id estado: ".$est;

$ac="UPDATE sespa_veterinaria.propietario SET p_nombre = '$p_n', s_nombre = '$s_n', p_apellido = '$p_a', s_apellido = '$s_a', id_tipo_docu = '$tipo', numero_tipo = '$num_d', celular = '$cel', email='$msn', direccion = '$direccion', id_roll = '$roll', id_est_propi = '$est' WHERE propietario.id_propietario = '$id'";
$comprobar2= mysql_query($ac,$link);
	if(!$comprobar2)
	{
		echo '<script language="javascript">alert("error al Actualizado el registro");
		</script>';
	}
	else
	{
		echo '<script language="javascript">alert("Actualizado el registro");
		</script>';
		
		header('../menu/menu_admin.php');
	}

?>