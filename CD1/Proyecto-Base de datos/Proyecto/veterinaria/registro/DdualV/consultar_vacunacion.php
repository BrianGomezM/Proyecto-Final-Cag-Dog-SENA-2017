<html xmlns="http://www.w3.org/1999/xhtml">
	<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
		<title>Cosulta</title>
			<link rel="stylesheet" href="../Estilos Css/consulta.css" TYPE="text/css" MEDIA="screen">
			
		<title>
			Consultar Vacunaciones
		</title>
		<script>
			function confirmar()
			{
				var confirmacion= confirm("seguro desea eliminar este registro de vacunaci&oacute;n??!");
				if(confirmacion==true)
				{return true;}
				else
				{return false;}
			}
			function editar()
			{
				var confirmacion= confirm("seguro que deseas editar esta Vacunaci&oacute;n?!");
				if(confirmacion==true)
				{return true;}
				else
				{return false;}
			}
		</script>
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
                        .submit  {
                        text-decoration:none;
                        width:100px;
                        margin: 10px 0px;
                        text-align:center;
                        display:block;
                        background-color:#fff;
                        color:#238276;
                        border:1px solid #Fc7323;
                        font-size:12px;
                        cursor:pointer;
                        border-radius:10px;
                        padding: 6px;
                        box-sizing: border-box;
                        transition: all 500ms ease;
                        }
                        tr:nth-child(even) {
                        background-color: lightgray;
                        }
                        tr:nth-child(odd) {
                        background-color: white;
                        }
		</style>
	</head>
	<center>
	
	<table border="1" align="center">
                
		<tr>
                     <tr><th colspan="11"><FONT SIZE="6">Registro De Vacunaci&oacute;n </FONT> </th></tr>
			<th>Fecha De Vacunaci&oacute;n</th>

			<th>Numero De Documento</th>

			<th>Propietario</th>

			<th>Celular</th>

			<th>Paciente</th>

			<th>Raza Del paciente </th>

			<th>Especie Del Paciente</th>

			<th>Edad Del Paciente</th>

			<th>Actividad</th>

			<th>Veterinario</th>

			<th >Opcion</th>
                </tr>
		<?php
			include('../conex/conex.php');
			$link= Conectarse();
			if(isset($_GET['selecione']))
				{
					$selecione=$_GET['selecione']; 
					switch ($selecione)
						{
							case 1:
							{
								if(isset($_GET['buscar1']))
								{ 
									$editar=1;
									$propi=$_GET['buscar1'];
									
									$sql="SELECT vacunacion.fecha, mascota.nombre, mascota.raza, especie.especie, mascota.fecha_nacimiento, propietario.numero_tipo, propietario.p_nombre, propietario.p_apellido, propietario.s_apellido, propietario.celular, vacunacion.actividad, vacunacion.id_vacuna
										FROM vacunacion, mascota, especie, propietario
										WHERE propietario.numero_tipo='$propi'
										AND vacunacion.id_mascota = mascota.id_mascota
										AND mascota.id_especie = especie.id_especie
										AND mascota.id_propietario = propietario.id_propietario";
									$query=mysql_query($sql,$link);$a=1;
									
									$vete="SELECT vacunacion.fecha, mascota.nombre, mascota.raza, especie.especie, mascota.fecha_nacimiento, propietario.p_nombre, propietario.p_apellido, propietario.s_apellido, vacunacion.actividad
									FROM vacunacion, mascota, especie, propietario
									WHERE vacunacion.id_mascota = mascota.id_mascota
									AND mascota.id_especie = especie.id_especie
									AND vacunacion.id_propietario = propietario.id_propietario";
									$query_vete=mysql_query($vete,$link);$a=1;	
										while ($row3=mysql_fetch_array($query) AND ($v1=mysql_fetch_array($query_vete)))
										{
											echo 
											'<tr>
											
											<td align="center">'.$row3[0].'</td>
											<td align="center">'.$row3[5].'</td>
											<td align="center">'.$row3[6].'&nbsp'.$row3[7].'&nbsp'.$row3[8].'</td>
											<td align="center">'.$row3[9].'</td>
											<td align="center">'.$row3[1].'</td>
											<td align="center">'.$row3[2].'</td>
											<td align="center">'.$row3[3].'</td>
											<td align="center">'.$row3[4].'</td>
											<td align="center">'.$row3[10].'</td>
											<td align="center">'.$v1[5].'&nbsp '.$v1[6].'&nbsp'.$v1[7].'</td>
											<th><a href="borrar_vacuna.php?buscar1='.$propi.'&&selecione='.$selecione.'&id_borrar='.$row3[11].'"><img src="../imagen/del.gif" onclick="return confirmar();"></a></th>	
											</tr>';$a++;
										}
								}
							}
							break;	
							case 2:
								{	
									$editar=1;
									$propi=$_GET['buscar1'];
									$consulta_mysql="SELECT vacunacion.fecha, mascota.nombre, mascota.raza, especie.especie, mascota.fecha_nacimiento, propietario.numero_tipo, propietario.p_nombre, propietario.p_apellido, propietario.s_apellido, propietario.celular, vacunacion.actividad, vacunacion.id_vacuna
										FROM vacunacion, mascota, especie, propietario
										WHERE propietario.p_nombre like '%$propi%'
										AND vacunacion.id_mascota = mascota.id_mascota
										AND mascota.id_especie = especie.id_especie
										AND mascota.id_propietario = propietario.id_propietario";
										$resultado_consulta_mysql=mysql_query($consulta_mysql,$link);$a=1;
										
									$consulta_vete="SELECT vacunacion.fecha, mascota.nombre, mascota.raza, especie.especie, mascota.fecha_nacimiento, propietario.p_nombre,                                          propietario.p_apellido, propietario.s_apellido, vacunacion.actividad
                                                                         FROM vacunacion, mascota, especie, propietario
                                                                         WHERE vacunacion.id_mascota = mascota.id_mascota
                                                                         AND mascota.id_especie = especie.id_especie
                                                                         AND vacunacion.id_propietario = propietario.id_propietario";
									$resultado_consulta_vete=mysql_query($consulta_vete,$link);$a=1;
										
										while($filtro=mysql_fetch_array($resultado_consulta_mysql) AND ($filtro2=mysql_fetch_array($resultado_consulta_vete)))
										{
											
											echo 
											'<tr>
											
											<td align="center">'.$filtro[0].'</td>
											<td align="center">'.$filtro[5].'</td>
											<td align="center">'.$filtro[6].'&nbsp'.$filtro[7].'&nbsp'.$filtro[8].'</td>
											<td align="center">'.$filtro[9].'</td>
											<td align="center">'.$filtro[1].'</td>
											<td align="center">'.$filtro[2].'</td>
											<td align="center">'.$filtro[3].'</td>
											<td align="center">'.$filtro[4].'</td>
											<td align="center">'.$filtro[10].'</td>
											<td align="center">'.$filtro2[5].'&nbsp '.$filtro2[6].'&nbsp'.$filtro2[7].'</td>
											<th><a href="borrar_vacuna.php?buscar1='.$propi.'&&selecione='.$selecione.'&id_borrar='.$filtro[11].'"><img src="../imagen/del.gif" onclick="return confirmar();"></a></th>	</tr>';$a++;
											
										}
								}
								break;								
						}
				}
		?>
	</table>
	</center>
	
	<div class="cf footer">
		<center><form action="vacunacion.php" id="form1" method="POST" name="form">
		<br>
		<input type="submit" name="Cancelar" value="Cancelar"  class="submit"/></center>
	</div>
	
		<div class="overlay"></div>
		
			
		</body>
	</html>