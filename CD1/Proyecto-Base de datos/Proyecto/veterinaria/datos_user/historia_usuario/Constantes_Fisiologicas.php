<center><table class="letragrande">
					<tr>
						
						<td>
							Frecuencia Cardiaca:
						</td>
						<td>
							<input type="Text" Readonly="readonly" name="frecuencia_cardiaca"  title="frecuencia cardiaca" <?php if(isset($row5[13])){echo "value='".$row5[13]."'";}?>>
							
						</td>
						
						<td>
							Frecuencia Respiratoria:
						</td>
						<td>
							<input type="Text" Readonly="readonly" name="frecuencia_respiratoria"  title="frecuencia respiratoria" <?php if(isset($row5[14])){echo "value='".$row5[14]."'";}?>>
						</td>
					</tr>
					<tr><td colspan="5"><br></td></tr>
					
					<tr>
						
						<td>
							Pulso:
						</td>
						<td>
							<input type="Text" name="pulso" Readonly="readonly" title="pulso" <?php if(isset($row5[15])){echo "value='".$row5[15]."'";}?>>
						</td>
						<td>
							Temperatura Rectal:
						</td>
						<td>
							<input type="Text" name="temperatura_rectal" Readonly="readonly" title="temperatura rectal" <?php if(isset($row5[16])){echo "value='".$row5[16]."'";}?>>
						</td>
					</tr>
					</table></center>