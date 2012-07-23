<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Hospital de Ancianos</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?=base_url()?>css/default.css" rel="stylesheet" type="text/css">
  		<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/admin.css">
	<body>
		<div id="container">
			
			<?php include_once("inc/header_admin.php");?>
			
			<div id="body">
				<h1 class="centrado">Hospital Especial Dr. Alejandro Próspero Reverend</h1>
				<h3 class="centrado">Departamento de Trabajo Social</h3>
				<p class="centrado">
					Bienvenidos, <strong>Área Administrativa</strong>
				</p>
				<p class="centrado">
					Seleccione una opción del Menú
				</p>
			</div>
			<div id="box">
				<img src="<?=base_url()?>img/medicos.jpg" alt="">
			</div>
			<?php include_once("inc/footer.php");?>
		</div>
	</body>
  	<script type="text/javascript" src="<?=base_url()?>js/application.js"></script>
</html>



