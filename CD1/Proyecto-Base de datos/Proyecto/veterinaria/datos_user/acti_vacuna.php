<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
        
        <link rel="stylesheet" type="text/css" href="historia_usuario/hola.css"/>
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="historia_usuario/cambiarPestanna.js"></script>
        
       <title>Vacunación</title>
    </head>
  <body onload="javascript:cambiarPestanna(pestanas,pestana1);">
      <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <div class="contenedor">
             <div class="titulo"> Vacunaci&oacuten </div>
   <center>
    <table class="letragrande">
	<tr>
	  <td colspan="5"><br><h1>&nbsp;&nbsp; Actividad:</h1></td>
	   <tr>
	    <td colspan="5">&nbsp;
	     <textarea name="actividad" Readonly="readonly" class=estilotextarea title="actividad" > 
              <?php if(isset($actividad)){echo $actividad;}?>
              <?php if(isset($row5[0])){echo $row5[0];}?></textarea>
            </td>
          </tr>
        </tr>
     </table>
   </center>
  </body>
</html>