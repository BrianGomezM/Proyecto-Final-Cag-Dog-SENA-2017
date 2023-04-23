<?php
		include('../Conexion_BD/conex.php');
		$link=Conectarse();
		$borrar=$_GET['id_borrar'];
		$buscar1=$_GET['buscar1'];
		$selecione=$_GET['selecione'];
		$sql="DELETE FROM historia_clinica WHERE historia_clinica.id_historial='$borrar'";
		$result=mysql_query($sql,$link);
		header('location:buscar_historia_clinica.php?buscar1='.$buscar1.'&selecione='.$selecione);
		
?>