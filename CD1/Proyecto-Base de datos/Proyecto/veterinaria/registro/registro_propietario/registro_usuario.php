<?php
include('../conex/conex.php');
	$link=Conectarse();
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">

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
<script type="text/javascript">
function validar(e) { // 1
    tecla = (document.all) ? e.keyCode : e.which; // 2
    if (tecla==8) return true; // 3
    patron = /\d/; // 4
    te = String.fromCharCode(tecla); // 5
    return patron.test(te); // 6
}
</script>
</head>
	
    
<body>
<div class='centraTabla'><br><br>
<table width="50%" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#e8edff">
<form name="form1" method="post" action="../registro_propietario/control_registro.php">
		
       <tr><td colspan="4" class="jv"><div align="center" style="font-weight: bold"><center>Datos de registro</center></div></td></tr>
       <tr><td><div>Primer Nombre</td><td><label><input type="text" name="nombre1" id="nombre1" title="primer nombre" required></label></td>
	    <td>Segundo Nombres:</td><td><label><input type="text" name="nombre2" id="nombre2" title="segundo nombre" ></label></div></td></tr>
       <tr><td>Primer Apellidos:</td><td><input type="text" name="apellido1" id="apellido1" title="primer Apellidos" required></td>
       <td>Segundo Apellidos:</td><td><input type="text" name="apellido2" id="apellido2" title="segundo apellido" ></td></tr>
           <tr><td>Tipo Identificacion:</td><td><label><select name="tipodocu" id="tipodocu">      
			                          <option value="0">Seleccione</option>
           <?php
	 
	   $sql3="SELECT * FROM tipo_document WHERE 1";
	   $result3=mysql_query($sql3,$link);
	   while($row3=mysql_fetch_array($result3))
	   {
		   if($row3[0]==$row[3]){$sid='selected="selected"';}
		   else
		   {$sid="";}

	    echo '<option value="'.$row3[0].'"'.$sid.'>'.$row3[1].'</option>';
	   }
	    //
	   ?> </select></label>
       <td>Identificacion:</td><td><input type="text" onkeypress="return validar(event)" name="documento" id="documento" title="identificacion" required></td></tr>

          
	  <tr><td>Telefono:</td><td><input type="text" name="telefono" onkeypress="return validar(event)" id="telefono" title="telefono" required></td>
	   <td>Direccion:</td><td><input type="text" name="direccion" id="direccion" title="direccion" required></td></tr>
      <tr><td>Correo:</td><td><input type="email" name="correo" id="correo" title="correo" required></td>
  <td>Estado:</td><td><select name="estado" id="estado"><option value="0" >Seleccione</option>
           <?php
	 
	   $sql3="SELECT * FROM est_propi WHERE 1";
	   $result3=mysql_query($sql3,$link);
	   while($row3=mysql_fetch_array($result3))
	   {
		   if($row3[0]==$row[3]){$sid='selected="selected"';}
		   else
		   {$sid="";}

	    echo '<option value="'.$row3[0].'"'.$sid.'>'.$row3[1].'</option>';
	   }
	    
	   ?> </select></label></td></tr>
      
	 
	<center>
			<tr><td colspan="1" align="left"><input type="reset" name="Guardar" value="Limpiar" class="submit" ></td>
            <td colspan="1" align="center"><input type="submit" name="Guardar" value="Guardar" class="submit" id="subt2"  ></td>
		</form>
	
		
       
 <td align="right"><?php include('../filtro/filtro.php')?><td></tr>
 	
      
			

	  
       </table>
</div>
	   
			

                    
				
			
</body>
</html>