<?php
include('../conex/conex.php');
$link=Conectarse();
$estado=$_POST['estado'];
$user=$_get['user'];
$sql="INSERT INTO estado (
id_estado ,
estado 
)
VALUES (
NULL , '$estado')";
$result2=mysql_query($sql,$link);
header('Location:../estado/registrar_estado.php?user='.$user);
?>
