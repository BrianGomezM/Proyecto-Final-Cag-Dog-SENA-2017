<?php
include('../conex/conex.php');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>roll</title>
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
				<table width="40%" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#EBedFF">           
                        <form name="form1" method="post" action="../roll/control_roll.php" >
                        

       <tr><th colspan="2">registrar roll</th></tr>
       <tr><td>ingrese roll:</td><td><input type="text" name="roll2" id="roll2" required></td></tr>
         
	  <tr><td><input type="submit" name="Guardar" value="Guardar"  id="subt2" required></td>
		</form>
      
				
      <td> <?php include('../filtro/filtro_roll.php');?></td></tr>
	  </table>
	  
                   
               
			
</body>
</html>
                        
            
              