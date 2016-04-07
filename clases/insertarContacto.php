<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$fecha = $_POST['fecha'];


require("conexion.php");

$con=conectar();

$sql = ' INSERT INTO contactos(nom_contacto, ape_contacto, ema_contacto, men_contacto, fec_contacto) VALUES (:nombre, :apellido, :email, :mensaje, :fec_contacto)';


$sql=$con->prepare($sql); //preparamos la sentencia SSQL
$sql->execute(array (':nombre'=>$nombre,':apellido'=>$apellido,':email'=>$email,':mensaje'=>$mensaje,':fec_contacto'=>$fecha));

?>
