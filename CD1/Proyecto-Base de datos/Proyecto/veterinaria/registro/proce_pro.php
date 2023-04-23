<?php
include ('../include/conex.php');
$link= Conectarse();
$p_n=$_POST['pn'];
$s_n=$_POST['sn'];
$p_a=$_POST['pa'];
$s_p=$_POST['sp'];
$t_d=$_POST['docu'];
$n=$_POST['num'];
$p=$_POST['pass'];
$c=$_POST['cel'];
$d=$_POST['direc'];
$co=$_POST['msn'];
//echo "primer nombre: ".$p_n;
//echo "<br>";
//echo "segundo nombre: ".$s_n;
//echo "<br>";
//echo "primer apellido: ".$p_a;
//echo "<br>";
//echo "segundo apellido: ".$s_p;
//echo "<br>";
//echo "tipo de documento: ".$t_d;
//echo "<br>";
//echo "numero :".$n;
//echo "<br>";
//echo "clave: ".$p;
//echo "<br>";
//echo "celular: ".$c;
//echo "<br>";
//echo "direccion: ".$d;
//echo "<br>";
//echo "correo: ".$co;
$sql="INSERT INTO propietario(id_propietario, p_nombre, s_nombre, p_apellido, s_apellido, id_tipo_docu, numero_tipo, clave, celular, direccion, email, id_roll, id_est_propi, online) VALUES ('','$p_n','$s_n','$p_a', '$s_p','$t_d','$n','$p','$c','$d','$co','2','1','1')";
$conf=mysql_query($sql,$link);
if (!$conf)
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

?>