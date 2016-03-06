<?php
$cedula = $_POST['cedula'];
$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$apellido= $_POST['apellido'];

require("conexion.php");
$con=conectar();


$sql = 'UPDATE usuario SET usu_usuario= :usuario,nom_usuario= :nombre,ape_usuario= :apellido WHERE id_usuario=:cedula';


$sql=$con->prepare($sql); //preparamos la sentencia SSQL
$sql->execute(array (':cedula'=>$cedula, ':usuario'=>$usuario,':nombre'=>$nombre,':apellido'=>$apellido));

?>