
<center>
<form action="historia_usuario/descargar/ver.php" method="POST" name="descargar">
<table class="letragrande">
	<tr>
		<td colspan="6">
			<textarea name="tratamiento" Readonly="readonly" class=estilotextarea title="tratamiento"><?php if(isset($row5[28])){echo $row5[28];}?></textarea>		
		</td>
	</tr>
	
</table><br>

	<table class="letragrande"><tr>
			<td>
				<input type="submit" name="Descargar" value="Descargar Tratamiento"<?php  {if ($row5[28]==""){echo "disabled==true" ;} else {echo "enabled==true";}}?>   id="subt3" />
			</td>
			
		</tr>
		
	</table>
		<input type="hidden" name="user" id="user" value="<?php if (isset($user)){echo $user;} ?>">
		<input type="hidden" name="mas" id="mas" value="<?php if (isset($id)){echo $id;} ?>">
	</form>
	</center>
