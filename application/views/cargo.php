<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Hospital de Ancianos</title>
		<?php foreach($css_files as $file): ?>
			<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
		<?php endforeach; ?>
		<?php foreach($js_files as $file): ?>
			<script src="<?php echo $file; ?>"></script>
		<?php endforeach; ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?=base_url()?>css/default.css" rel="stylesheet" type="text/css">
  		<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/admin.css">
	<body>
		<div id="container">
			
			<?php include_once("header_admin.php");?>

			<div id="body">
				<h1 class="centrado">Hospital Especial Dr. Alejandro Próspero Reverend</h1>
				<p>
					<h3 class="centrado">Registro de Cargos</h3>
					<div height="20"></div>
					<?php echo $output; ?>
				</p>
			</div>
			<?php include_once("footer.php");?>
		</div>
	</body>
  	<script type="text/javascript" src="<?=base_url()?>js/jquery-1.7.2.min.js"></script>
  	<script type="text/javascript" src="<?=base_url()?>js/application.js"></script>
</html>