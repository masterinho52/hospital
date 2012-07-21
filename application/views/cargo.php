<!DOCTYPE html>
<html lang="es">
  	<head>
	    <meta charset="utf-8">
	    <title>Hospital de Ancianos</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link href="<?=base_url()?>css/default.css" rel="stylesheet" type="text/css">
		<?php foreach($css_files as $file): ?>
			<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
		<?php endforeach; ?>
		<?php foreach($js_files as $file): ?>
			<script src="<?php echo $file; ?>"></script>
		<?php endforeach; ?>
	</head>
	<body>
		<div id="container">
		<header>
			<img src="<?=base_url()?>img/logo-gob.jpg" alt="">
		</header>

		<div id="body">
			<h1 class="centrado">Hospital Especial Dr. Alejandro Próspero Reverend</h1>
			<p>
				<h3 class="centrado">Registro de Cargos</h3>
			</p>
			<p>
				<?php echo $output; ?>
			</p>
		</div>
		<p class="footer">Diseñado y Desarrollado por: <strong>Marcos Orozco</strong></p>
	</body>
</html>
