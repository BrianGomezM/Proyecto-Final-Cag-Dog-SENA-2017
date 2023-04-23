<?php
$id=$_GET['user'];
$id=base64_decode($id);
?>
<html>
<head>
<link rel="stylesheet" href="../registro/bton.css" type="text/css" media="screen">
<style>
.letras{
     font-family: "Arial";
    font-size: 12;
	
}
.jv{
 font-family: "Arial";
    font-size: 12;
  color: #ffffff;
  background-color: #238276;

}
table {     font-family: "Arial",font-size: 12;;
    font-size: 12px;    margin: 45px;     widtd: 480px; text-align: left;    border-collapse: collapse; }

td {     font-size: 13px;     font-weight: normal;     padding: 8px;     background: #b9c9fe;
    border-top: 4px solid #aabcfe;    border-bottom: 1px solid #fff; color: #039; }

td {    padding: 8px;     background: #e8edff;     border-bottom: 1px solid #fff;
    color: #669;    border-top: 1px solid transparent; }

tr:hover td { background: #d0dafd; color: #339; }
</style>
</head>
<body>
<center>
<table>
<form action="proce_pass.php" method="POST" target="proceso">
<tr colspan="3"><td class="jv" colspan="3"><label class="letras">Cambiar Clave</label></td></tr>
<tr class="jv">
<td>Ingrese clave actual: </td><td><input placeholder="Clave actual" type="password" name="pasvi"></td><br>
</tr>
<tr class="jv">
<td>Ingrese clave nueva: </td><td><input type="password" placeholder="Nueva clave" name="passn"></td><br>
</tr>
<tr class="jv">
<td>Repita la clave nueva: </td><td><input type="password" placeholder="Confirmar nueva clave" name="passnr"></td>
</tr>
<tr>
<input type="hidden"  name="dp" id="dp" <?php echo "value='".$id."'";?>>
<td colspan="3"><input type="submit" class="submit" value="Cambiar Clave"></td>
</form>
</tr>
</table>
<center>
</body>
</html>