<?php
include('../conex/conex.php');
$link=Conectarse();

$documento=$_GET['documento'];

$user=$_POST['user'];
$editar=$_POST['editar'];

$estado=$_POST['estado'];
$roll=$_POST['roll'];

$sql="UPDATE propietario SET 

id_est_propi= '$estado',
id_roll= '$roll' WHERE  propietario.id_propietario ='$editar'";

	//echo $sql;

$result2=mysql_query($sql,$link); echo '<script language="javascript">alert("el registro se actualizo exitosamente ");
														var pagina="../registro_propietario/registro_usuario.php";
														location.href=pagina				
														</script>';
	 
//header('Location:../registro_propietario/registro_usuario.php?user='.$user);


?>

