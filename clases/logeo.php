<?php
session_start();
$_SESSION["logeo"]="";
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
    	$_SESSION["logeo"]="Contraseña incorrecta";
    	echo '<meta http-equiv="refresh" content="1; url=../login.php">';
    	}
    }
    if($control=="1"){
    	$_SESSION["logeo"]="EL usuario no existe";
    	echo '<meta http-equiv="refresh" content="1; url=../login.php">';
    }
            
?>
