<center>
<table class="letragrande" >
<tr>
						<td >
							Motivos De Consulta y  Antecedentes	
						</td>
					
						<td colspan="3">
							<textarea name="motivos"   class=estilotextarea id="text" ><?php if(isset($motivos)){echo $motivos;}?><?php if(isset($row4[16])){echo $row4[16];}?></textarea>
						</td>
						
				
					</tr>
					<tr>
					<td colspan="5"><br>
					</td>
					</tr>
					<tr>
				
						<td> 
							<input type="checkbox"  name="piel_anexos" title="Piel anexos"<?php if(isset($row4[17])){if ($row4[17]=='on'){echo "checked";} else echo"";}?>/>Piel Anexos
						</td>
						<td>
							<input type="checkbox" name="ganglios_linfaticos"title="ganglios linfaticos"<?php if(isset($row4[18])){if ($row4[18]=='on'){echo "checked";} else echo"";}?>>Ganglios Linfaticos
						</td>
						<td>
							<input type="checkbox" name="aparato_respiratorio" title="aparato respiratorio" <?php if(isset($row4[19])){if ($row4[19]=='on'){echo "checked";} else echo"";}?>>Aparato Respiratorio
						</td>
						
					</tr>
					<tr>
						<td>
							<input type="checkbox" name="aparato_reproductor" title="aparato reproductor" <?php if(isset($row4[20])){if ($row4[20]=='on'){echo "checked";} else echo"";}?>>Aparato Reproductor
						</td>
						<td>
							<input type="checkbox" name="mucosa" title="mucosa" <?php if(isset($row4[21])){if ($row4[21]=='on'){echo "checked";} else echo"";}?>>Mucosa
						</td>
						<td>
							<input type="checkbox" name="plan_sanitario" title="plan sanitario"<?php if(isset($row4[22])){if ($row4[22]=='on'){echo "checked";} else echo"";}?>>Plan Sanitario
						</td>
						
					</tr>
					<tr>
						<td> 
							<input type="checkbox" name="organos_sentidos" title="organos de los sentidos" <?php if(isset($row4[23])){if ($row4[23]=='on'){echo "checked";} else echo"";}?>>Organos De Los Sentidos
						</td>
						<td>
							<input type="checkbox" name="aparato_neurologico" title="aparato neurologico" <?php if(isset($row4[24])){if ($row4[24]=='on'){echo "checked";} else echo"";}?>>Aparato Neurologico
						</td>
						<td>
							<input type="checkbox" name="signos_clinicos" title="signos clinicos" <?php if(isset($row4[25])){if ($row4[25]=='on'){echo "checked";} else echo"";}?>>Signos Clinicos
						</td>
												
					</tr>
					<tr>
						<td > 
							<input type="checkbox" name="examen_muscoesqueletico" title="examen muscoesqueletico"<?php if(isset($row4[26])){if ($row4[26]=='on'){echo "checked";} else echo"";}?>>Examen musculoesqueletico
						</td>
							
						<td>
							<input type="checkbox" name="aparato_cardiovascular" title="aparato cardiovascular" <?php if(isset($row4[27])){if ($row4[27]=='on'){echo "checked";} else echo"";}?>>Aparato Cardiovascular
						</td>
						<td>
							<input type="checkbox" name="aparato_digestivo" title="aparato digestivo" <?php if(isset($row4[28])){if ($row4[28]=='on'){echo "checked";} else echo"";}?>>Aparato Digestivo
						</td>
					
						
						
					</tr>
</table>
</center>