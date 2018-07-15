<?php
include("../dll/config.php");
include("../dll/mysql.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $site_name; ?></title>
	<link rel="stylesheet" href="<?=$url_site?>css/estilos.css">
	<link rel="stylesheet" href="<?=$url_site?>img/style.css">
</head>
<body>
	<?php
	include ("header_menu.php");
	?>
	<section id="contenedor">
	<h3><span class=""></span>Lista de Estaciones de Servicio</h3>
		<?php
		$query = "select a.id_estacion, a.nombre, a.localizacion, a.nro_bicicletas, a.tipo_servicio from estacion a";
		$result = mysqli_query($link, $query) or die('Consulta fallida: ' . mysqli_error($link));
		echo "<table class='table'>";
		echo "<tr>";
			echo "<td><strong>ID</strong></td>";
			echo "<td><strong>NOMBRE</strong></td>";
			echo "<td><strong>LOCALIZACION</strong></td>";
			echo "<td><strong>NUMERO DE BICICLETAS</strong></td>";
			echo "<td><strong>TIPO DE SERVICIO</strong></td>";
		echo "</tr>";
		while ($line = mysqli_fetch_row($result)){ 
		    echo "<tr>";
		        echo "<td>$line[0]</td>";
		        echo "<td>$line[1]</td>";
		        echo "<td>$line[2]</td>";
		        echo "<td>$line[3]</td>";
		        echo "<td>$line[4]</td>";
		        
		    echo "</tr>";
		}
		echo "</table>";

		?>
	</section>
	<?php
	include ("footer.php");
	?>
</body>
</html>

