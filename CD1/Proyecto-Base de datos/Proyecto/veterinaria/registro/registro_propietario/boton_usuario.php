<?php
	
	if ($_POST[Guardar])
		{
			$nombre1=$_POST['nombre1'];
			$nombre2=$_POST['nombre2'];
			$apellido1=$_POST['apellido1'];
			$apellido2=$_POST['apellido2'];
			$tipodocu=$_POST['tipodocu'];
			$documento=$_POST['documento'];
			$telefono=$_POST['telefono'];
			$direccion=$_POST['direccion'];
			$correo=$_POST['correo'];
			$estado=$_POST['estado'];
			$clave=$_POST['clave'];
			
			
			header('Location:../registro_propietario/control_registro.php?nombre1='.$nombre1.'&nombre2='.$nombre2.'&apellido1='.$apellido1.'&apellido2='.$apellido2.'&tipodocu='.$tipodocu.'&documento='.$documento.'&sexo='.$sexo.'&clave='.$clave.'&telefono='.$telefono.'&direccion='.$direccion.'&correo='.$correo.'&estado='.$estado);	
			
		}
			
		
	
?>