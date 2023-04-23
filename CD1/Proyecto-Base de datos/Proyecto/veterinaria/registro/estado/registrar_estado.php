<?php
include('../conex/conex.php');
?>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>estado</title>
<script type="text/javascript" src="../pestañas/pestañas.js"></script>
<link rel="stylesheet" href="../pestañas/pestañas.css" TYPE="text/css" MEDIA="screen">
</head>
<body>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				
			</div>

			<div class="articulo">
				<article>
<table width="20%" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#EBedFF">
<form name="form1" method="post" action="../estado/control_estado.php">

       <tr><td colspan="2"><div align="center" style="font-weight: bold">registrar estado</div></td></tr>
       <tr><td>ingrese estado:</td><td><label><input type="text" name="estado" id="estado"></label></td></tr>
      
   	<center><tr><td colspan="1"><input type="submit" name="Guardar" value="Guardar"  id="subt2"  ></td>
		</form>	
		
 <td><?php include('../filtro/filtro_estado.php')?><td></tr>
      
			

	  <tr><td><?php include('../hora/hora.php')?>
</td><td>
       </table>
	   <body>
</html>
				  
