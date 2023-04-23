<?php
	include('../Conexion_BD/conex.php');
	$link= Conectarse();

	if (isset($_GET['id_historia']))
	{
		$id_historia=$_GET['id_historia'];
		$editar=$_GET['editar'];
		$sql="SELECT	historia_clinica.fecha, propietario.numero_tipo,  propietario.p_nombre, propietario.s_nombre, propietario.p_apellido, propietario.s_apellido, propietario.celular, propietario.email, propietario.direccion, mascota.nombre, especie.especie , mascota.raza, mascota.fecha_nacimiento, mascota.color, mascota.peso_kg, genero.genero, historia_clinica.motivos, historia_clinica.piel_anexos, historia_clinica.ganglios_linfaticos, historia_clinica.aparato_respiratorio, historia_clinica.aparato_reproductor, historia_clinica.mucosa, historia_clinica.plan_sanitario, historia_clinica.organos_sentidos, historia_clinica.aparato_neurologico, historia_clinica.signos_clinicos, historia_clinica.examen_muscoesqueletico, historia_clinica.aparato_cardiovascular, historia_clinica.aparato_digestivo, historia_clinica.frecuencia_cardiaca, historia_clinica.frecuencia_respiratoria, historia_clinica.pulso, historia_clinica.temperatura_rectal, historia_clinica.phc, historia_clinica.caprologia, historia_clinica.citologias, historia_clinica.quimicass_serica, historia_clinica.imagenologia, historia_clinica.rspaje_koh, historia_clinica.uroanalisis, historia_clinica.patologias, historia_clinica.test_diagnostico, historia_clinica.d_diferencial, historia_clinica.d_definitivo, historia_clinica.tratamiento FROM historia_clinica, propietario, mascota, especie, genero WHERE historia_clinica.id_historial='$id_historia' AND historia_clinica.id_mascota = mascota.id_mascota AND mascota.id_genero = genero.id_genero AND mascota.id_especie = especie.id_especie AND mascota.id_propietario = propietario.id_propietario";
		$query4=mysql_query($sql,$link);
		$row4=mysql_fetch_row($query4);	
		
	
			$munoz="SELECT propietario.id_propietario, mascota.id_mascota FROM mascota, propietario, historia_clinica WHERE historia_clinica.id_historial =  '$id_historia' AND propietario.id_propietario = mascota.id_propietario";
			$munoz9=mysql_query($munoz,$link);
			$munoz10=mysql_fetch_row($munoz9);	
	}
	
	
	if(isset($_GET['propi']))
	{
		$propi=$_GET['propi'];
		$dapro="SELECT p_nombre, p_apellido, codigo, celular, email, direccion, s_apellido FROM propietario WHERE id_propietario='$propi'";
		$query=mysql_query($dapro,$link);
		$row=mysql_fetch_row($query);
		$consultar_mascotas="SELECT id_mascota, nombre FROM mascota WHERE id_propietario = '$propi'";
		$query=mysql_query($consultar_mascotas,$link);
	}

	if(isset($_GET['mas']))
	{
		$id=$_GET['mas'];
		$slq2="SELECT especie.especie , mascota.raza, mascota.fecha_nacimiento, mascota.color, mascota.peso_kg, genero.genero FROM mascota,especie,genero
		WHERE mascota.id_mascota='$id' AND mascota.id_genero=genero.id_genero AND mascota.id_especie=especie.id_especie";
		$query2=mysql_query($slq2,$link);
		$row2=mysql_fetch_array($query2);
	}

	if(isset($_GET['fecha'])){$fecha=$_GET['fecha'];}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="../../datos_user/historia_usuario/hola.css"/>
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="cambiarPestanna.js"></script>
        
       <title>Historia Clinica</title>
    </head>
    <body onload="javascript:cambiarPestanna(pestanas,pestana1);">
	<br><br><br>
      <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <div class="contenedor">
             <div class="titulo"><center>Historia Clinica</center></div>
			<form action="../evaluar_botones/botones.php" method="POST" name="descargar">
            <div id="pestanas">
                <ul id=lista>
                    <li id="pestana1"><a href='javascript:cambiarPestanna(pestanas,pestana1);'>Usuario</a></li>
                    <li id="pestana2"><a href='javascript:cambiarPestanna(pestanas,pestana2);'>Paciente</a></li>
                    <li id="pestana3"><a href='javascript:cambiarPestanna(pestanas,pestana3);'>Anamnesico</a></li>
                    <li id="pestana4"><a href='javascript:cambiarPestanna(pestanas,pestana4);'>Constantes Fisiologicas</a></li>
                    <li id="pestana5"><a href='javascript:cambiarPestanna(pestanas,pestana5);'>Examen del laboratorio</a></li>
                    <li id="pestana6"><a href='javascript:cambiarPestanna(pestanas,pestana6);'>Diagnostico Diferencial</a></li>
					<li id="pestana7"><a href='javascript:cambiarPestanna(pestanas,pestana7);'>Diagnostico Definitivo</a></li>
					<li id="pestana8"><a href='javascript:cambiarPestanna(pestanas,pestana8);'>Tratamiento</a></li>
				
                </ul>
            </div>
            
            
       <center>
            <div id="contenidopestanas">
                <div id="cpestana1">
                <?php include('../Historia_Clinica/datos_personales.php');?>
                </div>
                <div id="cpestana2">
				<?php include('../Historia_Clinica/Datos_mascota.php');?>
				</div>
                <div id="cpestana3">
				<?php include('../Historia_Clinica/anamnesico.php');?>
				</div>
                <div id="cpestana4">
				<?php include('../Historia_Clinica/Constantes_Fisiologicas.php');?>
				</div>
                <div id="cpestana5">
               <?php include('../Historia_Clinica/Examen_Del_laboratorio.php');?>
				</div>
                <div id="cpestana6">
                <?php include('../Historia_Clinica/Diagnostico_Diferencial.php');?>
				</div>
				<div id="cpestana7">
                <?php include('../Historia_Clinica/Diagnostico_Definitivo.php');?>
				</div>
				<div id="cpestana8">
                <?php include('../Historia_Clinica/Tratamiento.php');?>
				</div>
            </div>
			  </center>
			<center><br>
				<input type="hidden" name="id_historia" id="id_historia" value="<?php if (isset($id_historia)){echo $id_historia;} ?>"/>
			<input type="submit" name="Guardar" value="Guardar"  id="subt2"><br><br>
			</center>
			</form>
			<center>	
			<?php include('../Filtro/filtro.php');?>
			</center>	<br>			
        </div>
		
    </body>
</html>