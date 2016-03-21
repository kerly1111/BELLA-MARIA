<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];


require("conexion.php");

$con=conectar();

$sql = ' INSERT INTO contactos(nom_contacto, ape_contacto, ema_contacto, men_contacto) VALUES (:nombre, :apellido, :email, :mensaje)';


$sql=$con->prepare($sql); //preparamos la sentencia SSQL
$sql->execute(array (':nombre'=>$nombre,':apellido'=>$apellido,':email'=>$email,':mensaje'=>$mensaje));

?>
