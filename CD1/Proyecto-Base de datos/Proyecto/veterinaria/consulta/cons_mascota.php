<?php
$titulo="Registros de Pacientes";
include ('../include/conex.php');
$link= Conectarse();
$drow[0]="";
$drow[1]="";
$consul4="SELECT id_propietario,p_nombre,p_apellido FROM propietario";
$resul4= mysql_query($consul4,$link);
$cons="SELECT mascota.id_mascota, mascota.nombre, mascota.fecha_nacimiento, mascota.color, mascota.peso_kg, mascota.raza, 
genero.genero, especie.especie, estado.estado, propietario.p_nombre, propietario.p_apellido FROM mascota,propietario,genero,especie,estado
WHERE mascota.id_genero=genero.id_genero AND mascota.id_especie=especie.id_especie AND mascota.id_estado=estado.id_estado
AND mascota.id_propietario=propietario.id_propietario LIMIT 5";
$conf= mysql_query($cons,$link);$cant=1;
if(isset($_POST['pro']))
{
$pro= $_POST['pro'];
//echo "id del propietario".$pro;
if ($pro>0)
{
$d="SELECT p_nombre,p_apellido FROM propietario WHERE id_propietario='$pro'";
$dq= mysql_query($d,$link);
$drow=mysql_fetch_array($dq);
$titulo="Registros de Propietario ".$drow[0]." ".$drow[1];
$cons="SELECT mascota.id_mascota, mascota.nombre, mascota.fecha_nacimiento, mascota.color, mascota.peso_kg, mascota.raza, 
genero.genero, especie.especie, estado.estado, propietario.p_nombre, propietario.p_apellido FROM 			mascota,propietario,genero,especie,estado WHERE mascota.id_genero=genero.id_genero AND mascota.id_especie=especie.id_especie AND mascota.id_estado=estado.id_estado AND propietario.id_propietario='$pro' AND mascota.id_propietario='$pro'";
$conf= mysql_query($cons,$link);$cant=1;
}
if ($pro=="todo")
{
$titulo="Registros de todos los pacientes";
$cons="SELECT mascota.id_mascota, mascota.nombre, mascota.fecha_nacimiento, mascota.color, mascota.peso_kg, mascota.raza, 
genero.genero, especie.especie, estado.estado, propietario.p_nombre, propietario.p_apellido FROM mascota,propietario,genero,especie,estado
WHERE mascota.id_genero=genero.id_genero AND mascota.id_especie=especie.id_especie AND mascota.id_estado=estado.id_estado
AND mascota.id_propietario=propietario.id_propietario";
$conf= mysql_query($cons,$link);$cant=1;	
}

}

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
				<style>
    tr:nth-child(even) {
        background-color: lightgray;
    }
 
   
    tr:nth-child(odd) {
        background-color: white;
    }
@import url(http://fonts.googleapis.com/css?family=Covered+By+Your+Grace);
*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

html, body {
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
}

body {
  padding: 5em 1em;
  
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}

h1 {
  text-align: center;
  font-size: 275%;
  font-family: ';
  font-weight: 300;
  margin-top: -1em;
  text-shadow: 0 2px 1px white;
}

#box {
  margin: auto;
  width: 50em;
  height: 100%;
  white-space: nowrap;
}
@media all and (max-width: 52em) {
  #box {
    width: 100%;
  }
}

#center {
  vertical-align: middle;
  display: inline-block;
  white-space: normal;
}

#box:after {
  content: "";
 
  vertical-align: middle;
  display: inline-block;
  margin-right: -10px;
}

table {
  background-color: #E6E6E6;
  padding: 1em;
}
table, table * {
  border-color: #238276 !important;
}
table th {
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  color: #E6E6E6;
  background-color: #238276;
  position: relative;
}
table th:after {
  content: "";
  display: block;
  height: 5px;
  right: 0;
  left: 0;
  bottom: 0;
  background-color: #16a085;
  position: absolute;
}

#credits {
  text-align: right;
  color: white;
}
#credits a {
  color: #16a085;
  text-decoration: none;
}
#credits a:hover {
  text-decoration: underline;
}

</style>
</head>
<body>
<center>
<div id="box">
<main id="center">
  <h1><center><?php echo $titulo;?></center></h1>
  <table class="pure-table pure-table-horizontal" border="1">
    <thead>
      <tr>
        <th>No</th>
        <th>Paciente</th>
        <th>Edad</th>
        <th>Color</th>
        <th>Peso_kg</th>
        <th>Raza</th>
        <th>Genero</th>
        <th>Especie</th>
        <th>Estado</th>
        <th>Propietario</th>
       <th colspan="2">Opciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
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
       
    </tbody>
  </table>
   <form action=""  target="proceso" method="POST" name="pro">
  <table><tr><td>Buscar por</td></tr>
  <td><p class="compañia">Propietario:</p> </td><td><select name="pro"  onchange="document.pro.submit();">
	<option name="0" id="0" value="null">Selecione...</option>
	<?php
		//mostrar todos los propietarios
	 while($fila=mysql_fetch_row($resul4)){
	 echo "<option value='".$fila['0']."'>".$fila['1']." ".$fila['2']."</option>";
	 }					
	?>	
	<option  value="todo">Todo</option>	
	</td></select>
	<input type="submit" value="" name="buscar" style="display:none">
	</form>
  </table>
</main>
</div>
</center>
</body>
</html>