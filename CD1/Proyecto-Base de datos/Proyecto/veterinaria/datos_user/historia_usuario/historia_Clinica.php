<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="historia_usuario/hola.css"/>
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="historia_usuario/cambiarPestanna.js"></script>
        
       <title>Historia Clinica</title>
    </head>
    <body onload="javascript:cambiarPestanna(pestanas,pestana1);">
      <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <div class="contenedor">
             <div class="titulo"><center>Historia Clinica</center></div>
            <div id="pestanas">
                <ul id=lista>
                    <li id="pestana1"><a href='javascript:cambiarPestanna(pestanas,pestana1);'>Anamnesico</a></li>
                    <li id="pestana2"><a href='javascript:cambiarPestanna(pestanas,pestana2);'>Constantes Fisiologicas</a></li>
                    <li id="pestana3"><a href='javascript:cambiarPestanna(pestanas,pestana3);'>Examen del laboratorio</a></li>
                    <li id="pestana4"><a href='javascript:cambiarPestanna(pestanas,pestana4);'>Diagnostico Diferencial</a></li>
                    <li id="pestana5"><a href='javascript:cambiarPestanna(pestanas,pestana5);'>Diagnostico Definitivo</a></li>
                    <li id="pestana6"><a href='javascript:cambiarPestanna(pestanas,pestana6);'>Tratamiento</a></li>
                </ul>
            </div>
            <div id="contenidopestanas">
                <div id="cpestana1">
				<?php include('anamnesico.php');?>
				</div>
                <div id="cpestana2">
				<?php include('Constantes_Fisiologicas.php');?>
				</div>
                <div id="cpestana3">
               <?php include('Examen_Del_laboratorio.php');?>
				</div>
                <div id="cpestana4">
                <?php include('Diagnostico_Diferencial.php');?>
				</div>
				<div id="cpestana5">
                <?php include('Diagnostico_Definitivo.php');?>
				</div>
				<div id="cpestana6">
                <?php include('Tratamiento.php');?>
				</div>
            </div>	
        </div>
		
    </body>
</html>