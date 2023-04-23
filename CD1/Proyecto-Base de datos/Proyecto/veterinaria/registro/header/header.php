	<?php
		include('../conex/conex.php');
		$link=Conectarse();
		$user=$_GET['user'];
		$sql="SELECT * from propietario WHERE id_propietario='$user'";
		$result=mysql_query($sql,$link);
		$row=mysql_fetch_array($result);
			?>