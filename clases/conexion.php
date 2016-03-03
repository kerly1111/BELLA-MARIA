<?php
function conectar()
{
$conn=null;
$host= '127.0.0.1';// tambien puede ir localhost
$base_datos='bella-maria';
$user='root';
$pwd='';

try{

$conn= new PDO('mysql:host='.$host.';dbname='.$base_datos,$user,$pwd);

}catch(PDOException $e){
	echo "ERROR".$e->getMessage();
}

return $conn; //aqui la funcion retorna PDO.

}

?>