<?php
include('../include/conex.php');
$link=Conectarse();

$user=$_POST['user'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];

$sql5="UPDATE  propietario SET  celular =  '$telefono',
direccion =  '$direccion' WHERE  propietario.id_propietario ='$user';";

$result=mysql_query($sql5,$link);

	 echo '<script language="javascript">alert("se actualizo exitosamente ");
			window.location.href="usuario.php?user='.$user.'";			
			</script>'; 
	
	

?>
