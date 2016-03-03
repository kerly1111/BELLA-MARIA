
<?php
$rutaImgActual = $_POST['rutaImgActual'];
$nombreImg = $_POST['nombreImg'];
$nomUsuario = $_POST['nomUsuario'];
$urlnueva = "../imagenes/fotosPerfil/".$nombreImg;
//if(is_uploaded_file($rutaImgActual)) {

	copy($rutaImgActual, $urlnueva);
//	}
	
?>
