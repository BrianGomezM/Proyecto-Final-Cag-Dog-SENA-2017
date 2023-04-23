<?php
include('../conex/conex.php');
$link=Conectarse();
$roll=$_POST['roll'];
$user=$_POST['user'];
$sql="INSERT INTO roll  (id_roll,roll)
VALUES (
NULL ,'$roll')";

$result2=mysql_query($sql,$link);
header('Location:../roll/registrar_roll.php?user='.$user);
?>
