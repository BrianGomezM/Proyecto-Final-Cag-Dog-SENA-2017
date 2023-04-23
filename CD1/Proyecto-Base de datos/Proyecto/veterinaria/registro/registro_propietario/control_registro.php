<?php
include('../conex/conex.php');
$link=Conectarse();
$nombre1=$_POST['nombre1']; 
$nombre2=$_POST['nombre2'];
$apellido1=$_POST['apellido1'];
$apellido2=$_POST['apellido2'];
$tipodocu=$_POST['tipodocu'];
$documento=$_POST['documento'];
$clave= rand(1000, 9000);
$pass= base64_encode($clave);
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$estado=$_POST['estado'];
$validar=0;



$sql2="SELECT * FROM propietario WHERE numero_tipo='$documento'";
 $result2=mysql_query($sql2,$link);
 if($row=mysql_fetch_array($result2))
 {
	
	 echo '<script language="javascript">alert("El numero de documeto ya existe existe ");
														var pagina="../registro_propietario/registro_usuario.php";
														location.href=pagina				
														</script>';
	 
 }
 else
 {

$explode = explode("@", $correo);

//Lista de correo válidos
$permitidos=array('hotmail.com','gmail.com','yahoo.com','misena.edu.co');

//Cantidad de correos válidos
$cantidad=count($permitidos);
//Comparar con la lista de correos válidos
for ($i=0; $i < $cantidad; $i++) { 

if ($permitidos[$i]==$explode[1]) $validar=1;

}
//Si es válido registrar usuario
if($validar==1){
	//ingresar el codigo-----------------------------
	
	$consulta="SELECT codigo FROM propietario";
	$query_consulta=mysql_query($consulta,$link);
		//recorre y saca el ultimo codigo valido ingresado
	 while($fila=mysql_fetch_row($query_consulta)){
	// echo "codigos validos: ".$fila[0];
	// echo "<br>";
	// $codi=$fila[0];
	 }
	 //echo "el ultimo codigo: ".$codi;
	 //echo "<br>el nuevo codigo: ".$codi=$codi+1;
	 //Registrar usuario <----------
$sql="INSERT INTO propietario(
id_propietario ,
p_nombre ,
s_nombre ,
p_apellido ,
s_apellido ,
id_tipo_docu ,
numero_tipo ,
clave ,
celular ,
direccion ,
email ,
id_roll,
id_est_propi ,
online ,
codigo
)
VALUES (
NULL , '$nombre1', '$nombre2', '$apellido1', '$apellido2', '$tipodocu', '$documento', '$pass', '$telefono', '$direccion', '$correo','2', '$estado','1','$codi')";

  $result=mysql_query($sql,$link);
  if(!$result)
  {
		 echo '<script language="javascript">alert("error al registrar propietario ");
		 var pagina="../registro_propietario/registro_usuario.php";
														location.href=pagina				
														</script>';
  }
  else{
	  	 echo '<script language="javascript">alert("usuario  registrado");
		 var pagina="../registro_propietario/registro_usuario.php";
														location.href=pagina				
														</script>';
  
	
 }
	 
	
	//-------------------------------------------------

}
else
{
//Si no es válido imprimir mensajexscdw2
echo '<script language="javascript">alert("correo no valido");
		 var pagina="../registro_propietario/registro_usuario.php";
														location.href=pagina				
														</script>';	
}


}

 ?>
 