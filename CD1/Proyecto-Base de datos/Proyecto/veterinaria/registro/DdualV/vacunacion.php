<?php
	include('../conex/conex.php');
	$link= Conectarse();
	

	if (isset($_GET['id_vacuna']))
	{
		$id_despa=$_GET['id_vacuna'];
		$editar=$_GET['editar'];
		$sql="SELECT vacunacion.fecha, propietario.numero_tipo,  propietario.p_nombre, propietario.s_nombre, propietario.p_apellido, propietario.s_apellido, propietario.celular, mascota.nombre, especie.especie , mascota.raza, mascota.fecha_nacimiento,  vacunacion.actividad FROM vacunacion, propietario, mascota, especie WHERE vacunacion.id_vacuna='$id_vacuna' AND vacunacion.id_mascota = mascota.id_mascota AND mascota.id_especie = especie.id_especie AND mascota.id_propietario = propietario.id_propietario";
		$query4=mysql_query($sql,$link);
		$row4=mysql_fetch_row($query4);	
	}
	
	
	if(isset($_GET['propi']))
	{
		$propi=$_GET['propi'];
		$dapro="SELECT p_nombre, p_apellido, numero_tipo, celular, s_apellido FROM propietario WHERE id_propietario='$propi'";
		$query=mysql_query($dapro,$link);
		$row=mysql_fetch_row($query);
		$consultar_mascotas="SELECT id_mascota, nombre FROM mascota WHERE id_propietario = '$propi'";
		$query=mysql_query($consultar_mascotas,$link);
	}

	if(isset($_GET['mas']))
	{
		$id=$_GET['mas'];
		$slq2="SELECT especie.especie , mascota.raza, mascota.fecha_nacimiento FROM mascota,especie
		WHERE mascota.id_mascota='$id' AND mascota.id_especie=especie.id_especie";
		$query2=mysql_query($slq2,$link);
		$row2=mysql_fetch_array($query2);
	}

	
	$fecha = date("Y-m-d");
?>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style>
.letras{
     font-family: "Arial";
    font-size: 14;
	
}
.jv{
 font-family: "Arial";
    font-size: 12;
  color: #ffffff;
  background-color: #238276;

}
table {     font-family: "Arial",font-size: 12;;
    font-size: 12px;    margin: 40px;     widtd: 480px; text-align: left;    border-collapse: collapse; }

