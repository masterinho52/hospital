<!DOCTYPE html>
<html lang="es">
  	<head>
	    <meta charset="utf-8">
	    <title>Hospital de Ancianos</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php foreach($css_files as $file): ?>
			<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
		<?php endforeach; ?>
		<?php foreach($js_files as $file): ?>
			<script src="<?php echo $file; ?>"></script>
		<?php endforeach; ?>
		<!-- 
		<link href="<?=base_url();?>images/hospital.ico" rel="shortcut icon" />
	    <link href="<?=base_url();?>css/estilo.css" rel="stylesheet" type="text/css" />
	 	-->
	</head>
	<body>
		<div style='height:20px;'></div>  
	    <div>
			<?php echo $output; ?>
	    </div>
	</body>
</html>
