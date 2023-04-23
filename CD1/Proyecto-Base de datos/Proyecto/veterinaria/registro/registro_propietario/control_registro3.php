<?php
include('../conex/conex.php');
$link=Conectarse();
$user=$_POST['1'];

$nombre1=$_POST['nombre1']; 
$nombre2=$_POST['nombre2'];
$apellido1=$_POST['apellido1'];
$apellido2=$_POST['apellido2'];
$tipodocu=$_POST['tipodocu'];
$documento=$_POST['documento'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$validar=0;
$clave= rand(1000, 9000);

$num=base64_encode($clave);

$sql="INSERT INTO propietario(
id_propietario ,
p_nombre ,
s_nombre ,
p_apellido ,
s_apellido ,
id_tipo_docu ,
numero_tipo ,
clave ,
celular ,
direccion ,
email ,
id_roll,
id_est_propi ,
online 
)
VALUES (
NULL , '$nombre1', '$nombre2', '$apellido1', '$apellido2', '$tipodocu', '$documento', '$clave', '$telefono', '$direccion', '$correo','1', '$estado','1')";


$para = '$correo';
$mensaje= "
			<html>
			<body>
			<table border='0' aling='center' width='732'>
			<tr>
			<th colspan='3'>
			<img src='http://s2.subirimagenes.com/otros/previo/thump_9508301logo2.jpg' border='0' width='732' height='194'/></th>
			</tr>
			<tr>
			<td colspan='3'><br>
		
			<p>la clave que le hemos asignado es $clave
			</td>
			</tr>
			<tr>
					<th colspan='3'><center>Veterinaria San Roque</center></th>
				</tr>
			</table>
			
			</p>
			</body>
			</html>
			";
			//echo "".$mensaje;
			$título= "Cambio de clave ";
			//// Para enviar un correo HTML, debe establecerse la cabecera Content-type
			$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

			// Cabeceras adicionales
			$cabeceras .= 'From: Cambio de Clave de CatDog <admin@catdog.com>' . "\r\n";
			///////////////////////////////////////////////////////////////////////////

			//funcion para mensajes a correos mail(para,asunto, mensaje);
			mail($para, $título, $mensaje, $cabeceras);


 ?>
 