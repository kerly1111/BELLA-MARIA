<?php

$id_modulo = $_POST['id_modulo'];
$estado='0';

require("conexion.php");

$con=conectar();
$sql = 'UPDATE modulo SET est_modulo=:est_modulo WHERE id_modulo=:id_modulo';
$q = $con->prepare($sql);
$q->execute(array(':id_modulo'=>$id_modulo, ':est_modulo'=>$estado));

$sql1 = 'DELETE FROM imagenes WHERE modulo_id_modulo=:id_modulo';
$sql1 = $con->prepare($sql1);
$sql1->execute(array(':id_modulo'=>$id_modulo));

unlink("../imagenes/modulos/".$id_modulo.".png");
unlink("../imagenes/modulos/".$id_modulo."1_.png");
unlink("../imagenes/modulos/".$id_modulo."2_.png");
unlink("../imagenes/modulos/".$id_modulo."3_.png");
unlink("../imagenes/modulos/".$id_modulo."4_.png");
unlink("../imagenes/modulos/".$id_modulo."5_.png");
?>
