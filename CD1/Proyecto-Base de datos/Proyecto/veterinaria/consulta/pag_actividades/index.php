<?php
$titulo="Registros de Agendas";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Paginar Resultados</title>
<script type="text/javascript" src="ajax.js"></script>
<style>
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
  font-family: ';
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
table th {
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  color: #E6E6E6;
  background-color: #238276;
  position: relative;
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
	
a:link {
    color: blue;
	text-decoration:none;
}

 
a:visited {
    color: blue;
}


a:hover {
    color: red;
}

 
a:active {
    color: blue;
}
a{
    color: blue;
}
</style>
</head>

<body>
<div style="margin:auto;widtd:500px;text-align:center;">
<h1><center><?php echo $titulo;?></h1>
<div id="contenido">
<?php include('paginador.php')?>
</div>
</div>
</table>

</body>
</html>
