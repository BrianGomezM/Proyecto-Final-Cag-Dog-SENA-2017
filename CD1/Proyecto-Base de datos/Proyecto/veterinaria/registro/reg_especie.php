<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/form.css" />
<link rel="stylesheet" type="text/css" href="../registro/bton.css" />
<style>
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
</head>
<body>
<center>
	<table border="0">
	<form id="reg" action="proce_especie.php" method="POST">
	<tr><td class="jv" colspan="3"><center>Registrar especie</center></td></tr>
	<tr>
	<td>Ingrese especie: </td>
	<td><input type="text" name="nom" placeholder="Nombre de la especie"required></td>
	</tr>
	<tr>
	<td></td>
	<td>
	<input type="submit" class="submit" value="Registrar"></form>
	<form id="reg" action="../consulta/cons_especies.php" method="POST">
	<input type="submit" class="submit" value="Consultar"></form>
	</td>
	</tr>
	</table>
</center>
</body>
</html>