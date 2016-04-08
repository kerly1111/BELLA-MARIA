<?php
$id= $_GET['cod'];
if($id=="contolSize"){
	$imag=$_FILES['image']['size'];
		if($imag>2097152 || $imag==0){
			echo "0";
		}else{
			echo "1";
		}
}else{
    $id=$id.".png";
    move_uploaded_file($_FILES['image']['tmp_name'], '../imagenes/fotosPerfil/' . $id);
}
?>
