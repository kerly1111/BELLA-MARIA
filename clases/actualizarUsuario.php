<?php
$nombre = $_POST['nombre'];
$ocupacion = $_POST['ocupacion'];
$telefono = $_POST['telefono'];
$sitioweb= $_POST['sitioweb'];
$idP = $_POST['idP'];

require("conexion.php");
$con=conectar();


$sql = 'UPDATE persona SET NOMBRE= :nombre,OCUPACION= :ocupacion,TELEFONO= :telefono,SITIOWEB= :sitioweb WHERE ID=:idPersona';


$sql=$con->prepare($sql); //preparamos la sentencia SSQL
$sql->execute(array (':nombre'=>$nombre,':ocupacion'=>$ocupacion,':telefono'=>$telefono,':sitioweb'=>$sitioweb,':idPersona'=>$idP));

?>