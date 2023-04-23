<?php
		include('../conex/conex.php');
		$link=Conectarse();
		$user=$_GET['user'];
	$editar=$_GET['id_editar'];
	
		$sql3="SELECT * from roll WHERE id_roll='$editar'";
		$result=mysql_query($sql3,$link);
		$row3=mysql_fetch_array($result);
	?>

	<html>
	<head>
	<script>
				function confirmar()
					{
						var confirmacion= confirm("seguro desea eliminar Item??!");
						if(confirmacion==true)
						{return true;}
						else
						{return false;}
					}
			</script>
			</head>
			<body>
         
	<table width="22%" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#EBedFF">
   
<form name="form1" method="post" action="../roll/editar.php">



       <tr><td colspan="2"><div align="center" style="font-weight: bold">registrar roll</div></td></tr>
       <tr><td>ingrese roll:</td><td><label><input name="roll" type="text" id="roll" value="<?php echo $row3[1]; ?>"></label></td></tr>
      	<input name="user" type="hidden" value="<?php echo $user; ?>"/>
		<input name="editar" type="hidden" value="<?php echo $editar; ?>"/>
      <tr><td align="Right">
        
        <input type="submit" name="button" id="button" value="actualizar" /></td></tr>

		    </form>
			
				   	</table>
					   <table  width="20%" border="1" align="center" cellpadding="5" cellspacing="0" bgcolor="#EBedFF">
				<tr>
					<td>#</td><td>roll</td>
				</tr>
					
				<?php
				$roll=$_GET['roll'];
				
			 
			 		  $sql3="SELECT roll.roll,roll.id_roll FROM roll WHERE roll.roll='$roll'";
						$result3=mysql_query($sql3,$link);$a=1;
						while($row3=mysql_fetch_array($result3))
							{											   
								echo 
								'<tr>
								<td>'.$a.'</td>					
								<td>'.$row3[0].'</td>
								<td><a href="../roll/borra_roll.php?user='.$user.'&&id_borrar='.$row3[1].'"><img src="../imagen/del.gif" onclick="return confirmar();"></a></td>
								<td><a href="../roll/editar_roll.php?user='.$user.'&&roll='.$roll.'&&id_editar='.$row3[1].'"><img src="../imagen/edit.png"></a></td>	
														
															
								</tr>';$a++;										   
							}
								
						?>
						
				
			</table>
				
				   </body>
				   </html>
                   