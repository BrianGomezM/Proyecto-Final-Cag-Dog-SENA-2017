<center>
			<table class="letragrande" >
					<tr>
						<th colspan="6">
							Paciente:
						</th>
						</tr>
						
					<tr>
						<th colspan="6">
							<select name="mas" id="mas" onchange="this.form.submit();">
							<option value="0"  id="mas">Seleccione</option>
							
								<?php
								if ($query==true)
								{	
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
								}
										else
											if ($query4==true)
										{
													if ($row4[9]==$row4[9])
												{
													$ver='selected="selected"';
												}
												else
												{
													$ver=""; 
												}											
												echo "<option disabled=true value='".$row4['9']."' ".$ver.">".$row4[9]."</option>";	
										
										}
									
									?>	
							</select>
							<input type="hidden" name="user" id="user" value="<?php if (isset($propi)){echo $propi;} ?>"/>
						</th>
						</tr>
						<tr>
							<td>
								<br>
							</td>
						</tr>
						<tr>
						
						<td>
							Especie:
						</td>
						<td>
							Raza:
						</td>
						<td>
							Fecha Nacimiento:
						</td>
						<td>
							Color:
						</td>
						<td>
							Peso:
						</td>
						<td>
							Genero:
						</td>	
					</tr>
					<tr>
						<td>
							<input type="text" size="15"readonly="readonly" title="especie" <?php if (isset($row2['0'])){echo "value='".$row2['0']."'";}?><?php if(isset($row4[10])){echo "value='".$row4[10]."'";}?>/>
						</td>
						<td>
							<input type="text" size="15"readonly="readonly" title="raza" <?php if (isset($row2['1'])){ echo "value='".$row2['1']."'";}?><?php if(isset($row4[11])){echo "value='".$row4[11]."'";}?>/>
						</td>
						<td>
							<input type="date" size="15"readonly="readonly" title="Fecha Nacimiento" <?php if (isset($row2['2'])){echo "value='".$row2['2']."'";}?><?php if(isset($row4[12])){echo "value='".$row4[12]."'";}?>/>
						</td>
						<td>
							<input type="text" size="15"readonly="readonly"  title="color" <?php if (isset($row2['3'])){ echo "value='".$row2['3']."'";}?><?php if(isset($row4[13])){echo "value='".$row4[13]."'";}?>/>
						</td>
						<td>
							<input type="text" size="15"readonly="readonly" title="peso" <?php if(isset($row2['4'])){ echo "value='".$row2['4']." kg"."'";}?><?php if(isset($row4[14])){echo "value='".$row4[14]."'";}?>/>
						</td>
						<td>
							<input type="text" size="15"readonly="readonly"title="genero"  <?php if(isset($row2['5'])){echo "value='".$row2['5']."'";}?><?php if(isset($row4[15])){echo "value='".$row4[15]."'";}?>/>
						</td>
					</tr>
			</table>	
			</center>