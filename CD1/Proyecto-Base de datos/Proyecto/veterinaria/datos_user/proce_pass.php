<?php
include('../include/conex.php');
$link= Conectarse();
$id=$_POST['dp'];
$pss=$_POST['pasvi'];
$seguridad=base64_encode($pss);
$pssr=$_POST['passn'];
$nueva=base64_encode($pssr);
$pssr1=$_POST['passnr'];
//echo "id del usuario :".$id;
//echo "<br>";
//echo "clave actual: ".$pss;
//echo "<br>";
//echo "clave nueva: ".$pssr;
//echo "<br>";
//echo "confirmar clave nueva: ".$pssr1;
$q2=  mysql_query ('select * from propietario where clave="'.mysql_real_escape_string($seguridad).'"');
		if ($exite2 = mysql_fetch_object($q2))
		{
			if($pssr==$pssr1)
			{
				//echo "las contraseñas son iguales";
				$slq="UPDATE sespa_veterinaria.propietario SET clave = '$nueva' WHERE id_propietario='$id'";
				$conf=mysql_query($slq,$link);
					if (!$conf)
					{
						  echo '<script language="javascript">alert("error al actualizar clave");
				   
					</script>';
				
						
					}
					else
					{
					  echo '<script language="javascript">alert("Haz cambiado con exito tu clave");
				   
					</script>';
					}
				
			}
			else
			{
					echo '<script language="javascript">alert("la nueva clave no coincide");
			</script>';
			}
			
		}
		else
		{
			echo '<script language="javascript">alert("la clave actual es incorrecta");
			</script>';
			
		}
			
?>