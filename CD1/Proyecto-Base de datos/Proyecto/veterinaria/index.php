<?php

header("Content-Type: text/html;charset=utf-8");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
	<script language="JavaScript"> 
if(window.screen.availWidth == 1280)window.parent.document.body.style.zoom="120%" 
if(window.screen.availWidth == 1152)window.parent.document.body.style.zoom="108%" 
if(window.screen.availWidth == 1024)window.parent.document.body.style.zoom="96%" 
if(window.screen.availWidth == 800)window.parent.document.body.style.zoom="75%"; 
if(window.screen.availWidth == 640)window.parent.document.body.style.zoom="60%" 
</script> 
		
		<title>index</title>
		<link rel="stylesheet" type="text/css" href="css/bordes_de_la_index.css" /><!-- Estilo para los bordes de la pagina index y botones -->
		<link rel="stylesheet" type="text/css" href="css/estilo_de_la_pagina.css" /><!-- Pagina del index -->
		<link rel="stylesheet" type="text/css" href="css/estilo_botones.css" /><!-- Estilos para los botones del index-->
		<link rel="stylesheet" type="text/css" href="css/estilos_caja_de_texos.css" /> <!-- Cajas De Texto y iconos del Login -->
			
		<script src="js/botones.js"></script> <!-- Botones  -->
	</head>
	<body>
		<div class="container">
			<table border="0" align="center" width="50%" height='30%'>

				<tr>
					<td>
						
							<img src="img/logo_sena.png">
						
					</td>
				</tr>
			</table>
			<table border="0" align="center" width="50%" >
				<tr><td>
					<section>
							<?php include("js/imagenesrota.php") ?>
							
					</td>
					<td>
						<div class="mockup-content">
							<div class="morph-button morph-button-modal morph-button-modal-2 morph-button-fixed">
								<button type="button" >Iniciar Sesion</button>
								<div class="morph-content">
									<div>
										<div class="content-style-form content-style-form-1">
											<span class="icon icon-close">Close the dialog</span>
											<h2>Iniciar Sesion</h2>
											<form id="login" name="login" action="login.php" method="POST">
												<p><label>Correo</label><input type="email" name="msn"/></p>
												<p><label>Contraseña</label><input type="password" name="pass" class="cp"/></p>
												<p><input type="submit" value="entrar" class="sb"></p>
											</form>
										</div>
									</div>
								</div>
							</div><!-- morph-button -->
							<br>
							<div class="morph-button morph-button-modal morph-button-modal-2 morph-button-fixed">
								<button type="button">¿Olvido Contraseña?</button>
								<div class="morph-content">
									<div>
										<div class="content-style-form content-style-form-2">
											<span class="icon icon-close">Close the dialog</span>
											<h2>Recuperar<br> Contraseña</h2>
											<form id="recuperar" name="recuperar" action="recuperar.php" method="POST">
												<p><label>Correo:</label><input type="email" name="msn_recu" /></p>
												<p><label>Numero de documento:</label><input type="number" name="num_recu" /></p>
												<br>												
												<p><input type="submit" class="sb"></p>
											</form>
										</div>
									</div>
								</div>
							</div>
							<!-- morph-button -->
							
						</div><!-- /form-mockup -->
					</section>
				</td></tr>
			</table>
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/uiMorphingButton_fixed.js"></script>
		<script src="js/funcionbotnes.js"></script>
		
	</body>
</html>