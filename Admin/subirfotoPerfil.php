
<?php

$rutaImgActual = $_POST['rutaImgActual'];
$nombreImg = $_POST['nombreImg'];
$urlnueva = "../imagenes/fotosPerfil/".$nombreImg;
//if(is_uploaded_file($rutaImgActual)) {
	//copy("D:\Descargas\bg1.png","../imagenes/fotosPerfil/kerly.png");
	copy($rutaImgActual, $urlnueva);
//	}
	
?>
