<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Hospital Especial Dr. Alejandro Próspero Reverend</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?=base_url()?>css/default.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="container">
			<?php include_once("inc/header_admin.php");?>

			<div id="body">
				<h1 class="centrado">Hospital Especial Dr. Alejandro Próspero Reverend</h1>
				<p>
					<h3 class="centrado">Departamento de Trabajo Social</h3>
					<form action="<?=base_url()?>login" method="post" accept-charset="utf-8" class="entrar">
						<h4>Usuarios Registrados</h4>
						<label for="login">Usuario: </label>
						<input type="text" name="login" id="login" placeholder="Nombre de Usuario">
						<label for="password">Clave: </label>
						<input type="password" name="password" id="password" placeholder="Clave del Usuario">	
						<input type="submit" value="Ingresar">
						<?php 
				          	if (validation_errors()) {
								echo "<div class='error'>";
				          		echo validation_errors();
				          		echo "</div>";
				          	} 
				          	if ($this->session->flashdata("loged_in_fail")) {
								echo "<div class='error'>";
				          		echo "<p>ERROR:<br>Usted a proporcionado datos inválidos<br>Intente nuevamente</p>";
				          		echo "</div>";
				          	} 
				        ?>
					</form>
				</p>
				<p>
					<a href="<?=base_url()?>view/visitor.php" class="enlace_visitor" target="_blank">Visitor</a>
				</p>
			</div>
			<?php include_once("inc/footer.php");?>
		</div>
	</body>
</html>