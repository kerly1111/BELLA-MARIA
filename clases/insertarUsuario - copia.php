<?php

$codigo = $_POST['codigo'];
$tipo = $_POST['tipo'];
$titulo = $_POST['titulo'];
$descripcion= $_POST['descripcion'];

require("conexion.php");

$con=conectar();
$sql = 'INSERT INTO modulo(id_modulo, tip_modulo, tit_modulo, des_modulo) VALUES (:codigo, :tipo, :titulo, :descripcion)';

$sql=$con->prepare($sql); //preparamos la sentencia SSQL
$sql->execute(array (':codigo'=>$codigo,':tipo'=>$tipo,':titulo'=>$titulo,':descripcion'=>$descripcion));

?>