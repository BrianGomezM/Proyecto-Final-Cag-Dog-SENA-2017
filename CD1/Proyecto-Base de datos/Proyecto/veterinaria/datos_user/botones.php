<?php
include('../include/conex.php');
$link=Conectarse();
	$id=$_POST['mas'];
	$user=$_POST['user'];
	

$sql3="SELECT historia_clinica.fecha FROM historia_clinica where id_mascota='$id'";
	$query3=mysql_query($sql3,$link);
	$row3=mysql_fetch_array($query3);
	if ($row3[0]=="")
	{
		 echo '<script language="javascript"> alert("Su mascota aun no tiene registros de historia clinica");
				   	
				   	window.location.href="historia.php?user='.$user.'";			
					</script>';

		}
		else
		{header('Location:historia.php?mas='.$id.'&user='.$user); }
	
?>