td {     font-size: 13px;     font-weight: normal;     padding: 8px;     background: #b9c9fe;
    border-top: 4px solid #aabcfe;    border-bottom: 1px solid #fff; color: #039; }

td {    padding: 8px;     background: #e8edff;     border-bottom: 1px solid #fff;
    color: #669;    border-top: 1px solid transparent; }

tr:hover td { background: #d0dafd; color: #339; }
</style>
	</head>
    <body>
	<center>
	<table >
        <div class="contenedor">
            <form action="boton_vacuna.php" method="POST" name="descargar">       
            
					<tr>
					  <td class="jv" colspan="5">&nbsp;Fecha:&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="fecha"  title="fecha" required style="width:140px" <?php if(isset($fecha)){echo "value='".$fecha."'";}?><?php if(isset($row4[0])){echo "value='".$row4[0]."'";}?>/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="letras" > REGISTRAR VACUNACION</label></td>
					</tr>
					<tr>
						<td colspan="2" ><br>&nbsp;Numero de documento: </td>
						<td colspan="2"><br>&nbsp; Propietario:</td>
						<td><br>&nbsp; Celular: </td>
					</tr>
					<tr>
						<td><input type="number" name="cedula" required title="cedula" <?php if(isset($editar)){ if($editar==1){ echo"readonly=readonly";}} ?>  <?php if(isset($row['2'])){ echo "value='".$row['2']."'";}?><?php if(isset($row4[1])){echo "value='".$row4[1]."'";}?>/></td>
						<td align="center"><input class="submit" type="submit" name="buscar" value="Buscar"  /><input type="hidden" name="editar" id="editar" value="<?php if (isset($editar)){echo $editar;} ?>"/></td>
						<td colspan="2">
							<input type="text" readonly="readonly" title="propietario" style="width:360px"<?php if(isset($row['0'])){echo "value='".$row['0']." ".$row['1']." ".$row['6']."'";}?><?php if(isset($row4[2])){echo "value='".$row4[2]." ".$row4[3]." ".$row4[4]." ".$row4[5]."'";}?>>
						</td>
						<td>
							<input type="text" style="width:140px" readonly="readonly" title="celular" <?php if(isset($row['3'])){echo "value='".$row['3']."'";}?><?php if(isset($row4[6])){echo "value='".$row4[6]."'";}?>/>
						</td>
					</tr>
                <tr>
					<td><br> &nbsp; Paciente: </td>
					<td><br> &nbsp; Raza:</td>
					<td><br> &nbsp; Especie: </td>
					<td><br> &nbsp; Edad: </td>
					<td><br>&nbsp; Veterinario: </td>
					
				</tr>
					<tr>
						<td>
							<select name="mas"   id="mas" style="width:170px" onchange="this.form.submit();">
							<option value="0" id="mas">Seleccione</option>
								<?php
										while($row=mysql_fetch_array($query))
										{		
											if ($id==$row[0])
												{
													$ver='selected="selected"';
												}
												else
												{
													$ver="";
												}											
												echo "<option value='".$row['0']."' ".$ver.">".$row[1]."</option>";	
										}
									?>	
							</select>
							<input type="hidden" name="user" id="user" value="<?php if (isset($propi)){echo $propi;} ?>"/>
						</td>
						<td>
							<input type="text" style="width:150px" readonly="readonly" title="raza" <?php if (isset($row2['1'])){ echo "value='".$row2['1']."'";}?><?php if(isset($row4[11])){echo "value='".$row4[11]."'";}?>/>
						</td>
						<td>
							<input type="text" style="width:170px" readonly="readonly" title="especie" <?php if (isset($row2['0'])){echo "value='".$row2['0']."'";}?><?php if(isset($row4[10])){echo "value='".$row4[10]."'";}?>/>
						</td>
						<td>
							<input type="text" style="width:170px" readonly="readonly" title="Fecha Nacimiento" <?php if (isset($row2['2'])){echo "value='".$row2['2']."'";}?><?php if(isset($row4[12])){echo "value='".$row4[12]."'";}?>/>
						</td>
						<td ><select name="vete" id="vete" style="width:140px">
							<option value="0">Selecione</option>
							<?php
							   //mostrar todos los veterinarios
                                                           $v="SELECT id_propietario, p_nombre, p_apellido FROM propietario WHERE id_roll =  '1'";
	                                                   $vete=mysql_query($v,$link);
							    while($fila6=mysql_fetch_row($vete))
							   {
                                                             
							     echo "<option value='".$fila6['0']."' $tipo id='".$fila6['0']."'  name='".$fila6['0']."'>".$fila6['1']." ".$fila6['2']."</option>";
							   }					
							?>				
						</td></select> 
						<tr>
							<td colspan="5"><br>&nbsp; Actividad:</td>
							<tr>
								<td colspan="5">
								<textarea name="motivos" style="width:870px" name="motivos" class=estilotextarea id="motivos" rows="1" cols="98"></textarea>
								</td>
							</tr>
						</tr>
					</tr>
					<tr>
			
			<td colspan="2" align="right"><input type="hidden" name="id_vacuna" id="id_vacuna" value="<?php if (isset($id_vacuna)){echo $id_vacuna;} ?>"/>
				<input class="submit" type="submit" name="Guardar" value="Guardar"  /></td>
		
			<td></td>
        </div>
			
			</form>
			
			<td colspan="2" align="left"><?php include('../filtro/filtro_vacuna.php');?></td></tr>
	</table>
	</center>
    </body>
</html>