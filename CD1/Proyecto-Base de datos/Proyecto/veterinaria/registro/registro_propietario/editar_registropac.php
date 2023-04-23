<?php
		include('../conex/conex.php');
		$link=Conectarse();
		$user=$_GET['user'];
		$editar=$_GET['id_editar'];
		
	?>
<html>
	<head>			<style>
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
  font-family: ;
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
th{
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  color: #E6E6E6;
  background-color: #238276;
  position: relative;
  font-size:14;
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
 tr:nth-child(even) {
        background-color: lightgray;
    }
tr:hover td { background: #56C1BB; color: #020403; }
 
   
    tr:nth-child(odd) {
        background-color: white;
        }
div.centraTabla table {
margin: 0 auto;
text-align: left;
}

</style>
	<script>
						function confirmar()
							{
								var confirmacion= confirm("seguro desea eliminar registro??!");
								if(confirmacion==true)
								{return true;}
								else
								{return false;}
							}
								function editar()
							{
								var confirmacion= confirm("seguro que desea editar el registro de usuario?!");
								if(confirmacion==true)
								{return true;}
								else
								{return false;}
							}
					</script>
			</head>
			<body>
	
<div class='centraTabla'>				  	   
<table class="pure-table pure-table-horizontal" border="1">
				<tr>
					<th>Codigo</th>
                    <th >Nombre Completo</th>
                    <th>Tipo de documento</th>
                    <th>Documento</th>
                    <th>Celular</th>
                    <th>Direccion</th>
                    <th>Email</th>
                    <th>Roll</th>
                    <th>Estado</th>
                    <th colspan="6">Opciones</th>
				</tr>

		
                        <?php
						
						
						
					
						if(isset($_GET['selecione']))
						{
							$selecione=$_GET['selecione']; 
							switch ($selecione)
							{
								case 1:
								{
									if(isset($_GET['documento']))
									{
										
									$documento=$_GET['documento'];
									
					
						
										  $sql3="SELECT propietario.id_propietario,propietario.codigo, propietario.p_nombre, propietario.s_nombre, propietario.p_apellido, propietario.s_apellido, tipo_document.tipo,  propietario.numero_tipo, propietario.celular, propietario.direccion, propietario.email, roll.roll, est_propi.estado
					FROM propietario, tipo_document, roll, est_propi
					WHERE propietario.numero_tipo ='$documento'
					AND propietario.id_tipo_docu = tipo_document.id_tipo_docu
					AND propietario.id_roll = roll.id_roll
					AND propietario.id_est_propi = est_propi.id_est_propi ";				

						$result3=mysql_query($sql3,$link);$a=1;
						while($row3=mysql_fetch_array($result3))
							{
								echo
								'<tr>
								
									<td><a href="../registro_propietario/mostrar.php?selecione='.$selecione.'&&documento='.$documento.'&&id_editar='.$row3[0].'"><img src="../imagen/edit.png" onclick="return editar();"></a></td>			

								<td align="center"><a href="../registro_propietario/borrar1.php?user='.$user.'&&id_borrar='.$row3[0].'&&selecione='.$selecione.'&&documento='.$documento.'"><img src="../imagen/del.gif" onclick="return confirmar();"></a></td>
								


								</tr>';$a++;
							}

									}
								}
								break;	


								case 2:
									{	
									
										$documento=$_GET['documento'];
					
						
			 		  $sql3="SELECT propietario.id_propietario, propietario.codigo,
					  propietario.p_nombre, propietario.s_nombre, propietario.p_apellido,
					  propietario.s_apellido, tipo_document.tipo, propietario.numero_tipo,
					  propietario.celular, propietario.direccion, propietario.email,
					  roll.roll, est_propi.estado
					FROM propietario, tipo_document, roll, est_propi
					WHERE propietario.p_nombre LIKE  '%$documento%'
					AND propietario.id_tipo_docu = tipo_document.id_tipo_docu
					AND propietario.id_roll = roll.id_roll
					AND propietario.id_est_propi = est_propi.id_est_propi ";
						$result3=mysql_query($sql3,$link);$a=1;
						while($row3=mysql_fetch_array($result3))
							{
								echo
								'<tr>
								<td>'.$row3[1].'</td>
							<td>'.$row3[2].'&nbsp'.$row3[3].'&nbsp'.$row3[4].'&nbsp'.$row3[5].'</td>
								
								
								
								<td>'.$row3[6].'</td>
								<td>'.$row3[7].'</td>
								<td>'.$row3[8].'</td>
								<td>'.$row3[9].'</td>
								<td>'.$row3[10].'</td>
								<td>'.$row3[11].'</td>
								<td>'.$row3[12].'</td>
								
								<td><a href="../registro_propietario/mostrar.php?selecione='.$selecione.'&&documento='.$documento.'&&id_editar='.$row3[0].'"><img src="../imagen/edit.png" onclick="return editar();"></a></td>
								<td align="center"><a href="../registro_propietario/borrar.php?selecione='.$selecione.'&&documento='.$documento.'&&id_borrar='.$row3[0].'"><img src="../imagen/del.gif" onclick="return confirmar();"></a></td>


								</tr>';$a++;
							}

									}
									break;		
									
									case 3:
									{	
									
										$documento=$_GET['documento'];
					
						
			 		  $sql3="SELECT propietario.id_propietario, propietario.codigo,
					  propietario.p_nombre, propietario.s_nombre, propietario.p_apellido,
					  propietario.s_apellido, tipo_document.tipo, propietario.numero_tipo,
					  propietario.celular, propietario.direccion, propietario.email,
					  roll.roll, est_propi.estado
					FROM propietario, tipo_document, roll, est_propi
					WHERE propietario.codigo LIKE  '%$documento%'
					AND propietario.id_tipo_docu = tipo_document.id_tipo_docu
					AND propietario.id_roll = roll.id_roll
					AND propietario.id_est_propi = est_propi.id_est_propi ";
						$result3=mysql_query($sql3,$link);$a=1;
						while($row3=mysql_fetch_array($result3))
							{
								echo
								'<tr>
								<td>'.$row3[1].'</td>
							<td>'.$row3[2].'&nbsp'.$row3[3].'&nbsp'.$row3[4].'&nbsp'.$row3[5].'</td>
								
								
								
								<td>'.$row3[6].'</td>
								<td>'.$row3[7].'</td>
								<td>'.$row3[8].'</td>
								<td>'.$row3[9].'</td>
								<td>'.$row3[10].'</td>
								<td>'.$row3[11].'</td>
								<td>'.$row3[12].'</td>
								
								<td><a href="../registro_propietario/mostrar.php?selecione='.$selecione.'&&documento='.$documento.'&&id_editar='.$row3[0].'"><img src="../imagen/edit.png" onclick="return editar();"></a></td>
								<td align="center"><a href="../registro_propietario/borrar.php?selecione='.$selecione.'&&documento='.$documento.'&&id_borrar='.$row3[0].'"><img src="../imagen/del.gif" onclick="return    confirmar();"></a></td>


								</tr>';$a++;
							}

									}
									break;								
							}
						}
						
					?>



			</table></div>

</body>

</html>