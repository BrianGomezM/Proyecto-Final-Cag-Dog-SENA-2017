<center>
<?php
//paginador
header("Content-Type: text/html;charset=utf-8");
include ('../../include/conex.php');
$con= Conectarse();
$link= Conectarse();
$tiempo="";
//buscador
$consul4="SELECT id_propietario,p_nombre,p_apellido FROM propietario";
$resul4= mysql_query($consul4,$link);
if(isset($_POST['pro']))
{
	$pro= $_POST['pro'];
	//echo "opcion: ".$pro;
	$RegistrosAMostrar=5;
			if(isset($_GET['pag']))
			{
				$RegistrosAEmpezar=($_GET['pag']-1)*$RegistrosAMostrar;
				$PagAct=$_GET['pag'];
			}
			else
			{
				$RegistrosAEmpezar=0;
				$PagAct=1;
			}
	

if($pro>0)
{
	header('Location:busqueda.php?pro='.$pro);
}
}
//------------------------------------------------------------------------------------------
$RegistrosAMostrar=2;
//estos valores los recibo por GET
if(isset($_GET['pag'])){
	$RegistrosAEmpezar=($_GET['pag']-1)*$RegistrosAMostrar;
	$PagAct=$_GET['pag'];
//caso contrario los iniciamos
}else{
	$RegistrosAEmpezar=0;
	$PagAct=1;
	
}
$Resultado=mysql_query("SELECT mascota.id_mascota, mascota.nombre, DATEDIFF(fecha_actu,fecha_nacimiento), mascota.color, mascota.peso_kg, mascota.raza, 
genero.genero, especie.especie, estado.estado, propietario.p_nombre, propietario.p_apellido FROM mascota,propietario,genero,especie,estado
WHERE mascota.id_genero=genero.id_genero AND mascota.id_especie=especie.id_especie AND mascota.id_estado=estado.id_estado
AND mascota.id_propietario=propietario.id_propietario LIMIT $RegistrosAEmpezar, $RegistrosAMostrar",$con);$cant=1;
echo "<table border='1'>";
echo "<tr>";
	echo "<th>No</th>";
	echo "<th>PACIENTE</th>";
	echo "<th>EDAD</th>";
	echo "<th>COLOR</th>";
	echo "<th>PESO_KG</th>";
	echo "<th>RAZA</th>";
	echo "<th>GENERO</th>";
	echo "<th>ESPECIE</th>";
	echo "<th>ESTADO</th>";
	echo "<th>PROPIETARIO</th>";
	echo "<th colspan='2'>OPCIONES</th>";
	echo "</tr>";
while($MostrarMostrarFila=mysql_fetch_array($Resultado)){
		$reg=$cant-1+1;
	
		if($MostrarMostrarFila[2]<32)
				   {
				
					  $tiempo= " Dias";
				   }
				else
				{
					if($MostrarMostrarFila[2]>365)
					  {
						  $tiempo= " A&ntildeos";
						  $MostrarMostrarFila[2] = floor( $MostrarMostrarFila[2]/ 366 );
						 
						  
					  }
					
				  else
				  {
							if(($MostrarMostrarFila[2]>31) && ($MostrarMostrarFila[2]<367))
							  {
								  $MostrarMostrarFila[2] = floor( $MostrarMostrarFila[2]/ 31 );
								  $tiempo= " Mes";
							  }
				  } 
				  
				}
	echo "<tr>";
	echo "<td>";
	echo "<p class='compañia' value='".$MostrarMostrarFila['0']."' name='numero_especie'>".$cant++."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$MostrarMostrarFila['1']."' name='nombre_especie'>".$MostrarMostrarFila['1']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$MostrarMostrarFila['1']."' name='fecha'>".$MostrarMostrarFila['2'].$tiempo."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$MostrarMostrarFila['1']."' name='color'>".$MostrarMostrarFila['3']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$MostrarMostrarFila['1']."' name='peso'>".$MostrarMostrarFila['4']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$MostrarMostrarFila['1']."' name='raza'>".$MostrarMostrarFila['5']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$MostrarMostrarFila['1']."' name='genero'>".$MostrarMostrarFila['6']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$MostrarMostrarFila['1']."' name='especie'>".$MostrarMostrarFila['7']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$MostrarMostrarFila['1']."' name='estado'>".$MostrarMostrarFila['8']."</p>";
	echo "</td>";
	echo "<td>";
	echo "<p class='compañia' value='".$MostrarMostrarFila['1']."' name='propietario'>".$MostrarMostrarFila['9']." ".$MostrarMostrarFila['10']."</p>";
	echo "</td>";
	echo "<td>";
    echo "<a href='../../actualizar/act_mascota.php?id_reg=$MostrarMostrarFila[0]' target='proceso'><img src='../../img/edit.png' width='20' height='20'/></a>";
	echo "</td>";
	echo "<td>";
	echo "<a href='../../del/del_mascota.php?id_reg=$MostrarMostrarFila[0]' target='proceso' onclick='return confirmar();'><img src='../../img/del.gif' width='20' height='20' /></a>";
	echo "</td>";
	echo "</tr>";
	
	
   }										
//******--------determinar las páginas---------******//
$NroRegistros=mysql_num_rows(mysql_query("SELECT mascota.id_mascota, mascota.nombre, DATEDIFF(fecha_actu,fecha_nacimiento), mascota.color, mascota.peso_kg, mascota.raza, 
genero.genero, especie.especie, estado.estado, propietario.p_nombre, propietario.p_apellido FROM mascota,propietario,genero,especie,estado
WHERE mascota.id_genero=genero.id_genero AND mascota.id_especie=especie.id_especie AND mascota.id_estado=estado.id_estado
AND mascota.id_propietario=propietario.id_propietario",$con));

$PagAnt=$PagAct-1;
$PagSig=$PagAct+1;
$PagUlt=$NroRegistros/$RegistrosAMostrar;

//verificamos residuo para ver si llevará decimales
$Res=$NroRegistros%$RegistrosAMostrar;
// si hay residuo usamos funcion floor para que me
// devuelva la parte entera, SIN REDONDEAR, y le sumamos
// una unidad para obtener la ultima pagina
if($Res>0) $PagUlt=floor($PagUlt)+1;

//desplazamiento
echo "<table>";
echo "<tr>";
echo "<td><a  onclick=\"Pagina('1')\">Primero</a></td>";
if($PagAct>1) echo "<td><a onclick=\"Pagina('$PagAnt')\">Anterior</a></td>";
echo "<td><strong>Pagina ".$PagAct."/".$PagUlt."</strong></td>";
if($PagAct<$PagUlt)  echo "<td><a onclick=\"Pagina('$PagSig')\">Siguiente</a></td>";
echo "<td><a  onclick=\"Pagina('$PagUlt')\">Ultimo</a></td>";
echo "</tr>";
echo "</table>";
?>
 <form action=""  target="" method="POST" name="pro">
  <table><tr><td>Buscar por</td></tr>
  <td><p class="compañia">Propietario:</p> </td><td><select name="pro"  onchange="document.pro.submit();">
	<option name="0" id="0" value="null">Selecione...</option>
	<?php
		//mostrar todos los propietarios
	 while($fila=mysql_fetch_row($resul4)){
	 echo "<option value='".$fila['0']."'>".$fila['1']." ".$fila['2']."</option>";
	 }					
	?>	
	<option  value="todo">Todo</option>	
	</td></select>
	<input type="submit" value="" name="buscar" style="display:none">
	</form>
  </table>
  </center>
 