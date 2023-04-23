<?php
include('../include/conex.php');
$link=Conectarse();

$user=$_GET['user'];

 $sql="SELECT propietario.id_propietario, propietario.p_nombre, propietario.s_nombre, propietario.p_apellido, propietario.s_apellido, tipo_document.tipo, propietario.clave, propietario.numero_tipo, propietario.celular, propietario.direccion, propietario.email, roll.roll, est_propi.estado
					FROM propietario, tipo_document, roll, est_propi
					WHERE id_propietario='$user'
					AND propietario.id_tipo_docu = tipo_document.id_tipo_docu
					AND propietario.id_roll = roll.id_roll
					AND propietario.id_est_propi = est_propi.id_est_propi ";
	$result=mysql_query($sql,$link);
	$row=mysql_fetch_array($result); 

	
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<link href="../registro/bton.css" rel="stylesheet">
<title>registrar usuario</title>
<script type="text/javascript" src="../pestañas/pestañas.js"></script>
<link rel="stylesheet" href="../pestañas/pestañas.css" TYPE="text/css" MEDIA="screen">
<style>
.letras{
    font-family: "Arial";
    font-size: 20;
	
}
.jv{

  color: #E6E6E6;
  background-color: #238276;

}
table {     font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 12px;    margin: 45px; align="center"     width: 480px; text-align: left;    border-collapse: collapse; }

th {     font-size: 13px;     font-weight: normal;     padding: 8px;     background: #b9c9fe;
    border-top: 4px solid #aabcfe;    border-bottom: 1px solid #fff; color: #039; }

td {    padding: 8px;     background: #e8edff;     border-bottom: 1px solid #fff;
    color: #669;    border-top: 1px solid transparent; }

tr:hover td { background: #d0dafd; color: #339; }
div.centraTabla{
text-align: center;
}

div.centraTabla table {
margin: 0 auto;
text-align: left;
}


</style>
</head>
<body>
<form  action="control_registro2.php" name="form1" method="POST">
<div class='centraTabla'>
		<table width="30%"  align="center" cellpadding="5" cellspacing="0" bgcolor="#ECF8E0">
		 <tr><td colspan="4" class="jv"><div align="center" style="font-weight: bold"><center>Datos personales </center></div></td></tr>
		   <tr>
				<td>
					primer nombre
				</td>
				<td>
					<input type="text" readonly name="nombre1" id="nombre1" value="<?php echo $row[1]; ?>">
				</td>
				<td>
					segundo Nombres:
				</td>
				<td>
					<input type="text" readonly name="nombre2" id="nombre2" value="<?php echo $row[2]; ?>">
				</td>
			</tr>
			<tr>
				<td>
					primer Apellidos:
				</td>
				<td>
					<input type="text" readonly name="apellido1" id="apellido1" value="<?php echo $row[3]; ?>">
				</td>
				<td>
					segundo Apellidos:
				</td>
				<td>
					<input type="text" readonly name="apellido2" id="apellido2" value="<?php echo $row[4]; ?>">
				</td>
			</tr>
			 <tr>
				 <td>
					Tipo Identificacion:
				</td>
				<td>
					<input type="text" readonly name="apellido2" id="apellido2" value="<?php echo $row[5]; ?>">
				</td>
				<td>
					Identificacion:
				</td>
				<td>
					<input type="text" name="documento" readonly id="documento" value="<?php echo $row[7]; ?>">
				</td>
				
			</tr>
			<tr>
			<td>
					estado:
				</td>
				<td>
					<input type="text" readonly id="estado" value="<?php echo $row[12]; ?>">
				</td>
				<td>
					roll:
				</td>
				<td>
					<input type="text" readonly name="roll" id="roll" value="<?php echo $row[11]; ?>">
				</td>
			</tr> 
			<tr>
				<td>
					telefono:
				</td>
				<td>
					<input type="text" name="telefono" id="telefono" value="<?php echo $row[8]; ?>">
				</td>
				<td>
					Direccion:
				</td>
				<td>
					<input type="text" name="direccion" id="direccion" value="<?php echo $row[9]; ?>">
				</td>
			</tr>
			<tr>
				<td>
					Correo:
				</td>
				<td colspan="2">
					<input type="text" readonly name="correo" id="correo" value="<?php echo $row[10]; ?>">
				</td>
				<td>
					<input type="hidden" name="user" value="<?php echo $row[0]; ?>">
				</td>
			</tr>
			<tr>
				<td colspan="4" align="center"><input type="submit" name="Guardar"  value="Guardar"  class="submit"></td>                                                                                                                                                                                                                                                                                 
			 </tr>
       </table>
</div>
       </form>  
</body>
</html>