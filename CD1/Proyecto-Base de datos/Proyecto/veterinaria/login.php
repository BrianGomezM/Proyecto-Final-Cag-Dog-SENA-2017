<?php
include ('include/conex.php');
$link= Conectarse();
$msn=$_POST['msn'];
$pass=$_POST['pass'];
$seguridad= base64_encode($pass);
//echo "correo: ".$msn;
//echo "<br>";
//echo "clave: ".$pass;
$q=  mysql_query ('select * from propietario where email="'.mysql_real_escape_string($msn).'" AND clave="'.mysql_real_escape_string($seguridad).'" ');
if ($exite = mysql_fetch_object($q))
{
	$id ="SELECT id_propietario,online FROM propietario WHERE email='$msn' AND clave='$seguridad'";
	$result= mysql_query($id,$link);
	$row = mysql_fetch_array( $result);
	if ($row[1]==2)
		{
			$online="UPDATE sespa_veterinaria.propietario SET online = '1' WHERE propietario.id_propietario ='$row[0]'";
			$conf=mysql_query($online,$link);
				if (!$conf)
					{
						echo '<script language="javascript">alert("error al actualizar estado");
						var pagina="index.php"
						location.href=pagina				
						</script>';
					}
					else
					{
						//echo "actualizo es estado a : ".$row[13];
						$letra="seguridad";
						$cod=base64_encode($letra);
					$str= base64_encode($row[0]);
					//echo "codificado: ".$cod;
					
						//header('Location:principal.php?user='.$row[0].'&user='.$row[0]);
						header('Location:principal.php?user='.$str.'&us='.$cod);
					}
				
		}
	if ($row[1]==1)
		{
		    //echo '<script language="javascript">alert("ya haz ingresado");
		   	//var pagina="index.php"
		   	//location.href=pagina				
			//</script>';
			//echo "actualizo es estado a : ".$row[13];
			$letra="seguridad";
			$cod=base64_encode($letra);
			$str= base64_encode($row[0]);
			//echo "codificado: ".$cod;
			//header('Location:principal.php?us='.$str.'&user='.$num);
			header('Location:principal.php?user='.$str.'&us='.$cod);
   		}
}
else
{
		echo '<script language="javascript">alert("el correo no existe o La clave es incorrecta");
		var pagina="index.php"
		location.href=pagina				
		</script>';
}
?>