<?php
header("Content-Type: text/html;charset=utf-8");
if(isset($_POST['exit']))
{
	$user=$_GET['user'];
$user=base64_decode($user);
//echo "id del usuario: ".$user;
$online="UPDATE sespa_veterinaria.propietario SET online = '2' WHERE propietario.id_propietario ='$user'";
$conf=mysql_query($online,$link);
	if (!$conf)
	{
		echo '<script language="javascript">alert("error al cerrar secion");</script>';
		require('index.php');
	}
	else
	{
	//echo "actualizo es estado a : ".$row[12];
		
		echo '<script type="text/javascript">
			window.opener.location.reload();
			window.close();
			</script>';
			header('Location:index.php');
	}
}
?>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
	
	<title>Principal</title>
	<link rel="stylesheet" href="css/defecto.css">
	<link rel="stylesheet" href="css/pesta���as.css">
	<script type="text/javascript" src="js/pesta���as.js"></script>
	
	
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script src="js/sweetalert-master/dist/sweetalert-dev.js"></script>
	<link rel="stylesheet" href="js/sweetalert-master/dist/sweetalert.css">
	<script language="Javascript">
	document.oncontextmenu = function(){return false}
</script>
<script language="JavaScript">
//Ajusta el tama���o de un iframe al de su contenido interior para evitar scroll
function autofitIframe(id){
if (!window.opera && document.all && document.getElementById){
id.style.height=id.contentWindow.document.body.scrollHeight;
} else if(document.getElementById) {
id.style.height=id.contentDocument.body.scrollHeight+"px";
}
}
</script>
	</head>
<body oncontextmenu='return false' onkeydown='return false'>

	<header class="logo_img"><center>		
		<a href="#"><img src="img/x.png" alt="logo" class="img"></a>
		<h1><?php echo "Bienvenido<br>".$row[1],' '.$row[3]; ?> </h1>
		<h2>Regional Cauca<br>Centro Agropecuario</h2>
		<div class="barra_menu">
		
		<?php
		if($row[11]==1)
		{			
			include ('menu/menu_admin.php');
		}
		if($row[11]==2)
		{			
			include ('menu/menu_user.php');
		}
		?>
		</center></div>
</header>

<div class="contenido">
<iframe id="miFrame" name="proceso"  onload="autofitIframe(this);" frameborder="0" class="" src="fondo.php">
</iframe>
<footer>
		<label><center>Cat-Dog</center></label>
		<label><center>Todos los derechos reservados © 2016</center></label>
		<label><center>Cauca-Popayan-Colombia</center></label>
		<label><center>análisis y desarrollo de sistemas de información</center></label>
</footer>
</div>

</body>
</html>