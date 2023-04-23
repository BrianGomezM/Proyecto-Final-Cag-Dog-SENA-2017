<?php
include ('../include/conex.php');
$link= Conectarse();

//----------------------------genero------------------------
$consul1= "SELECT id_genero,genero FROM genero";
$resul1= mysql_query($consul1,$link);

//----------------------------------------------------------
//----------------------------especie------------------------
$consul2= "SELECT id_especie,especie FROM especie";
$resul2= mysql_query($consul2,$link);

//----------------------------------------------------------
//----------------------------------------------------------
//----------------------------estadoa------------------------
$consul3= "SELECT id_estado,estado FROM estado";
$resul3= mysql_query($consul3,$link);

//----------------------------------------------------------
//----------------------------------------------------------
$consul4="SELECT id_propietario,p_nombre,p_apellido FROM propietario";
$resul4= mysql_query($consul4,$link);
if(isset($_POST['cons']))
{
header('Location:../consulta/pag_paciente/index.php');
}
?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
<link rel="stylesheet" type="text/css" href="bton.css" />
<style>
.submitx  {
 border: none;
 background: #ffffff;
 color: #238276;
 padding: 10px;
 border-color: #822340;
 border-radius: 5px;
 position: relative;
 box-sizing: border-box;
 transition: all 500ms ease;
}
.letras{
     font-family: "Arial";
    font-size: 17;
	
}
.jv{
 font-family: "Arial";
    font-size: 17;
  color: #ffffff;
  background-color: #238276;

}
table {     
font-family: "Arial";
    font-size: 17;
     margin: 45px;     widtd: 480px; text-align: left;    border-collapse: collapse; }

td {   padding: 8px;     background: #b9c9fe;
    border-top: 4px solid #aabcfe;    border-bottom: 1px solid #fff; color: #039; }

td {    padding: 8px;     background: #e8edff;     border-bottom: 1px solid #fff;
    color: #669;    border-top: 1px solid transparent; }

tr:hover td { background: #d0dafd; color: #339; }
</style>

<body><center>
	
	<table border="0">
	<form id="tiempo" name="tiempo" action="proce_mascota.php" method="POST">
	<tr><td colspan="3" class="jv"><center>Registrar Paciente</center></td></tr>
	<tr>
	<td>Nombre: </td>
	<td><input type="text" placeholder="Nombre" name="nom" required></td>
	</tr>
	<tr>
	<td>Fecha de nacimiento: </td>
	<td><input type="date" name="fecha" placeholder="edad" required>
	</td>
	</tr>
	<tr>
	<td>Color: </td>
	<td><input type="text" name="color" placeholder="Color" required></td>
	</tr>
	<tr>
	<td>Peso en kg: </td>
	<td><input type="number" name="peso"placeholder="Peso" required></td>
	</tr>
	<tr>
	<td>Raza: </td>
	<td><input type="text" name="raza" placeholder="Raza" required></td>
	</tr>
	<tr><td><p class="compañia">Genero:</p> </td><td><select name="gen" id="gen" onchange="document.gen.submit();">
	<option name="0" value="null">Selecione...</option>
	<?php
		//mostrar todas los generos
	 while($fila=mysql_fetch_row($resul1)){
	 echo "<option  value='".$fila['0']."' $tipo id='".$fila['0']."'  name='".$fila['0']."'>".$fila['1']."</option>";
	 }					
	?>				
	</tr></td></select>
    <tr><td><p class="compañia">Especie:</p> </td><td><select name="esp" id="esp" onchange="document.esp.submit();">
	<option name="0" id="0" value="null">Selecione...</option>
	<?php
		//mostrar todas las especies
	 while($fila=mysql_fetch_row($resul2)){
	 echo "<option value='".$fila['0']."' $tipo id='".$fila['0']."'  name='".$fila['0']."'>".$fila['1']."</option>";
	 }					
	?>				
	</tr></td></select> 
	<tr><td><p class="compañia">Estado:</p> </td><td><select name="est" id="est" onchange="document.est.submit();">
	<option name="0" id="0" value="null">Selecione...</option>
	<?php
		//mostrar todos los estados
	 while($fila=mysql_fetch_row($resul3)){
	 echo "<option value='".$fila['0']."' $tipo id='".$fila['0']."'  name='".$fila['0']."'>".$fila['1']."</option>";
	 }					
	?>				
	</tr></td></select>
	<tr><td><p class="compañia">Propietario:</p> </td><td><select name="pro" id="pro" onchange="document.pro.submit();">
	<option name="0" id="0" value="null">Selecione...</option>
	<?php
		//mostrar todos los propietarios
	 while($fila=mysql_fetch_row($resul4)){
	 echo "<option value='".$fila['0']."' $tipo id='".$fila['0']."'  name='".$fila['0']."'>".$fila['1']." ".$fila['2']."</option>";
	 }					
	?>				
	</tr></td></select>
	<tr>
	<td colspan=""><center><input type="submit"  class="submit" value="Registrar"></form>
	</td>	<form id="reg" action="../consulta/pag_paciente/index.php" method="POST" target="proceso">
	<td><input type="submit"  class="submit" name="cons" value="Consultar"></form></center>
	</td>
	</tr>
	</table>
</body></center>
</html>