<?php
$fecha = date("Y-m-d");
?>
			<center>
				<table class="letragrande">
					<tr>
						<th colspan="2">
							Fecha:
						</th>
						<td >
							Codigo:
						</td>
					</tr>
					
					<tr>
						<th colspan="2">
							<input type="date" name="fecha" <?php echo "value='".$fecha."'";?> title="fecha" required <?php if(isset($fecha)){echo "value='".$fecha."'";}?><?php if(isset($row4[0])){echo "value='".$row4[0]."'";}?>/>
						</th>
						<td>
							<input type="number" name="cedula" required title="Codigo" <?php if(isset($editar)){ if($editar==1){ echo"readonly=readonly";}} ?>  <?php if(isset($row['2'])){ echo "value='".$row['2']."'";}?><?php if(isset($row4[1])){echo "value='".$row4[1]."'";}?>/>
						</td>
						
						<th>
							<input type="submit" name="buscar" value="Buscar"  id="subt"/><input type="hidden" name="editar" id="editar" value="<?php if (isset($editar)){echo $editar;} ?>"/>
						</th>
						
						</tr>
						<tr>
						<td>
						<br>
						</td>
					</tr>
						<tr>
						<td >
							Propietario:
						</td>
						<td > 
							Telefono:
						</td>
						<td> 
							Correo Electronico:
						</td>
						<td>
							Direccion:  
						</td>
					</tr>
						<tr>
						<td>
							<input type="text" readonly="readonly" title="propietario" <?php if(isset($row['0'])){echo "value='".$row['0']." ".$row['1']." ".$row['6']."'";}?><?php if(isset($row4[2])){echo "value='".$row4[2]." ".$row4[3]." ".$row4[4]." ".$row4[5]."'";}?>>
						</td>
						<td>
							<input type="text" readonly="readonly" title="telefono" <?php if(isset($row['3'])){echo "value='".$row['3']."'";}?><?php if(isset($row4[6])){echo "value='".$row4[6]."'";}?>/>
						</td>
						<td>
							<input type="text" readonly="readonly" title="Correo Electronico" <?php if(isset($row['4'])){echo "value='".$row['4']."'";}?><?php if(isset($row4[7])){echo "value='".$row4[7]."'";}?>/>
						</td>
						<td>
							<input type="text" readonly="readonly" title="Direccion" <?php if(isset($row['5'])){echo "value='".$row['5']."'";}?><?php if(isset($row4[8])){echo "value='".$row4[8]."'";}?>/>
						</td>
					</tr>
				</table>	
			</center>