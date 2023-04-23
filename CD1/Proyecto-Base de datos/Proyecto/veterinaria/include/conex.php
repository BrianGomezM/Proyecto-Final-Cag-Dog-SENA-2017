<?php
function Conectarse()
{
if (!($link= mysql_connect("localhost","root","sena2016")))
{
echo "error conectado ala base de datos<br>";
}
if (!mysql_select_db("sespa_veterinaria",$link))
{
echo '<script language="javascript">alert("error en conectar al a base de datos archivo conex de javier");
				   	var pagina="index.php"
				   	location.href=pagina				
					</script>';
}
return $link;
}
?>