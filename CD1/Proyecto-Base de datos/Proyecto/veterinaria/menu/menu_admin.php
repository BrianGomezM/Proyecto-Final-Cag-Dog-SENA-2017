<?php
$num= base64_encode($user);
//recordatorios
$record="SELECT agenda.motivo,agenda.hora,mascota.nombre,propietario.p_nombre,propietario.p_apellido from agenda,mascota,propietario WHERE  DATEDIFF(fecha_fin,fecha_registro)='7' AND agenda.id_mascota=mascota.id_mascota AND mascota.id_propietario=propietario.id_propietario";
$query=mysql_query($record,$link);

$record1="SELECT agenda.motivo,agenda.hora,mascota.nombre,propietario.p_nombre,propietario.p_apellido from agenda,mascota,propietario WHERE  DATEDIFF(fecha_fin,fecha_registro)='7' AND agenda.id_mascota=mascota.id_mascota AND mascota.id_propietario=propietario.id_propietario";
$query1=mysql_query($record1,$link);
$row2=mysql_fetch_array($query1);
$objJason=json_encode($row2);

$canti="Select count(*) FROM agenda WHERE DATEDIFF(fecha_fin,fecha_registro)='7'";
$query2=mysql_query($canti,$link);
//swal('activida : $row[0] hora: $row[1] paciente: $row[2] propietario: $row[3] $row[4]');
//alert('activida : '+'$row[0]'+' hora: '+'$row[1]'+' paciente: '+'$row[2]'+' propietario: '+'$row[3]'+' '+' $row[4]');
while($row=mysql_fetch_row($query)){
	echo "<script>
			swal('Tienes actividades en una semana');
			
</script>";
}
?>
<ul class="nav">
<li><a href="fondo.php" target="proceso"><center>Registrar</center></a>
<ul>
<li><a href="registro/registro_propietario/registro_usuario.php" target="proceso">Propietario</a></li>
<li><a href="registro/reg_mascota.php" target="proceso">Paciente</a></li>
<li><a href="registro/reg_especie.php" target="proceso">Especie</a></li>
<li><a href="registro/tipo_documento/registrar_tipod.php" target="proceso">Tipo documento</a></li>
</ul>
</li>
<li><a href="fondo.php" target="proceso"><center>Plan Sanitario</center></a>
<ul>
<li><a href="registro/DdualV/desparasitacion.php" target="proceso">Desparasitaci&oacute;n</a></li>
<li><a href="registro/DdualV/vacunacion.php" target="proceso">Vacunaci&oacute;n</a></li>
</ul>
</li>
				
<li><a href="historia/Completa/historia%20Clinica.php" target="proceso"><center>Historia Clinica</center></a></li>
<li><a href="fondo.php" target="proceso"><center>Consultar</center></a>
<ul>
<li><a href="registro/filtro/filtro2.php" target="proceso" >Propietario</a></li>
<li><a href="consulta/pag_paciente/index.php" target="proceso" >Paciente</a></li>
<li><a href="consulta/cons_especies.php" target="proceso" >Especie</a></li>
<li><a href="registro/filtro/filtro_consul_despa.php" target="proceso" >Desparasitaci&oacute;n</a></li>
<li><a href="registro/filtro/filtro_consul_vacu.php" target="proceso" >Vacunaci&oacute;n</a></li>
<li><a href="historia/Filtro/filtro2.php" target="proceso" >Historia clinica</a></li>
</ul>
</li>				
<li><a href="reg_recor.php" target="proceso"><center>Actividades</center></a></li>
<li><a href="datos_user/cambio_pass.php?user=<?php echo"".$num;?>" target="proceso">Cambiar Clave</a></li>
<li><form  method="POST"><center><input id="button" type="submit" name="exit" value="Cerrar Sesion"></center></form></li>
</ul>