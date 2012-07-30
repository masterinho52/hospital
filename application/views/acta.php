<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>..:: Hospital Especial Dr. Alejandro Próspero Reverend ::..</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?=base_url()?>img/logo_bandera.png" rel="shortcut icon" >
		<link href="<?=base_url()?>css/default.css" rel="stylesheet" type="text/css">
  		<link href="<?=base_url()?>css/admin.css" rel="stylesheet" type="text/css">
	</head>
  	<body>
		<div id="container">
			
			<?php include_once("inc/header_admin.php");?>
			
			<div id="body">
				<h1 class="centrado">Hospital Especial Dr. Alejandro Próspero Reverend</h1>
				<p>
					<h3 class="centrado">ACTA CONVENIO</h3>
					<form action="<?=base_url()?>impresiones/acta_print" id="formulario" method="get" name="formulario" target="_blank">
					<table align="center" border="1" cellpadding="0" cellspacing="3" class="texto" width="100%">
						<tr height="10"><td colspan="3"></td></tr>

						<tr>
							<td></td>
							<td>Representante:</td>
							<td></td>
						</tr>

						<tr height="10"><td colspan="3"></td></tr>
					</table>
					<input type="submit" value="Imprimir">
					</form>
				</p>
			</div>
			<?php include_once("inc/footer.php");?>
		</div>
	</body>
  	<script type="text/javascript" src="<?=base_url()?>js/application.js"></script>
</html>