<?php

//recordatorios
$record="SELECT agenda.motivo,agenda.hora,mascota.nombre,propietario.p_nombre,.propietario.p_apellido from agenda,mascota,propietario WHERE  DATEDIFF(fecha_fin,fecha_registro)='7' AND agenda.id_mascota=mascota.id_mascota AND mascota.id_propietario=propietario.id_propietario ";
$query=mysql_query($record,$link);

$record1="SELECT agenda.motivo,agenda.hora,mascota.nombre,propietario.p_nombre,.propietario.p_apellido from agenda,mascota,propietario WHERE  DATEDIFF(fecha_fin,fecha_registro)='7' AND agenda.id_mascota=mascota.id_mascota AND mascota.id_propietario=propietario.id_propietario ";
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