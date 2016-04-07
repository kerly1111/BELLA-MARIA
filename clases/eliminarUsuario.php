<?php
$id_usuario = $_POST['id_usuario'];

require("conexion.php");

$con=conectar();
$sql = 'DELETE FROM usuario WHERE id_usuario=:id_usuario';

$sql = $con->prepare($sql);

$sql->execute(array(':id_usuario'=>$id_usuario));


?>