<?php
session_start(); 
$id_modulo = $_POST['id_modulo'];
$fec_modulo = $_POST['fec_modulo'];
$tipo = $_POST['tipo'];
$titulo = $_POST['titulo'];
$descripcion= $_POST['descripcion'];

$codigo = $_SESSION['codModulo']+1;

$rutaFoto= $_POST['rutaFoto'];
$nombreFoto1= $_POST['nombreFoto1'];
$nombreFoto2= $_POST['nombreFoto2'];
$nombreFoto3= $_POST['nombreFoto3'];
$nombreFoto4= $_POST['nombreFoto4'];
$nombreFoto5= $_POST['nombreFoto5'];

require("conexion.php");

$con=conectar();
$sql = 'INSERT INTO modulo(tip_modulo, tit_modulo, des_modulo, fec_modulo) VALUES (:tipo, :titulo, :descripcion, :fec_modulo)';
$sql=$con->prepare($sql); //preparamos la sentencia SSQL
$sql->execute(array (':tipo'=>$tipo,':titulo'=>$titulo,':descripcion'=>$descripcion,':fec_modulo'=>$fec_modulo));

$sql = 'INSERT INTO imagenes(id_imagen, ubi_imagen, nom_imagen, modulo_id_modulo) VALUES (:codigo, :rutaFoto, :nom_imagen, :codigoMod)';
$sql=$con->prepare($sql); //preparamos la sentencia SSQL
$sql->execute(array (':codigo'=>$codigo,':rutaFoto'=>$rutaFoto,':nom_imagen'=>$codigo.".png",':codigoMod'=>$codigo));

if($nombreFoto1=="1"){
$sql = 'INSERT INTO imagenes(id_imagen, ubi_imagen, nom_imagen, modulo_id_modulo) VALUES (:codigo, :rutaFoto, :nom_imagen, :codigoMod)';
$sql=$con->prepare($sql); //preparamos la sentencia SSQL
$sql->execute(array (':codigo'=>$codigo."_1",':rutaFoto'=>$rutaFoto,':nom_imagen'=>$codigo."_1.png",':codigoMod'=>$codigo));
}
if($nombreFoto2=="1"){
$sql = 'INSERT INTO imagenes(id_imagen, ubi_imagen, nom_imagen, modulo_id_modulo) VALUES (:codigo, :rutaFoto, :nom_imagen, :codigoMod)';
$sql=$con->prepare($sql); //preparamos la sentencia SSQL
$sql->execute(array (':codigo'=>$codigo."_2",':rutaFoto'=>$rutaFoto,':nom_imagen'=>$codigo."_2.png",':codigoMod'=>$codigo));
}
if($nombreFoto3=="1"){
$sql = 'INSERT INTO imagenes(id_imagen, ubi_imagen, nom_imagen, modulo_id_modulo) VALUES (:codigo, :rutaFoto, :nom_imagen, :codigoMod)';
$sql=$con->prepare($sql); //preparamos la sentencia SSQL
$sql->execute(array (':codigo'=>$codigo."_3",':rutaFoto'=>$rutaFoto,':nom_imagen'=>$codigo."_3.png",':codigoMod'=>$codigo));
}
if($nombreFoto4=="1"){
$sql = 'INSERT INTO imagenes(id_imagen, ubi_imagen, nom_imagen, modulo_id_modulo) VALUES (:codigo, :rutaFoto, :nom_imagen, :codigoMod)';
$sql=$con->prepare($sql); //preparamos la sentencia SSQL
$sql->execute(array (':codigo'=>$codigo."_4",':rutaFoto'=>$rutaFoto,':nom_imagen'=>$codigo."_4.png",':codigoMod'=>$codigo));
}
if($nombreFoto5=="1"){
$sql = 'INSERT INTO imagenes(id_imagen, ubi_imagen, nom_imagen, modulo_id_modulo) VALUES (:codigo, :rutaFoto, :nom_imagen, :codigoMod)';
$sql=$con->prepare($sql); //preparamos la sentencia SSQL
$sql->execute(array (':codigo'=>$codigo."_5",':rutaFoto'=>$rutaFoto,':nom_imagen'=>$codigo."_5.png",':codigoMod'=>$codigo));
}

?>