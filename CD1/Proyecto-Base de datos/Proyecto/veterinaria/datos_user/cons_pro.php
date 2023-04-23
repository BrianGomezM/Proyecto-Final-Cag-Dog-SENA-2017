<?php
include ('../include/conex.php');
$link= Conectarse();
$cons="SELECT propietario.id_propietario,propietario.p_nombre,
propietario.s_nombre,propietario.p_apellido,propietario.s_apellido,propietario.numero_tipo,
propietario.celular,propietario.direccion,propietario.email,tipo_document.tipo,roll.roll,est_propi.estado FROM propietario,tipo_document,roll,est_propi WHERE propietario.id_est_propi=est_propi.id_est_propi AND propietario.id_tipo_docu=tipo_document.id_tipo_docu AND propietario.id_roll=roll.id_roll";
$conf= mysql_query($cons,$link);$cant=1;

?>
<html>
<head>
<head>
	<script>
						function confirmar()
							{
								var confirmacion= confirm("seguro desea eliminar Item??!");
								if(confirmacion==true)
								{return true;}
								else
								{return false;}
							}
								function editar()
							{
								var confirmacion= confirm("seguro que desea editar esta historia clinica?!");
								if(confirmacion==true)
								{return true;}
								else
								{return false;}
							}
	</script>
</head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<table border="">
<tr>
<td>No</td>
<td>Primer Nombre</td>
<td>Segundo Nombre</td>
<td>Primer Apellido</td>
<td>Segundo Apellido</td>
<td>Tipo de documento</td>
<td>Numero de documento</td>
<td>Celular</td>
<td>Direccion</td>
<td>Correo</td>
<td>Roll</td>
<td>Estado</td>

<td colspan="2">Opciones</td>
</tr>
<?php
	//mostrar todas las especies
	 while($fila=mysql_fetch_row($conf)){
	$reg=$cant-1+1;
	echo "<tr>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['0']."' name='numero_propietario'>".$cant++."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['1']."' name='primer nombre'>".$fila['1']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['1']."' name='segundo nombre'>".$fila['2']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['1']."' name='Primer Apellido'>".$fila['3']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['1']."' name='Segundo Apellido'>".$fila['4']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['1']."' name='Tipo de documento'>".$fila['9']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['1']."' name='Numero de documento'>".$fila['5']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['1']."' name='Celular'>".$fila['6']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['1']."' name='Direccion'>".$fila['7']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['1']."' name='Correo'>".$fila['8']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['1']."' name='roll'>".$fila['10']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['1']."' name='estado'>".$fila['11']."</p>";
	echo "</td>";
	echo "<td>";
    echo "<a href='../actualizar/act_propi.php?id_reg=$fila[0]' target='proceso' ><img src='../img/edit.png' width='20' height='20'/></a>";
	echo "</td>";
	echo "<td>";
	echo "<a href='../del/del_propi.php?id_reg=$fila[0]' target='proceso' onclick='return confirmar();'><img src='../img/del.gif' width='20' height='20' /></a>";
	echo "</td>";
	echo "</tr>";
   }					
?>

</body>
</html>