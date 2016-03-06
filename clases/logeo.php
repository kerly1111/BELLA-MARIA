<?php
session_start();
$use_usuario = $_POST['loginname'];
$cla_usuario = $_POST['password'];
$control="1";
    require("conexion.php");
    $con = conectar();
    $sql = "SELECT * FROM usuario where use_usuario='$use_usuario'";
    $stmt = $con->prepare($sql);
    $result = $stmt->execute();
    $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
    foreach($rows as $row){
    	$control="0";
    	$usu=($row->use_usuario);
    	$pas=($row->cla_usuario);
    	$id=($row->id_usuario);
    	if($cla_usuario==$pas){
        $_SESSION["logeo"]=$id;
        echo '<meta http-equiv="refresh" content="1; url=../Admin/index.php">';
    	}else{
    	echo '<meta http-equiv="refresh" content="1; url=../index.php">';
    	}
    }
    if($control=="1"){
    	echo '<meta http-equiv="refresh" content="1; url=../contactos.php">';
    }
            
?>
