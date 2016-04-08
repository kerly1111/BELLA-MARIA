<?php
session_start(); 
 $_SESSION['codModulo']=$_POST['valorCod'];
 echo ($_SESSION['codModulo']);
?>