<?php 
include ('include/conex.php');
$link= Conectarse();
$msn=$_POST['msn_recu'];
$num=$_POST['num_recu'];
$q2=  mysql_query ('select p_nombre,p_apellido,email from propietario where numero_tipo="'.mysql_real_escape_string($num).'"
 AND email="'.mysql_real_escape_string($msn).'"');
		if ($exite2 = mysql_fetch_object($q2))	
		{
		$d="select p_nombre,p_apellido,email,id_propietario from propietario where numero_tipo='$num'";
		$p1= mysql_query($d,$link);
		$row=mysql_fetch_row($p1);
		$pass= rand(1000, 3000);
		$seguridad= base64_encode($pass);
		$mensaje= "
			<html>
			<head>
			</head>
			<body>
			<div  style='position: relative;'>
			<table border='0' aling='' width=''>
			<tr>
			<th colspan='3'>
			<img src='http://s2.subirimagenes.com/imagen/previo/thump_9555981pass.png' style='position: relative;' 'border='0'  width='732'/></th>
			</tr>
			<tr>
			<td colspan='3'><br>
			<div style=' position: absolute; top: 72px; left: 255px;'>
			<h3 style='color:black; font-size: 15;'>Hola <br> $row[0] $row[1]</h3></div>
			<p>EL sistema te ha asignado la clave $pass<br>Por favor 
			 ingresa ala pagina Cat&Dog para que tan pronto como puedas cambies tu clave
			</td>
			</tr>
			</div>
			<tr>
					<th colspan='3'>Veterinaria Cat&Dog</th>
				</tr>
			</table>
			
			</p>
			
			</body>
			</html>
			";
			$slq="UPDATE `sespa_veterinaria`.`propietario` SET `clave` = '$seguridad' WHERE `id_propietario`='$row[3]'";
				$conf=mysql_query($slq,$link);
					if (!$conf)
					{
						  echo '<script language="javascript">alert("error al asignar clave");
				   
					</script>';
				
						
					}
					else
					{
						
						echo '<script language="javascript">alert("Te hemos enviado un mensaje a tu correo con la nueva clave");
					         var pagina="index.php"
						 location.href=pagina				
						 </script>';
					}
		
		}
		else
		{
		 echo '<script language="javascript">alert("el numero de documento es incorrrecto y/o correo incorrecto");
	         var pagina="index.php"
		 location.href=pagina				
		 </script>';
		}
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$cabeceras .= 'From: Cambio de Clave de CatDog <admin@catdog.com>' . "\r\n";
$asunto="Solicutud de cambio de clave";
mail($msn,$asunto,$mensaje,$headers) 
?>