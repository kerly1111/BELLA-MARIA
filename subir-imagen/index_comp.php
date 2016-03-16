<?php
session_start();
//extraer nombre del archivo[name]
//extraer ubicacion temporal archivo[tmp_name]
//extraer tamaño del archivo[size]

$nameimagen = $_FILES['imagen']['name'];
$tmpimagen = $_FILES['imagen']['tmp_name'];
$siz = $_FILES['imagen']['size'];
$extimagen = pathinfo($nameimagen);
$urlnueva = "imagenes/".$nameimagen;
$ext = array("png","jpg");
print_r($tmpimagen."---");

if(is_uploaded_file($tmpimagen)) {
	echo "oki";
	copy($tmpimagen,$urlnueva);
	echo "se guardo";
	echo $siz;
}

?>