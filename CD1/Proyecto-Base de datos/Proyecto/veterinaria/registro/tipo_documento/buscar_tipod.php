<?php
include('../conex/conex.php');
$link= Conectarse();
$selecione=$_POST['sel'];



switch ($selecione)
							{
								case 1:
								{
									$tipo_doc=$_POST['tipo_doc'];
									$propietario="SELECT tipo_document.tipo FROM  tipo_document WHERE tipo_document.tipo like '%$tipo_doc%'";
									$confir=mysql_query($propietario,$link);
									if ($ob=mysql_fetch_object($confir))
									{
											
										header('Location:../tipo_documento/editar_tipodoc.php?                      selecione='.$selecione.'&&tipo_doc='.$tipo_doc);
									}
									else
									{
										 echo '<script language="javascript">alert("El registro por tipo de documento no existe ");
														var pagina="../tipo_documento/registrar_tipod.php";
														location.href=pagina				
														</script>';
															
									}
								}
								break;
								case 2:
								{
									$tipo_doc=$_POST['tipo_doc'];
									
												$propietario1="SELECT * FROM tipo_document WHERE tipo_document.tipo='$tipo_doc'";
												
												$confir1=mysql_query($propietario1,$link);
												if ($ob=mysql_fetch_object($confir1))
												{
												//echo $propietario1;
														header('Location:../tipo_documento/editar_tipodoc.php?selecione='.$selecione.'&&tipo_doc='.$tipo_doc);
												}
												else
												{
													 echo '<script language="javascript">alert("richard");
																	var pagina="../tipo_documento/registrar_tipod.php";
																	location.href=pagina				
																	</script>';
												}
									
											
															
									
								}
								break;
								
							}

?>