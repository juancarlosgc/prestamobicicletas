<?php
include ("dll/config.php");
include ("dll/mysql.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $site_name; ?></title>
	<link rel="stylesheet" href="<?=$url_site?>css/estilos.css">
</head>
<body>
	<?php
	include ("includes/header_menu.php");
	?>
	<section id="contenedor">
			<h3>Formulario de Estaciones de Servicio</h3>
			<form action="includes/guardar_datos.php" method="post" accept-charset="utf-8">
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Estacion" required>
				</div>
				<div class="form-group">
					<label for="localizacion">Localización</label>
					<input type="text" class="form-control" id="localizacion" name="localizacion" placeholder="Localización" required>
				</div>
				<div class="form-group">
					<label for="numero">Número de Bicicletas</label>
					<input type="text" class="form-control" id="numero" name="numero" placeholder="Numero" required>
				</div>
				<div class="form-group">
					<label for="servicio">Tipo de Servicio</label>
						<select name="servicio" id="servicio" required>
						  <option value=""></option>
						  <option value="Prestamos">Prestamos</option>
						  <option value="Tour">Tour</option>
						</select> 
				</div>
								
				<button type="submit" class="btn btn-default">Guardar</button>
			</form>
	</section>
	<?php
	include ("includes/footer.php");
	?>
</body>
</html>