<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>..:: Hospital Especial Dr. Alejandro Próspero Reverend ::..</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?=base_url()?>img/logo_bandera.png" rel="shortcut icon" >
		<link href="<?=base_url()?>css/default.css" rel="stylesheet" type="text/css">
  		<link href="<?=base_url()?>css/admin.css" rel="stylesheet" type="text/css">
  		<style>
			#form
			{
				width: 60%;
				margin: 40px auto;
				text-align: center;
			}
			#form label, #form input
			{
				display: block;
				margin: 20px auto;
			}
			#form label
			{
				font-weight: bold;
			}

  		</style>
	</head>
  	<body>
		<div id="container">
			
			<?php include_once("inc/header_admin.php");?>
			
			<div id="body">
				<h1 class="centrado">Hospital Especial Dr. Alejandro Próspero Reverend</h1>
				<p>
					<h3 class="centrado">Reporte de Cierres</h3>
					<p>
						<form action="<?=base_url()?>reportes/cierres_print" method="post" name="form" target="_blank" id="form">
							<label for="desde">Desde</label>
							<input type="text" name="desde" id="desde" placeholder="Desde" value="<?php echo date("d/m/Y"); ?>" readonly>
							<label for="hasta">Hasta</label>
							<input type="text" name="hasta" id="hasta" placeholder="Hasta" value="<?php echo date("d/m/Y"); ?>" readonly>
							<button>Mostrar</button>
						</form>
					</p>
				</p>
			</div>
			<?php include_once("inc/footer.php");?>
		</div>
	</body>
  	<script type="text/javascript" src="<?=base_url()?>js/jquery-1.7.2.min.js"></script>
  	<script type="text/javascript" src="<?=base_url()?>js/application.js"></script>
  	<script type="text/javascript" src="<?=base_url()?>js/gen_validatorv4.js"></script>
  	<script src="<?=base_url()?>js/jquery-ui-1.10.1.custom.min.js"></script>
  	<link href="<?=base_url()?>css/smoothness/jquery-ui-1.10.1.custom.css" rel="stylesheet">

  	<script>
	$(function() {
		
		$( "#desde" ).datepicker({
			dateFormat: "dd/mm/yy"
			// inline: true
		});
		$( "#hasta" ).datepicker({
			dateFormat: "dd/mm/yy"
			// inline: true
		});
		
	});
	</script>
	<!--
  	<script type="text/javascript">
		// var frmvalidator = new Validator("form");
		// frmvalidator.EnableMsgsTogether();
		// frmvalidator.addValidation("id_cierre","req","El campo del Cierre esta vacio, ¡Debe seleccionar los Datos!");
    </script>
-->
</html>