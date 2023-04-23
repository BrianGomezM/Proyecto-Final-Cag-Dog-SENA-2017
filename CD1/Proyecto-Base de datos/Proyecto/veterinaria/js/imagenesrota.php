<html>
<head>
<script language="Javascript" type="text/javascript">
//archivo para cargar imagenes en index
mis_imagenes = new Array("img/img1.jpg","img/img2.jpg","img/img3.jpg","img/img4.jpg","img/img5.jpg","img/img6.jpg","img/img7.jpg")
mi_imagen = 0
imgCt = mis_imagenes.length
function rotacion() {
if (document.images) {
mi_imagen++
if (mi_imagen == imgCt) {
mi_imagen = 0
}
document.anuncio.src=mis_imagenes[mi_imagen]
setTimeout("rotacion()", 5 * 1000)
}
}
</script>
</head>
<body onload="rotacion()">
<table width="685" height="360" border="5" cellpadding="0" cellspacing="1" bordercolor="#238276" 
style="border-collapse:separate;">
<tr>
<td>
<img  name="anuncio" alt="Anuncios"  />
</td>
</tr>
</table>
</body>

</html>