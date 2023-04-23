<?php
		include('../conex/conex.php');
		$link=Conectarse();
		$user=$_GET['user'];
		$editar=$_GET['id_editar'];
		$sql="SELECT * from est_propi  WHERE id_est_propi='$editar'";
		$result=mysql_query($sql,$link);
		$row=mysql_fetch_array($result);
		
		
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
            <table width="20%" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#EBedFF">
			<form name="form1" method="post" action="editar_estad.php">

       <tr><td colspan="2"><div align="center" style="font-weight: bold">registrar estado</div></td></tr>
       <tr><td>ingrese estado:</td><td><label><input type="text" name="estado" id="estado" value="<?php echo $row[1]; ?>"></label></td></tr>
	   	<input name="user" type="hidden" value="<?php echo $user; ?>"/>
		<input name="editar" type="hidden" value="<?php echo $editar; ?>"/>
      
      <tr><td ><label><input type="submit" name="button" id="button" value="actualizar">
      </div></label></td></tr>
         </form>
                   </table>
				
	

			
				<BR><BR>
					   <table  width="20%" border="1" align="center" cellpadding="5" cellspacing="0" bgcolor="#EBedFF">
				<tr>
					<td>#</td><td>estado</td>
				</tr>
					
				<?php
				$estado=$_GET['estado'];
			 		  $sql3="SELECT est_propi.estado,est_propi.id_est_propi FROM est_propi WHERE est_propi.estado='$estado'";
			 
			 		 
					   
						$result3=mysql_query($sql3,$link);$a=1;
						while($row3=mysql_fetch_array($result3))
							{											   
								echo 
								'<tr>
								<td>'.$a.'</td>					
								<td>'.$row3[0].'</td>
								<td><a href="../estado/borrar_estado.php?user='.$user.'&&id_borrar='.$row3[1].'"><img src="../imagen/del.gif" onclick="return confirmar();"></a></td>
								<td><a href="../estado/editar_estado.php?user='.$user.'&&estado='.$estado.'&&id_editar='.$row3[1].'"><img src="../imagen/edit.png"></a></td>	
														
															
								</tr>';$a++;										   
							}
						?>
						
				
			</table>
				
		<body>
</html>
