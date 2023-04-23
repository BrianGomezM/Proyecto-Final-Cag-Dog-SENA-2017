<?php
include('../conex/conex.php');
$link= Conectarse();
$selecione=$_POST['sel'];
						switch ($selecione)
							{
								case 1:
								{
									$documento=$_POST['busc'];
									$propietario="SELECT propietario.id_propietario FROM propietario WHERE numero_tipo='$documento'";
									$confir=mysql_query($propietario,$link);
									if ($ob=mysql_fetch_object($confir))
									{
										header('Location:../registro_propietario/editar_registropac.php?selecione='.$selecione.'&documento='.$documento);
									}
									else
									{
										 echo '<script language="javascript">alert("El numero de documento no existe ");
														var pagina="../filtro/filtro2.php";
														location.href=pagina				
														</script>';
															
									}
								}
								break;
								case 2:
								{
									$documento=$_POST['busc'];
									$propietario1="SELECT propietario.p_nombre  FROM propietario WHERE propietario.p_nombre like '%$documento%'";
									
									$confir1=mysql_query($propietario1,$link);
									if ($ob=mysql_fetch_object($confir1))
									{
									//echo $propietario1;
											header('Location:../registro_propietario/editar_registropac.php?selecione='.$selecione.'&documento='.$documento);
									}
									else
									{
										 echo '<script language="javascript">alert("el usuario por primer nombre no existe");
														var pagina="../filtro/filtro2.php";
														location.href=pagina				
														</script>';
															
									}
								}
								break;
								
								case 3:
								{
									$documento=$_POST['busc'];
									$propietario1="SELECT propietario.p_nombre  FROM propietario WHERE propietario.codigo like '%$documento%'";
									
									$confir1=mysql_query($propietario1,$link);
									if ($ob=mysql_fetch_object($confir1))
									{
									//echo $propietario1;
											header('Location:../registro_propietario/editar_registropac.php?selecione='.$selecione.'&documento='.$documento);
									}
									else
									{
										 echo '<script language="javascript">alert("el codigo no existe");
														var pagina="../filtro/filtro2.php";
														location.href=pagina				
														</script>';
															
									}
								}
								break;
								
							}
							
?>
					