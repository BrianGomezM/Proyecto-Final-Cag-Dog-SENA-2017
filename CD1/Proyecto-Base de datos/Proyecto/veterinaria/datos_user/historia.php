<?php
	include('../include/conex.php');
	$link=Conectarse();
	
	if (isset($_GET['user']))
	{
	$user=$_GET['user'];
	$sql="SELECT propietario.p_nombre from propietario WHERE id_propietario='$user'";
	$result=mysql_query($sql, $link);
	$row=mysql_fetch_array($result);
	$sql2="SELECT id_mascota, nombre FROM mascota WHERE id_propietario='$user'";
	$result2=mysql_query($sql2,$link);
	}
	
	if (isset($_GET['mas']))
	{
	$user=$_GET['user'];
	$id=$_GET['mas'];
	$sql3="SELECT fecha FROM historia_clinica WHERE id_mascota='$id'";
	$result3=mysql_query($sql3,$link);
	}
	
	
	if (isset($_GET['fecha']))
	{
	$user=$_GET['user'];
	$id=$_GET['mas'];
	$fecha=$_GET['fecha'];
	$sql4="SELECT motivos, piel_anexos, ganglios_linfaticos, aparato_respiratorio, aparato_reproductor, mucosa, plan_sanitario, organos_sentidos, aparato_neurologico, signos_clinicos, examen_muscoesqueletico, aparato_cardiovascular, aparato_digestivo, frecuencia_cardiaca, frecuencia_respiratoria, pulso, temperatura_rectal, phc, caprologia, citologias, quimicass_serica, imagenologia, rspaje_koh, uroanalisis, patologias, test_diagnostico, d_diferencial, d_definitivo, tratamiento FROM historia_clinica WHERE fecha='$fecha'AND id_mascota='$id'";
	$result4=mysql_query($sql4, $link);
	$row5=mysql_fetch_array($result4);
	}
	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<link rel="stylesheet" type="text/css" href="mostrar_historia.css"/>
		<title>HISTORIA CLINICA</title>
	</head>  
	<body>
		<center>
			<table >
				<tr>
					<th >
					 <div class="titulo"><center>Usuario</center></div>
						
					</th>
					<th>
					 <div class="titulo"><center>	Mascota(s)</center></div>
					
					</th>
					<th>
					<div class="titulo"><center>Fecha del historial</center></div>
					</th>
				</tr>
				<tr>
				<td colspan="3">
				<br>
				</td>
				
				</tr>
				<tr>
					<td >
						<?php if(isset($row[0])){echo $row[0];}?>&nbsp
					</td>
					
					<td rowspan="2">
						<form action="botones.php" method="POST" name="descargar">
						<div class="styled-select">
							<select name="mas"   id="mas" onchange="this.form.submit();">
								<option value="0" id="mas">Seleccione su Mascota</option>
									
									
									<?php
									
										while($row2=mysql_fetch_array($result2))
											{	
												if ($id==$row2[0])
												{
													$ver='selected="selected"';
												}
												else
												{
													$ver="";
												}	
																								
												echo "<option value='".$row2['0']."' ".$ver.">".$row2[1]."</option>";	
											}
														
									?>	
							</select>
							</div>
							<input type="hidden" name="user" id="user" value="<?php if (isset($user)){echo $user;} ?>">
							
							
						</form>				
					</td>
					<td>
					<form action="historia_usuario/fecha.php" method="POST" name="fecha">
					<div class="styled-select">
						<select name="fecha"   id="fecha" onchange="this.form.submit();">
							<option value="0" id="fecha">Seleccione fecha</option>
								<?php
									while($row4=mysql_fetch_array($result3))
										{		
											if ($fecha==$row4[0])
											{
												$ver='selected="selected"';
												
											}
											else
											{
												$ver="";
											}											
											echo '<option value="'.$row4[0].'" '.$ver.'>'.$row4[0].'</option>';	
										}
								?>	
						</select>
						</div>
						<input type="hidden" name="user" id="user" value="<?php if (isset($user)){echo $user;} ?>">
						<input type="hidden" name="mas" id="mas" value="<?php if (isset($id)){echo $id;} ?>">
					</form>
					</td>
				</tr>
			</table>
		</center>
		<br><br>
		<center>	
			<?php include('historia_usuario/historia_Clinica.php');?>
			</center>	
	</body>
</html>