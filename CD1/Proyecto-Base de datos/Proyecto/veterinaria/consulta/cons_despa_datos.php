<html>
<head>
<head>
		<style>
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
<div id="box">
<main id="center">
<table border="" class="pure-table pure-table-horizontal">
<tr><th Colspan="8">Desparacitacion</th></tr>
<tr>
<th>No</th>
<th>Primer nombre</th>
<th>Primer Apellido</th>
<th>Nombre del paciente</th>
<th>Fecha</th>
<th>Actividad</th>
<th colspan="2">Opciones</th>
</tr>
<?php
	//mostrar datos
	 while($fila=mysql_fetch_row($query)){
	$reg=$cant-1+1;
	
	echo "<br>";
	echo "<tr>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['0']."' name='numero_especie'>".$cant++."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['0']."' name='primer_nombre'>".$fila['2']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['0']."' name='primer_apellido'>".$fila['3']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['1']."' name='nombre_mascota'>".$fila['4']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['1']."' name='fecha'>".$fila['5']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$fila['1']."' name='actividad'>".$fila['6']."</p>";
	echo "</td>";
	echo "<td>";
    echo "<a href='../actualizar/act_desparacitacion.php?id_reg=$fila[7]' target='proceso' ><img src='../img/edit.png' width='20' height='20' /></a>";
	echo "</td>";
	echo "<td>";
	echo "<a href='../del/del_desparacitacion.php?id_reg=$fila[7]' target='proceso' onclick='return confirmar();'><img src='../img/del.gif' width='20' height='20' /></a>";
	echo "</td>";
	echo "</tr>";
   }					
?>
</table>
</body>
</html>