<?php
$cedula = $_POST['cedula'];
$clave = $_POST['clave'];
$nueva = $_POST['nueva'];
$confirmar = $_POST['confirmar'];

require("conexion.php");
$con=conectar();



$sql = 'UPDATE usuario SET cla_usuario= :nueva WHERE id_usuario=:cedula';


$sql=$con->prepare($sql); //preparamos la sentencia SSQL
$sql->execute(array (':nueva'=>$nueva,':cedula'=>$cedula));

?>