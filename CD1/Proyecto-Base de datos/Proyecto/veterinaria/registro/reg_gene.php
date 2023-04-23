<html>
<body>
<head>
<link rel="stylesheet" type="text/css" href="../css/form.css" />
<link rel="stylesheet" type="text/css" href="bton.css" />
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
<center>
	<table border="0">
	<form id="reg" action="proce_genero.php" method="POST">
	<tr><td  colspan="3" class="jv"><center>Registrar Genero</center></td></tr>
	<tr>
	<td colspan="1">Ingrese genero: </td>
	<td><input type="text" placeholder="Genero" name="nom" required></td>
	</tr>
	<tr>
	<td>
	<input type="submit" value="Registrar" class="submit"></form>
	</td><form id="reg" action="../consulta/cons_genero.php" method="POST"><td>
	<input type="submit" value="Consultar" class="submit"></form>
	</td>
	</tr>
	</table>
</center>
</body>
</html>