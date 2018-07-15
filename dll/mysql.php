<?php
//include("config.php");
$link = mysqli_connect($db_host,$db_usr,$db_pass)
    or die('No se pudo conectar: ' . mysqli_error());
//echo 'Connected successfully';
mysqli_select_db($link, $db_name) or die('No se pudo seleccionar la base de datos');
?>