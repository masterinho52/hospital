<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Hospital Especial Dr. Alejandro Próspero Reverend</title>
		<?php foreach($css_files as $file): ?>
			<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
		<?php endforeach; ?>
		<?php foreach($js_files as $file): ?>
			<script src="<?php echo $file; ?>"></script>
		<?php endforeach; ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?=base_url()?>css/default.css" rel="stylesheet" type="text/css">
  		<link href="<?=base_url()?>css/admin.css" rel="stylesheet" type="text/css">
  	</head>
  	<body>
		<div id="container">
			
			<header>
				<img border="0" src="<?=base_url()?>img/logo-gob.jpg" />
			</header>
			
			<div id="body">
				<h1 class="centrado">Hospital Especial Dr. Alejandro Próspero Reverend</h1>
				<p>
					<h3 class="centrado">Lista de Pacientes</h3>
					<p>
						<a href="<?=base_url()?>inicio" class="enlace_visitor">Ir al Inicio</a>
					</p>
					<p>
						<?php echo $output; ?>
					</p>
				</p>
			</div>
			<?php include_once("inc/footer.php");?>
		</div>
	</body>
  	<script type="text/javascript" src="<?=base_url()?>js/application.js"></script>
</html>