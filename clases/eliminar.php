<?php
$idP = $_POST['idP'];

require("conexion.php");

$con=conectar();
$sql = 'DELETE FROM persona WHERE ID=:idpr';

$sql = $con->prepare($sql);

$sql->execute(array(':idpr'=>$idP));


?>