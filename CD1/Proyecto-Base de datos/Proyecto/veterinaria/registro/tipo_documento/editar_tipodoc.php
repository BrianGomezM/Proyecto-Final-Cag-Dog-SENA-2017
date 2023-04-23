<?php
		include('../conex/conex.php');
		$link=Conectarse();
		$user=$_GET['user'];
		$editar=$_GET['id_editar'];
		$sql="SELECT * from tipo_document WHERE id_tipo_docu ='$editar'";
		$result=mysql_query($sql,$link);
		$row=mysql_fetch_array($result);
	?>
<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
<style>
.letras{
    font-family: "Arial";
    font-size: 20;
	
}
.jv{

  color: #E6E6E6;
  background-color: #238276;

}
table {     font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 12px;    margin: 45px; align="center"     width: 480px; text-align: left;    border-collapse: collapse; }

th {     font-size: 13px;     font-weight: normal;     padding: 8px;     background: #b9c9fe;
    border-top: 4px solid #aabcfe;    border-bottom: 1px solid #fff; color: #039; }

td {    padding: 8px;     background: #e8edff;     border-bottom: 1px solid #fff;
    color: #669;    border-top: 1px solid transparent; }

tr:hover td { background: #d0dafd; color: #339; }
div.centraTabla{
text-align: center;
}

div.centraTabla table {
margin: 0 auto;
text-align: left;
}




@import url(http://fonts.googleapis.com/css?family=Covered+By+Your+Grace);
*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

html, body {
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
}

body {
  padding: 5em 1em;
  
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}

h1 {
  text-align: center;
  font-size: 275%;
  font-family: ;
  font-weight: 300;
  margin-top: -1em;
  text-shadow: 0 2px 1px white;
}

#box {
  margin: auto;
  width: 50em;
  height: 100%;
  white-space: nowrap;
}
@media all and (max-width: 52em) {
  #box {
    width: 100%;
  }
}

#center {
  vertical-align: middle;
  display: inline-block;
  white-space: normal;
}

#box:after {
  content: "";
 
  vertical-align: middle;
  display: inline-block;
  margin-right: -10px;
}

table {
  background-color: #E6E6E6;
  padding: 1em;
}
table, table * {
  border-color: #238276 !important;
}
th{
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  color: #E6E6E6;
  background-color: #238276;
  position: relative;
  font-size:12;
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

#credits {
  text-align: right;
  color: white;
}
#credits a {
  color: #16a085;
  text-decoration: none;
}
#credits a:hover {
  text-decoration: underline;
}
 tr:nth-child(even) {
        background-color: lightgray;
    }
 
   
    tr:nth-child(odd) {
        background-color: white;
	}
	div.centraTabla table {
margin: 0 auto;
text-align: left;
}

</style>
	<script>
				function confirmar()
					{
						var confirmacion= confirm("¿seguro desea eliminar Item?");
						if(confirmacion==true)
						{return true;}
						else
						{return false;}
					}
			</script>
			</head>
			<body>
<form name="form1" method="post" action="control_tipod2.php">
<div class='centraTabla'>
<table width="20%" border="0" align="center" cellpadding="5" cellspacing="0" >
       <tr><td colspan="4" class="jv"><div align="center" style="font-weight: bold"><center>actualizar registro</center></div></td></tr>
       <tr><td>tipo documento:</td><td><input type="text" name="tipod" id="tipod" value="<?php echo $row[1]; ?>"></td></tr>
      	<input name="user" type="hidden" value="<?php echo $user; ?>"/>
								<input name="editar" type="hidden" value="<?php echo $editar; ?>"/>
      <tr><td colspan="2" align="center"><input type="submit" name="button" class="submit" id="button" value="actualizar">
      
      </td></tr>
      	   </form>
                   </table><br><br><br>
				    <table  width="20%" border="1" align="center" cellpadding="5" cellspacing="0" >
				<tr>
					<th>#</th><th>tipo documento</th><th colspan="2">opciones</th>
				</tr> 
				<?php
				if(isset($_GET['selecione']))
						{
							$selecione=$_GET['selecione']; 
							switch ($selecione)
							{
								case 1:
								{
									if(isset($_GET['tipo_doc']))
									{
										
									$tipo_doc=$_GET['tipo_doc'];
									
					
						
										 $sql3="SELECT tipo_document.tipo,tipo_document.id_tipo_docu FROM tipo_document WHERE tipo_document.tipo like '%$tipo_doc%' ";
					 
						$result3=mysql_query($sql3,$link);$a=1;
						while($row3=mysql_fetch_array($result3))
							{											   
								echo 
								'<tr>
								<td>'.$a.'</td>					
								<td>'.$row3[0].'</td>
								<td><a href="../tipo_documento/borrar_tipod.php?user='.$user.'&&id_borrar='.$row3[1].'"><img src="../imagen/del.gif" onclick="return confirmar();"></a></td>
								<td><a href="../tipo_documento/editar_tipodoc.php?tipo_doc='.$tipo_doc.'&&selecione='.$selecione.'&&id_editar='.$row3[1].'"><img src="../imagen/edit.png"></a></td>	
														
															
								</tr>';$a++;										   
							}

									}
								}
								break;	
								case 2:
									{	
										if(isset($_GET['mas']))
	{
		$id=$_GET['mas'];
		$slq2="SELECT ¨* FROM tipo_document WHERE 1";
		$result3=mysql_query($sql3,$link);$a=1;
						while($row3=mysql_fetch_array($result3))
							{											   
								echo 
								'<tr>
								<td>'.$a.'</td>					
								<td>'.$row3[1].'</td>
								<td><a href="../tipo_documento/borrar_tipod.php?user='.$user.'&&id_borrar='.$row3[1].'"><img src="../imagen/del.gif" onclick="return confirmar();"></a></td>
								<td><a href="../tipo_documento/editar_tipodoc.php?user='.$user.'&&tipodoc='.$tipodoc.'&&id_editar='.$row3[1].'"><img src="../imagen/edit.png"></a></td>	
														
															
								</tr>';$a++;										   
							}
	}
					
						
			 		  										
					 
						

									}
									break;								
							}
						}
						
					?>
					
				<?php
			 $tipo_doc=$_GET['tipo_doc'];
			 		  $sql3="SELECT tipo_document.tipo,tipo_document.id_tipo_docu FROM tipo_document WHERE tipo_document.tipo='$tipo_doc'";
					 
						$result3=mysql_query($sql3,$link);$a=1;
						while($row3=mysql_fetch_array($result3))
							{											   
								echo 
								'<tr>
								<td>'.$a.'</td>					
								<td>'.$row3[0].'</td>
								<td><a href="../tipo_documento/borrar_tipod.php?user='.$user.'&&id_borrar='.$row3[1].'"><img src="../imagen/del.gif" onclick="return confirmar();"></a></td>
								<td><a href="../tipo_documento/editar_tipodoc.php?user='.$user.'&&tipodoc='.$tipodoc.'&&id_editar='.$row3[1].'"><img src="../imagen/edit.png"></a></td>	
														
															
								</tr>';$a++;										   
							}
						?>
						
				
			</table>
			</div>
			
				   </body>
				   </html>
