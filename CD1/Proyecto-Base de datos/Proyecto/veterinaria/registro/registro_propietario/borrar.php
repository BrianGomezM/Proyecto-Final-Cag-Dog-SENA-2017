<?php
		include('../conex/conex.php');//NSR
		$link=Conectarse();//NSR
		$borrar=$_GET['id_borrar'];//Recupero Variables
		$user=$_GET['user'];
		$sql="DELETE FROM propietario WHERE propietario.id_propietario ='$borrar'";
		$result=mysql_query($sql,$link);

	echo '<script language="javascript">alert("el registro se elimino exitosamente ");
													var pagina="../registro_propietario/registro_usuario.php?borrar='.$borrar.'&&selecione='.$selecione.'&&documento='.$documento.'";
												location.href=pagina				
														</script>';
		
?>