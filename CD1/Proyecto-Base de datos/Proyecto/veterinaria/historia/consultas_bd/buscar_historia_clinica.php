<!DOCTYPE html >
    <html xmlns="http://www.w3.org/1999/xhtml">
			<head>
			<link rel="stylesheet" href="../Estilos Css/consulta.css" TYPE="text/css" MEDIA="screen">
				<style>
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
table td {text-align: center;
 
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


.submit{
text-decoration:none;
width:160px;
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
.submit2{
text-decoration:none;
width:160px;
margin: 10px 0px;
text-align:center;
display:block;
background-color:#fff;
color:#238276;
border:1px solid #Fc7323;
font-size:11px;
cursor:pointer;
border-radius:10px;
 padding: 6px;
 box-sizing: border-box;
 transition: all 500ms ease;
 }
   tr:nth-child(odd) {
        background-color: white;
    }
       tr:nth-child(even) {
        background-color: lightgray;
    }

</style>
			<title>Cosulta</title>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
					<title>
						Consultar Usuario<br><br><br>
					</title>
					<script>
						function confirmar()
							{
								var confirmacion= confirm("seguro desea eliminar Item??!");
								if(confirmacion==true)
								{return true;}
								else
								{return false;}
							}
							
					</script>
			 </head>
		<BODY>
		<center>	
			<table>
			<tr>
				<th colspan="12">
					<FONT SIZE=5> Historia Clinica<font>
				</th>
			</tr>
					<tr>
						<th >
							Codigo
						</th>
						<th colspan="4">
							Nombre 
						</th>
						<th>
							Numero De Documeto
						</th>
						<th>
							Mascota Del Usuario
						</th>
						<th>
							Raza De La Mascota
						</th>
						<th>
							Color De La Mascota
						</th>
						<th>
							Fecha De La Historia Clinica
						</th>
						<th>
							Editar
						</th>
						<th>
							Eliminar
						</th>
					</tr>
					<?php
						include('../Conexion_BD/conex.php');
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
										$sql="SELECT propietario.codigo, propietario.p_nombre, propietario.s_nombre, propietario.p_apellido, propietario.s_apellido, propietario.numero_tipo,  mascota.nombre, mascota.raza, mascota.color, historia_clinica.fecha, historia_clinica.id_historial  FROM
										mascota, propietario, historia_clinica WHERE propietario.codigo = '$propi' AND mascota.id_propietario 
										= propietario.id_propietario AND mascota.id_mascota = historia_clinica.id_mascota";
										$query=mysql_query($sql,$link);$a=1;
										while ($row3=mysql_fetch_array($query))
										{
											echo 
											'<tr>
											
											<td>'.$row3[0].'</td>
											<td>'.$row3[1].'</td>
											<td>'.$row3[2].'</td>
											<td>'.$row3[3].'</td>
											<td>'.$row3[4].'</td>
											<td>'.$row3[5].'</td>
											<td>'.$row3[6].'</td>
											<td>'.$row3[7].'</td>
											<td>'.$row3[8].'</td>
											<td>'.$row3[9].'</td>
											<td><a href="../Completa/historia Clinica.php?id_historia='.$row3[10].'&&editar='.$editar.'"><img src="../img/edit.png"></a></td>	
											<td><a href="borrar.php?buscar1='.$propi.'&&selecione='.$selecione.'&id_borrar='.$row3[10].'"><img src="../img/del.gif" onclick="return confirmar();"></a></td>	
											</tr>';$a++;
										}
									}
								}
								break;	
								case 2:
									{	
										$editar=1;
										$propi=$_GET['buscar1'];
										$consulta_mysql="select propietario.codigo, propietario.p_nombre, propietario.s_nombre, propietario.p_apellido, propietario.s_apellido, propietario.numero_tipo,  mascota.nombre, mascota.raza, mascota.color, historia_clinica.fecha, historia_clinica.id_historial from mascota, propietario, historia_clinica where propietario.p_nombre like '%$propi%' AND mascota.id_propietario = propietario.id_propietario AND mascota.id_mascota = historia_clinica.id_mascota";
										$resultado_consulta_mysql=mysql_query($consulta_mysql,$link);$a=1;
										while($registro=mysql_fetch_array($resultado_consulta_mysql))
										{
											echo 
											'<tr>
											<td>'.$registro[0].'</td>
											<td>'.$registro[1].'</td>
											<td>'.$registro[2].'</td>
											<td>'.$registro[3].'</td>
											<td>'.$registro[4].'</td>
											<td>'.$registro[5].'</td>
											<td>'.$registro[6].'</td>
											<td>'.$registro[7].'</td>
											<td>'.$registro[8].'</td>
											<td>'.$registro[9].'</td>
											<td><a href="../Completa/historia Clinica.php?id_historia='.$registro[10].'&&editar='.$editar.'"><img src="../img/edit.png"></a></td>	
											<td><a href="borrar.php?buscar1='.$propi.'&&selecione='.$selecione.'&id_borrar='.$registro[10].'"><img src="../img/del.gif" onclick="return confirmar();"></a></td>	</tr>';$a++;
										}
									}
									break;	
									case 3:
								{
									if(isset($_GET['buscar1']))
									{ 
										$editar=1;
										$propi=$_GET['buscar1'];
										$sql="SELECT propietario.p_nombre, propietario.s_nombre, propietario.p_apellido, propietario.s_apellido, propietario.numero_tipo,  mascota.nombre, mascota.raza, mascota.color, historia_clinica.fecha, historia_clinica.id_historial  FROM
										mascota, propietario, historia_clinica WHERE propietario.numero_tipo = '$propi' AND mascota.id_propietario 
										= propietario.id_propietario AND mascota.id_mascota = historia_clinica.id_mascota";
										$query=mysql_query($sql,$link);$a=1;
										while ($row3=mysql_fetch_array($query))
										{
											echo 
											'<tr>
											
											<td>'.$row3[0].'</td>
											<td>'.$row3[1].'</td>
											<td>'.$row3[2].'</td>
											<td>'.$row3[3].'</td>
											<td>'.$row3[4].'</td>
											<td>'.$row3[5].'</td>
											<td>'.$row3[6].'</td>
											<td>'.$row3[7].'</td>
											<td>'.$row3[8].'</td>
											<td>'.$row3[9].'</td>
											<td><a href="../Completa/historia Clinica.php?id_historia='.$row3[10].'&&editar='.$editar.'"><img src="../img/edit.png"></a></td>	
											<td><a href="borrar.php?buscar1='.$propi.'&&selecione='.$selecione.'&id_borrar='.$row3[10].'"><img src="../img/del.gif" onclick="return confirmar();"></a></td>	
											</tr>';$a++;
										}
									}
								}
								break;								
							}
						}
					?>
				</table>
			</center>
					<center><form action="../Completa/historia Clinica.php" id="form1" method="POST" name="form"><input type="submit" name="Cancelar" value="Registrar Historia Clinica"  class="submit"/></form></center>	
					
					<center><form action="../../fondo.php" id="form1" method="POST" name="form"><input type="submit" name="Cancelar" value="Cancelar"  class="submit2"/></form></center>	
		</body>
	</html>