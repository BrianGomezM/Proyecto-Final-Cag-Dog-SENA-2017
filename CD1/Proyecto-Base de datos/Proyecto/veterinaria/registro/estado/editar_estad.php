<?php
												
	include('../conex/conex.php');
							
	$link=Conectarse();	
	$user=$_POST['user'];
	$estado=$_POST['estado'];
	$editar=$_POST['editar'];	
	
$sql="UPDATE  est_propi SET estado =  '$estado' WHERE  est_propi.id_est_propi ='$editar'";
	
if($result=mysql_query($sql,$link))
 {header('location:registrar_estado.php?user1='.$user);}
else  
   {header('location:../estado/registrar_estado.php.php?key=3');}


		
?>