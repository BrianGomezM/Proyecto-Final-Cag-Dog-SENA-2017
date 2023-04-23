<?php
		include('../conex/conex.php');
		$link=Conectarse();
		$user=$_GET['user'];
		$editar=$_GET['id_editar'];
		$sql="SELECT * FROM propietario WHERE id_propietario='$editar'";
		$result=mysql_query($sql,$link);
		$row=mysql_fetch_array($result);
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="/registro/bton.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>actualizar usuario</title>
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
	<form name="form1" method="post" action="../registro_propietario/control_registro2.php">
		<div class='centraTabla'><table width="45%" height="45%" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#e8edff">

       <tr><td colspan="4" class="jv"><div align="center" style="font-weight: bold"><center>actualizar registro</center></div></td></tr>

    
      <td>estado:</td><td><select name="estado" id="estado"><option value="<?php echo $row[12]; ?>" >Seleccione</option>
           <?php

	   $sql="SELECT * FROM est_propi  WHERE 1";
	   $result=mysql_query($sql,$link);
	   while($row2=mysql_fetch_array($result))
	   {
		   	  if ($row2[0]==$row[12]) {$ver='Selected="Selected"';}
			else
			{$ver='';}
	    echo '<option value="'.$row2[0].'" '.$ver.'>'.$row2[1].'</option>';
	   }
	   ?> </select></label></td></tr>
        <tr><td>roll:</td><td><select name="roll" id="roll"><option value="<?php echo $row[12]; ?>" >Seleccione</option>
           <?php

	    $sql="SELECT * FROM roll  WHERE 1";
	   $result=mysql_query($sql,$link);
	   while($row2=mysql_fetch_array($result))
	   {
		   	  if ($row2[0]==$row[11]) {$ver='Selected="Selected"';}
			else
			{$ver='';}
	    echo '<option value="'.$row2[0].'" '.$ver.'>'.$row2[1].'</option>';
	   }
	   ?></select></label></td>

	  </tr>
      <input name="user" type="hidden" value="<?php echo $user; ?>"/>
		<input name="editar" type="hidden" value="<?php echo $editar; ?>"/>

   <tr><td colspan="3" align="center"><input type="submit" name="Guardar" value="actualizar"  class="submit" ></td>
 


                  </form>
<td><form method="LINK" ACTION="../registro_propietario/registro_usuario.php"> <input type="submit" class="submit" VALUE="cancelar"> </form></td></tr>
</table>
</div>
</body>
</html>