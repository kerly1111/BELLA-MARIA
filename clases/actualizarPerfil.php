<?php
$cedula = $_POST['id_usuario'];
$usuario = $_POST['use_usuario'];
$nombre = $_POST['nom_usuario'];
$apellido= $_POST['ape_usuario'];

require("conexion.php");
$con=conectar();


$sql = 'UPDATE usuario SET use_usuario= :usuario,nom_usuario= :nombre,ape_usuario= :apellido WHERE id_usuario=:cedula';


$sql=$con->prepare($sql); //preparamos la sentencia SSQL
$sql->execute(array (':cedula'=>$cedula, ':usuario'=>$usuario,':nombre'=>$nombre,':apellido'=>$apellido));

?>