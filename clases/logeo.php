<?php
session_start();
$_SESSION["logeo"]="";
$_SESSION["loginname"]="";
$_SESSION["claAdmin"]="12345";
$use_usuario = $_POST['loginname'];
$cla_usuario = $_POST['password'];
$control="1";
    if($use_usuario=="ADMINISTRADOR"){
        $control="0";
    if($cla_usuario==$_SESSION["claAdmin"]){
        $_SESSION["logeo"]="ADMINISTRADOR";
        $_SESSION["loginname"]="ADMINISTRADOR";
        echo '<meta http-equiv="refresh" content="1; url=../Admin/index.php">';
    }else{
        $_SESSION["logeo"]="Contraseña incorrecta";
        echo '<meta http-equiv="refresh" content="1; url=../login.php">'; 
    }
    }
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
        $_SESSION["loginname"]=$usu;
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
