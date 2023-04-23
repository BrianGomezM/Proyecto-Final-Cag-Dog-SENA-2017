<?php
$brian="1";
?>
<!DOCTYPE html>
<html>
	<head>
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

	</style>
	</head>
		<body >
			<center>
					<form action="../consultas_bd/evaluar_documento.php" id="form1" method="POST" name="form">
						<table border="1">
							<tr>
								<th>
									Consultar Historia Clinica<br>
									<input type="hidden" name="brian" id="brian" value="<?php if (isset($brian)){echo $brian;} ?>"/>
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
						<input type="submit" name="buscar" value="Buscar"  id="submit"/>
					</form>
					
			</center>
		</body>
</html>