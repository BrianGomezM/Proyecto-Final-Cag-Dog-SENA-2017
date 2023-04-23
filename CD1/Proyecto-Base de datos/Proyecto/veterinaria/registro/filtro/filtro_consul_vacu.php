<?php
$evalu="1";
?>
<!DOCTYPE html>
<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="tablas.css" media="screen" />
		<style>
		 table {
		background-color: #E6E6E6;
		padding: 1em;
		}
		table, table * {
		  border-color: #238276 !important;
		}
		table th {
		  text-transform:uppercase;
		  font-weight: 300;
		  
		  text-align: center;
		  color: #E6E6E6;
		  background-color: #238276;
		  position:relative;
		}
		table td {text-align: center;
		 
		}
		table th:after {
		  content: "";
		  display: block;
		  height: 5px;
		  right: 0;
		  left: 0;
		  bottom: 0;
		  background-color: #16a085;
		  position: absolute;
		}
                .submit  {
                        text-decoration:none;
                        width:100px;
                        margin: 10px 0px;
                        text-align:center;
                        display:block;
                        background-color:#fff;
                        color:#238276;
                        border:1px solid #Fc7323;
                        font-size:12px;
                        cursor:pointer;
                        border-radius:10px;
                        padding: 6px;
                        box-sizing: border-box;
                        transition: all 500ms ease;
                        }
	</style>
	</head>
		<body >
			<center>
					<form action="../DdualV/evaluar_docu_vacuna.php" id="form1" method="POST" name="form">
						<table border="1">
							<tr>
								<th>
									Consultar Vacunaci&oacute;n<br>
									<input type="hidden" name="evalu" id="evalu" value="<?php if (isset($evalu)){echo $evalu;} ?>"/>
								</th>
							</tr>
							<tr>
								<td>
									<select required name="sel" id ="sel" >
									  <option selected="selected" value="1">Codigo</option>
									  <option value="2">Primer Nombre </option>
                                                                          <option value="3">Numero De Documento</option>
								</select>
								
								<input type="text" name="busc" required />
								
								</td>
							</tr>	
								
						</table>
						<input type="submit" name="buscar" value="Buscar"  class="submit"/>
                                       </form>
					
			</center>
		</body>
</html>