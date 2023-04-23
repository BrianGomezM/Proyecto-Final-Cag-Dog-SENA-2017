<?php
		include('../conex/conex.php');
		$link=Conectarse();
		$borrar=$_GET['id_borrar'];
		$buscar1=$_GET['buscar1'];
		$selecione=$_GET['selecione'];
		$sql="DELETE FROM vacunacion WHERE vacunacion.id_vacuna='$borrar'";
		$result=mysql_query($sql,$link);
		header('location:consultar_vacunacion.php?buscar1='.$buscar1.'&selecione='.$selecione);
		
?>