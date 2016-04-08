<?php
$id_usuario = $_POST['cedula'];
$nombreFoto1 = $_POST['nombreFoto'];

require("conexion.php");
$con=conectar();

if($nombreFoto1=="1"){
$sql = 'UPDATE usuario SET  nom_fot_usuario=:nom_fot_usuario WHERE id_usuario=:id_usuario';
$sql=$con->prepare($sql); //preparamos la sentencia SSQL
$sql->execute(array (':nom_fot_usuario'=>$id_usuario.".png",':id_usuario'=>$id_usuario));
}

if($nombreFoto1=="0"){
$sql = 'UPDATE usuario SET  nom_fot_usuario=:nom_fot_usuario WHERE id_usuario=:id_usuario';
$sql=$con->prepare($sql); //preparamos la sentencia SSQL
$sql->execute(array (':nom_fot_usuario'=>"perfilDefault.png",':id_usuario'=>$id_usuario));
}

?>