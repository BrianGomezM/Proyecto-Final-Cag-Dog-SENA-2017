<?php			
	include('../conex/conex.php');
	$link= Conectarse();		
	$evalua=$_POST['evalu'];		
	$selecione=$_POST['sel'];
	
	 if($evalu==1)
         {
             switch ($selecione)
		{
			case 1:
			{
				$propi=$_POST['busc'];
				$propietario="SELECT id_propietario FROM propietario WHERE codigo='$propi'";
				$confir=mysql_query($propietario,$link);
				if ($ob=mysql_fetch_object($confir))
				{
								
					$quey10=mysql_query($propietario,$link);
					$row10=mysql_fetch_row($quey10);
					$sql11="SELECT id_mascota FROM mascota  WHERE id_propietario='$row10[0]'";
					$query11=mysql_query($sql11,$link);
					$row11=mysql_fetch_row($query11);	
					if($row11[0]=="")
					{
						 echo '<script language="javascript">alert("El usuario esta registrado pero no tiene ninguna mascota registrada");
						var pagina="../	filtro/filtro_consul_vacu.php";
						location.href=pagina				
						</script>';
					}
					else
					{
						$sql12="SELECT id_vacuna FROM vacunacion  WHERE id_mascota='$row11[0]'";
						$query12=mysql_query($sql12,$link);
						$row12=mysql_fetch_row($query12);	
						if ($row12[0]=="")
						{ 
							echo '<script language="javascript">alert("El usuario no tiene registros de vacunacion");
							var pagina="../	filtro/filtro_consul_vacu.php";
							location.href=pagina				
							</script>';
						}
						else
						{
							header('Location:consultar_vacunacion.php?selecione='.$selecione.'&buscar1='.$propi);
						}		
					}
				}
				else
				{
					 echo '<script language="javascript">alert("El codigo ingresado no se encuentra registrado");
					var pagina="../	filtro/filtro_consul_vacu.php";
					location.href=pagina				
					</script>';
				}
			}
			break;	
			case 2:
			{
				$propi=$_POST['busc'];
				$propietario="SELECT id_propietario FROM propietario WHERE propietario.p_nombre like '%$propi%'";
				$confir=mysql_query($propietario,$link);
				if ($ob=mysql_fetch_object($confir))
				{
					$query5=mysql_query($propietario,$link);
					$row5=mysql_fetch_row($query5);	
					$sql="SELECT id_mascota FROM mascota  WHERE id_propietario='$row5[0]'";
					$query6=mysql_query($sql,$link);
					$row6=mysql_fetch_row($query6);	
									
					if($row6[0]=="")
					{
						echo '<script language="javascript">alert("El usuario esta registrado pero no tiene ninguna mascota registrada");
						var pagina="../	filtro/filtro_consul_vacu.php";
						location.href=pagina				
						</script>';
					}
					else
					{
						$sql8="SELECT id_vacuna FROM vacunacion  WHERE id_mascota='$row6[0]'";
						$query7=mysql_query($sql8,$link);
						$row7=mysql_fetch_row($query7);	
											
						if ($row7[0]=="")
						{ 
							echo '<script language="javascript">alert("El usuario no tiene ninguna vacunacion registrada de su mascota");
							var pagina="../	filtro/filtro_consul_vacu.php";
							location.href=pagina				
							</script>';
						}
						else
						{
							header('Location:consultar_vacunacion.php?selecione='.$selecione.'&buscar1='.$propi); 
						}		
					}
				}
				else
				{
					echo '<script language="javascript">alert("No se encontro ningun registro de vacunacion con el nombre de este usuario");
					var pagina="../	filtro/filtro_consul_vacu.php";
					location.href=pagina				
					</script>';
	                        }
			}
									
			break;
			case 3:
			{
				$propi=$_POST['busc'];
				$propietario="SELECT id_propietario FROM propietario WHERE numero_tipo='$propi'";
				$confir=mysql_query($propietario,$link);
				if ($ob=mysql_fetch_object($confir))
				{
							
					$quey10=mysql_query($propietario,$link);
					$row10=mysql_fetch_row($quey10);
								
					$sql11="SELECT id_mascota FROM mascota  WHERE id_propietario='$row10[0]'";
					$query11=mysql_query($sql11,$link);
					$row11=mysql_fetch_row($query11);	
					if($row11[0]=="")
					{
						 echo '<script language="javascript">alert("El usuario esta registrado pero no tiene ninguna mascota registrada");
						var pagina="../	filtro/filtro_consul_vacu.php";
						location.href=pagina				
						</script>';
					}
					else
					{
						$sql12="SELECT id_vacuna FROM vacunacion  WHERE id_mascota='$row11[0]'";
						$query12=mysql_query($sql12,$link);
						$row12=mysql_fetch_row($query12);	
							
						if ($row12[0]=="")
						{ 
							echo '<script language="javascript">alert("El usuario no tiene ninguna vacunacion registrada");
							var pagina="../	filtro/filtro_consul_vacu.php";
							location.href=pagina				
							</script>';
						}
						else
						{
							header('Location:consultar_vacunacion.php?selecione='.$selecione.'&buscar1='.$propi);
						}		
					}
										 
				}
				else
				{
					 echo '<script language="javascript">alert("El numero de documento ingresado no esta registrado");
					var pagina="../	filtro/filtro_consul_vacu.php";
					location.href=pagina				
					</script>';
				}
			}
			break;
		   }
		}
		
                else
		{
		switch ($selecione)
		{
			case 1:
			{
				$propi=$_POST['busc'];
				$propietario="SELECT id_propietario FROM propietario WHERE codigo='$propi'";
				$confir=mysql_query($propietario,$link);
				if ($ob=mysql_fetch_object($confir))
				{
								
					$quey10=mysql_query($propietario,$link);
					$row10=mysql_fetch_row($quey10);
					$sql11="SELECT id_mascota FROM mascota  WHERE id_propietario='$row10[0]'";
					$query11=mysql_query($sql11,$link);
					$row11=mysql_fetch_row($query11);	
					if($row11[0]=="")
					{
						 echo '<script language="javascript">alert("El usuario esta registrado pero no tiene ninguna mascota registrada");
						var pagina="vacunacion.php";
						location.href=pagina				
						</script>';
					}
					else
					{
						$sql12="SELECT id_vacuna FROM vacunacion  WHERE id_mascota='$row11[0]'";
						$query12=mysql_query($sql12,$link);
						$row12=mysql_fetch_row($query12);	
						if ($row12[0]=="")
						{ 
							echo '<script language="javascript">alert("El usuario no tiene registros de vacunacion");
							var pagina="vacunacion.php";
							location.href=pagina				
							</script>';
						}
						else
						{
							header('Location:consultar_vacunacion.php?selecione='.$selecione.'&buscar1='.$propi);
						}		
					}
				}
				else
				{
					 echo '<script language="javascript">alert("El codigo ingresado no se encuentra registrado");
					var pagina="vacunacion.php";
					location.href=pagina				
					</script>';
				}
			}
			break;
			case 2:
			{
				$propi=$_POST['busc'];
				$propietario="SELECT id_propietario FROM propietario WHERE propietario.p_nombre like '%$propi%'";
				$confir=mysql_query($propietario,$link);
				if ($ob=mysql_fetch_object($confir))
				{
					$query5=mysql_query($propietario,$link);
					$row5=mysql_fetch_row($query5);	
					$sql="SELECT id_mascota FROM mascota  WHERE id_propietario='$row5[0]'";
					$query6=mysql_query($sql,$link);
					$row6=mysql_fetch_row($query6);	
									
					if($row6[0]=="")
					{
						echo '<script language="javascript">alert("El usuario esta registrado pero no tiene ninguna mascota registrada");
						var pagina="vacunacion.php";
						location.href=pagina				
						</script>';
					}
					else
					{
						$sql8="SELECT id_vacuna FROM vacunacion  WHERE id_mascota='$row6[0]'";
						$query7=mysql_query($sql8,$link);
						$row7=mysql_fetch_row($query7);	
											
						if ($row7[0]=="")
						{ 
							echo '<script language="javascript">alert("El usuario no tiene ninguna vacunacion registrada de su mascota");
							var pagina="vacunacion.php";
							location.href=pagina				
							</script>';
						}
						else
						{
							header('Location:consultar_vacunacion.php?selecione='.$selecione.'&buscar1='.$propi); 
						}		
					}
				}
				else
				{
					echo '<script language="javascript">alert("No se encontro ningun registro de vacunacion con el nombre de este usuario");
					var pagina="vacunacion.php";
					location.href=pagina				
					</script>';
				}
			}
			break;
			case 3:
			{
				$propi=$_POST['busc'];
				$propietario="SELECT id_propietario FROM propietario WHERE numero_tipo='$propi'";
				$confir=mysql_query($propietario,$link);
				if ($ob=mysql_fetch_object($confir))
				{
							
					$quey10=mysql_query($propietario,$link);
					$row10=mysql_fetch_row($quey10);
								
					$sql11="SELECT id_mascota FROM mascota  WHERE id_propietario='$row10[0]'";
					$query11=mysql_query($sql11,$link);
					$row11=mysql_fetch_row($query11);	
					if($row11[0]=="")
					{
						 echo '<script language="javascript">alert("El usuario esta registrado pero no tiene ninguna mascota registrada");
						var pagina="vacunacion.php";
						location.href=pagina				
						</script>';
					}
					else
					{
						$sql12="SELECT id_vacuna FROM vacunacion  WHERE id_mascota='$row11[0]'";
						$query12=mysql_query($sql12,$link);
						$row12=mysql_fetch_row($query12);	
							
						if ($row12[0]=="")
						{ 
							echo '<script language="javascript">alert("El usuario no tiene ninguna vacunacion registrada");
							var pagina="vacunacion.php";
							location.href=pagina				
							</script>';
						}
						else
						{
							header('Location:consultar_vacunacion.php?selecione='.$selecione.'&buscar1='.$propi);
						}		
					}
										 
				}
				else
				{
					 echo '<script language="javascript">alert("El numero de documento ingresado no esta registrado");
					var pagina="vacunacion.php";
					location.href=pagina				
					</script>';
				}
			}
			break;
		}
	}
?>