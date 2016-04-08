<?php
$mensaje = $_POST['mensaje'];
$frase = $_POST['frase'];
$nombrePresidente = $_POST['nombrePresidente'];
$cargo = $_POST['cargo'];
$nombreFoto = $_POST['nombreFoto'];
$rutaFoto = $_POST['rutaFoto'];

require("conexion.php");
$con=conectar();



$sql = 'UPDATE mensaje_presidente SET nom_img_mensaje_presidente= :nombreFoto, rut_img_mensaje_presidente= :rutaFoto, men_mensaje_presidente= :mensaje,  fra_mensaje_presidente= :frase, nom_pre_mensaje_presidente= :nombrePresidente, pue_mensaje_presidente= :cargo  WHERE id_mensaje_presidente="1"';


$sql=$con->prepare($sql); //preparamos la sentencia SSQL
$sql->execute(array (':nombreFoto'=>$nombreFoto,':rutaFoto'=>$rutaFoto,':mensaje'=>$mensaje,':frase'=>$frase,':nombrePresidente'=>$nombrePresidente,':cargo'=>$cargo));

?>