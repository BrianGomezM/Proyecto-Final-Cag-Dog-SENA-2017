<?php
$num=base64_encode($user);
?>
<div class="articulo">
<article>
<div id="header">
<ul class="nav">
<li><a href="datos_user/usuario.php?user=<?php echo"".$user;?>" action="" target="proceso" class="dbasicos">Perfil</a></li>
<li><a href="datos_user/selec_masc.php?user=<?php echo"".$num;?>" action="" target="proceso" class="dbasicos">Mi Mascota</a></li>
<li><a href="fondo.php" target="proceso">Plan Sanitario</a>
<ul>
<li><a href="datos_user/desparasitacion.php?user=<?php echo"".$user;?>" action="" target="proceso" class="dbasicos">Desparasitaci&oacute;n</a></li>
<li><a href="datos_user/vacunacion.php?user=<?php echo"".$user;?>" action="" target="proceso" class="dbasicos">Vacunaci&oacute;n</a></li>
</ul>
</li>
<li><a href="datos_user/historia.php?user=<?php echo"".$user;?>" action="" target="proceso" class="dbasicos">Historial clinica</a></li>
<li><a href="datos_user/cambio_pass.php?user=<?php echo"".$user;?>" action="" target="proceso" class="dbasicos">Cambiar Clave</a></li>
<li><form  method="POST"><input id="button" type="submit" name="exit" value="Salir"></form></li>
</ul>
</div>
</article>
</div>