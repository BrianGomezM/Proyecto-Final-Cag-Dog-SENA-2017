<center>
<table class="letragrande">
<tr>
						<td >
							Motivos De Consulta y  Antecedentes	
						</td>
					
						<td colspan="3">
							<textarea name="motivos" Readonly="readonly"   class=estilotextarea id="text" ><?php if(isset($motivos)){echo $motivos;}?><?php if(isset($row5[0])){echo $row5[0];}?></textarea>
						</td>
						
				
					</tr>
					<tr>
					<td colspan="5"><br>
					</td>
					</tr>
					<tr>
				
						<td> 
							<input type="checkbox"  disabled=true name="piel_anexos" title="Piel anexos"<?php if(isset($row5[1])){if ($row5[1]=='on'){echo "checked";} else echo"";}?>/>Piel Anexos
						</td>
						<td>
							<input type="checkbox" disabled=true name="ganglios_linfaticos"title="ganglios linfaticos"<?php if(isset($row5[2])){if ($row5[2]=='on'){echo "checked";} else echo"";}?>>Ganglios Linfaticos
						</td>
						<td>
							<input type="checkbox" disabled=true name="aparato_respiratorio" title="aparato respiratorio" <?php if(isset($row5[3])){if ($row5[3]=='on'){echo "checked";} else echo"";}?>>Aparato Respiratorio
						</td>
						
					</tr>
					<tr>
						<td> 	
							<input type="checkbox" disabled=true name="aparato_reproductor" title="aparato reproductor" <?php if(isset($row5[4])){if ($row5[4]=='on'){echo "checked";} else echo"";}?>>Aparato Reproductor
						</td>
						<td>
							<input type="checkbox" disabled=true name="mucosa" title="mucosa" <?php if(isset($row5[5])){if ($row5[5]=='on'){echo "checked";} else echo"";}?>>Mucosa
						</td>
						<td>
							<input type="checkbox" disabled=true name="plan_sanitario" title="plan sanitario"<?php if(isset($row5[6])){if ($row5[6]=='on'){echo "checked";} else echo"";}?>>Plan Sanitario
						</td>
						
					</tr>
					<tr>
						<td> 
							<input type="checkbox" disabled=true name="organos_sentidos" title="organos de los sentidos" <?php if(isset($row5[7])){if ($row5[7]=='on'){echo "checked";} else echo"";}?>>Organos De Los Sentidos
						</td>
						<td>
							<input type="checkbox" disabled=true name="aparato_neurologico" title="aparato neurologico" <?php if(isset($row5[8])){if ($row5[8]=='on'){echo "checked";} else echo"";}?>>Aparato Neurologico
						</td>
						<td>
							<input type="checkbox" disabled=true name="signos_clinicos" title="signos clinicos" <?php if(isset($row5[9])){if ($row5[9]=='on'){echo "checked";} else echo"";}?>>Signos Clinicos
						</td>
												
					</tr>
					<tr>
						<td> 
							<input type="checkbox" disabled=true name="examen_muscoesqueletico" title="examen muscoesqueletico"<?php if(isset($row5[10])){if ($row5[10]=='on'){echo "checked";} else echo"";}?>>Examen musculoesqueletico
						</td>
							
						<td>
							<input type="checkbox" disabled=true name="aparato_cardiovascular" title="aparato cardiovascular" <?php if(isset($row5[11])){if ($row5[11]=='on'){echo "checked";} else echo"";}?>>Aparato Cardiovascular
						</td>
						<td>
							<input type="checkbox" disabled=true name="aparato_digestivo" title="aparato digestivo" <?php if(isset($row5[12])){if ($row5[12]=='on'){echo "checked";} else echo"";}?>>Aparato Digestivo
						</td>
					
						
						
					</tr>
</table>
</center>