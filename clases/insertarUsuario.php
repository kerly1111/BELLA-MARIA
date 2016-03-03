<?php

$id_usuario = $_POST['id_usuario'];
$use_usuario = $_POST['use_usuario'];
$cla_usuario = $_POST['cla_usuario'];
$nom_usuario = $_POST['nom_usuario'];
$ape_usuario = $_POST['ape_usuario'];
$nom_fot_usuario = $_POST['nom_fot_usuario'];
$rut_fot_usuario= $_POST['rut_fot_usuario'];

require("conexion.php");

$con=conectar();
$sql = 'INSERT INTO usuario (id_usuario, use_usuario, cla_usuario, nom_usuario, ape_usuario, nom_fot_usuario, rut_fot_usuario) VALUES (:id_usuario, :use_usuario, :cla_usuario, :nom_usuario, :ape_usuario, :nom_fot_usuario, :rut_fot_usuario)';

$sql=$con->prepare($sql); //preparamos la sentencia SSQL
$sql->execute(array (':id_usuario'=>$id_usuario,':use_usuario'=>$use_usuario,':cla_usuario'=>$cla_usuario,':nom_usuario'=>$nom_usuario,':ape_usuario'=>$ape_usuario,':nom_fot_usuario'=>$nom_fot_usuario,':rut_fot_usuario'=>$rut_fot_usuario));

?>
