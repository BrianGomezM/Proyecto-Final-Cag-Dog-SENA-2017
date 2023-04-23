<?php
include ('../include/conex.php');
$link= Conectarse();
$p=$_POST['pro'];
echo "propietario seleccionado".$p;
$cons="SELECT mascota.id_mascota, mascota.nombre, mascota.fecha_nacimiento, mascota.color, mascota.peso_kg, mascota.raza, 
genero.genero, especie.especie, estado.estado, propietario.p_nombre, propietario.p_apellido FROM mascota,propietario,genero,especie,estado
WHERE mascota.id_genero=genero.id_genero AND mascota.id_especie=especie.id_especie AND mascota.id_estado=estado.id_estado
AND mascota.id_propietario=propietario.id_propietario";
$conf= mysql_query($cons,$link);$cant=1;

?>
<html>
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
<body>
<center>
<table border="">
<form id="pro" name="pro" action="../filtro/bus_desp_mac.php" method="POST" target="proceso">
<td>Propietario</td><td><select name="pro" id="pro" onchange="document.pro.submit();">
<option name="0" value="null">Selecione...</option>
	<?php
		//mostrar todos los propietarios
	 while($d1=mysql_fetch_row($query2)){
	 echo "<option  value='".$d1['0']."' $tipo id='".$d1['0']."'  name='".$d1['0']."'>".$d1['1']." ".$d1['2']."</option>";
	 }					
	?>			
</td></select>
<input type="submit" value="" style="display:none">
</form>
<td>Paciente:</td><td><select name="pas" id="pas" onchange="document.pas.submit();">
	<option name="0" value="null">Selecione...</option>
</td></select>
<td><input type="submit" value="Buscar"></td>
</tr>
<tr>
<td>No</td>
<td>Mascota</td>
<td>Fecha</td>
<td>Color</td>
<td>Peso_kg</td>
<td>Raza</td>
<td>Genero</td>
<td>Especie</td>
<td>Estado</td>
<td>Propietario</td>

<td colspan="2">Opciones</td>
</tr>
<?php
	//mostrar todas las especies
	 while($fila=mysql_fetch_row($conf)){
	$reg=$cant-1+1;
	echo "<tr>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['0']."' name='numero_especie'>".$cant++."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['1']."' name='nombre_especie'>".$fila['1']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['1']."' name='fecha'>".$fila['2']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['1']."' name='color'>".$fila['3']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['1']."' name='peso'>".$fila['4']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['1']."' name='raza'>".$fila['5']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['1']."' name='genero'>".$fila['6']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['1']."' name='especie'>".$fila['7']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['1']."' name='estado'>".$fila['8']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['1']."' name='propietario'>".$fila['9']." ".$fila['10']."</p>";
	echo "</td>";
	echo "<td>";
    echo "<a href='../actualizar/act_mascota.php?id_reg=$fila[0]' target='proceso'><img src='../img/edit.png' width='20' height='20'/></a>";
	echo "</td>";
	echo "<td>";
	echo "<a href='../del/del_mascota.php?id_reg=$fila[0]' target='proceso' onclick='return confirmar();'><img src='../img/del.gif' width='20' height='20' /></a>";
	echo "</td>";
	echo "</tr>";
   }					
?>
</center>
</body>
</html>