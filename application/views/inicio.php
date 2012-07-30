<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>..:: Hospital Especial Dr. Alejandro Próspero Reverend ::..</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?=base_url()?>img/logo_bandera.png" rel="shortcut icon">
		<link href="<?=base_url()?>css/default.css" rel="stylesheet" type="text/css">
  		<link href="<?=base_url()?>css/admin.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="container">
			<header>
				<img border="0" src="<?=base_url()?>img/etiqueta_mpps.jpg" id="membrete" />
			</header>

			<div id="body">
				<h1 class="centrado">Hospital Especial Dr. Alejandro Próspero Reverend</h1>
				<p>
					<h3 class="centrado">Departamento de Trabajo Social</h3>
					<form action="<?=base_url()?>login" method="post" accept-charset="utf-8" class="entrar">
						<h4 align="center">Bienvenidos al Sistema</h4>
						<label for="login">Usuario: </label>
						<input type="text" name="login" id="login" placeholder="Nombre de Usuario">
						<label for="password">Contraseña: </label>
						<input type="password" name="password" id="password" placeholder="Contraseña del Usuario">	
						<input type="submit" value="Ingresar">
				        <a href="<?=base_url()?>visitantes" class="enlace_visitor">
					        <div align="right" style="margin-top:-10px; margin-right:3px;">
								<img border="0" wight="48" height="48" src="<?=base_url()?>img/visitante.png" />
							<div>
					        <div align="right" style="margin-top:-8px;">
								Visitante
							</div>
						</a>
						<?php include_once("inc/footer.php");?>
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
			</div>
		</div>
	</body>
</html>