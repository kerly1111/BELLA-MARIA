<?php
$id= $_GET['cod'];

    foreach($_FILES['images']['error'] as $key => $error){
        if($error == UPLOAD_ERR_OK){
            $name = $_FILES['images']['name'][$key];
            $p=$_FILES['images'];
            move_uploaded_file($_FILES['images']['tmp_name'][$key], '../imagenes/fotosPerfil/' . $name);
        }
    }
echo $id;
?>
