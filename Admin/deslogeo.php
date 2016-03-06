<?php
session_start();
unset($_SESSION["logeo"]);
session_destroy();
echo '<meta http-equiv="refresh" content="1; url=../index.php">';
?>