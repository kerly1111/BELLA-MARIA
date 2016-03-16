<?php
$id= $_GET['cod'];
if($id=='3'){
	$imag=$_FILES['images']['size'];
	if($imag>2097152 || $imag==0){
		
		echo "0";
	}else{
		echo "1";
	}
}else{
	$id=$id.".png";
	    foreach($_FILES['images']['error'] as $key => $error){
	        if($error == UPLOAD_ERR_OK){
	            $name = $_FILES['images']['name'][$key];
	            $p=$_FILES['images'];
	            move_uploaded_file($_FILES['images']['tmp_name'][$key], '../imagenes/fotosPerfil/' . $id);
	        }
	    }
}
?>
