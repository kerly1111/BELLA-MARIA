<?php

$nombre = $_POST['nombre'];
$ocupacion = $_POST['ocupacion'];
$telefono = $_POST['telefono'];
$sitioweb= $_POST['sitioweb'];

require("conexion.php");

$con=conectar();
$sql = 'INSERT INTO persona(NOMBRE, OCUPACION, TELEFONO, SITIOWEB) VALUES (:nombre, :ocupacion, :telefono, :sitioweb)';

$sql=$con->prepare($sql); //preparamos la sentencia SSQL
$sql->execute(array (':nombre'=>$nombre,':ocupacion'=>$ocupacion,':telefono'=>$telefono,':sitioweb'=>$sitioweb));

?>