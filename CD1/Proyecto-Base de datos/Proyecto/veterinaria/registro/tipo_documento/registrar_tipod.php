<?php
include('../conex/conex.php');
?>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<title>roll</title>
<script type="text/javascript" src="../pestañas/pestañas.js"></script>
<link rel="stylesheet" href="../pestañas/pestañas.css" TYPE="text/css" MEDIA="screen">
<link href="../bton.css" rel="stylesheet">
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
    font-size: 12px;    margin: 45px;     width: 480px; text-align: left;    border-collapse: collapse; }

th {     font-size: 13px;     font-weight: normal;     padding: 8px;     background: #b9c9fe;
    border-top: 4px solid #aabcfe;    border-bottom: 1px solid #fff; color: #039; }

td {    padding: 8px;     background: #e8edff;     border-bottom: 1px solid #fff;
    color: #669;    border-top: 1px solid transparent; }

tr:hover td { background: #d0dafd; color: #339; }

div.centraTabla table {
margin: 0 auto;
text-align: left;
}


</style>
</head>
<body>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				
			</div>

			<div class="articulo">
				<article>
<div class='centraTabla'>
<table width="20%"  align="center" cellpadding="5" cellspacing="0" >
<form name="form1" method="post" action="../tipo_documento/control_tipod.php">

  <tr><td colspan="4" class="jv"><div align="center" style="font-weight: bold"><center>Registrar Tipo Documento</center></div></td></tr>
       <tr><td>Ingrese Tipo de Documento:</td><td colspan="2"><label><input type="text" name="tipodoc" id="tipodoc" required></label></td></tr>
      

       <tr><td><input type="reset" name="submit" value="Limpiar"  class="submit" required></td>
         <td colspan="1"><input type="submit" name="submit" value="Guardar"  class="submit" required></td>
  </form>
			
				
      <td> <?php include('../filtro/filtro_tipod.php');?></td></tr>
	  </table>
</div>
	  </body>
</html>