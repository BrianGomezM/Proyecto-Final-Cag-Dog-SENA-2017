<?php
include('../conex/conex.php');
$link=Conectarse();
$tipodoc=$_POST['tipodoc'];
$user=$_get['user'];
$sql="INSERT INTO tipo_document
(
id_tipo_docu ,
tipo 
)
VALUES (
NULL , '$tipodoc')";
$result2=mysql_query($sql,$link);
header('Location:../tipo_documento/registrar_tipod.php?user='.$user);
?>