<?php
include("../dll/config.php");
include("../dll/mysql.php");
extract($_POST);
$query = "insert into estacion values('','$nombre','$localizacion','$numero','tipo_servicio')";
$result = mysqli_query($link, $query) or die('Consulta fallida: ' . mysqli_error());

echo '<script>alert("datos guardados..")</script>';
echo "<script>location.href='listar.php'</script>";


?>
