<?php 
function Conectarse() 
{ 
  if (!($link=mysql_connect("localhost","root","sena2016"))) 
	{ 
      echo "conectando a la base de datos."; 
      exit(); 
   } 
	 if (!mysql_select_db("sespa_veterinaria",$link)) 
   { 
   echo '<script language="javascript">alert("error en conectar al a base de datos archivo conex de richard");
				   	var pagina="index.php"
				   	location.href=pagina				
					</script>';
      exit(); 
   } 
   return $link;
} 
?>