<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>..:: Hospital Especial Dr. Alejandro Próspero Reverend ::..</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?=base_url()?>img/logo_bandera.png" rel="shortcut icon" >
		<link href="<?=base_url()?>css/default.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="<?=base_url()?>js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$("#impri").click(function imprimir(){
					$("#noprint").hide();
					window.print();
					$("3noprint").show();
				});
			});
    	</script>
	</head>
  	<body>
		<table align="center" border="0" cellpadding="0" cellspacing="0" class="informe" width="955">
			<tr>
				<td colspan="3">
					<img border="0" src="<?=base_url()?>img/etiqueta_mpps.jpg" id="membrete" />
				</td>
			</tr>

			<tr>
				<td align="center" width="150"><img border="0" src="<?=base_url()?>img/logo_mpps.jpg" height="130" width="130" /></td>
				<td align="center" width="655">
					<table align="center" border="0" cellpadding="0" cellspacing="2" class="informe_top" width="100%">
						<tr><td align="center">república bolivariana de venezuela</td></tr>
						<tr><td align="center">ministerio del poder popular para la salud</td></tr>
						<tr><td align="center">hospital especial dr. "alejandro prospero reverend"</td></tr>
						<tr><td align="center">mesa de gallardo edo. trujillo</td></tr>
						<tr><td align="center">departamento de desarrollo social</td></tr>
					</table>
				<td align="center" width="150"><img border="0" src="<?=base_url()?>img/logo_gob_trujillo.jpg" height="145" width="145" /></td>
			</tr>

			<tr><td colspan="3"></td></tr>

			<tr>
				<td align="left" colspan="3">
					<div id="noprint" style="margin-left:40px;">
						<a id="impri" href="#" class="enlace_imprimir">
							<img border="0" src="<?=base_url()?>img/print.png" height="64" width="64" />
							<div style="margin-left:4px;">Imprimir</div>
						</a>
					</div>
				</td>
			</tr>

			<tr height="30"><td colspan="3"></td></tr>

			<tr><td align="center" colspan="3" class="informe_title">Lista de Adultos</td></tr>

			<tr height="30"><td colspan="3"></td></tr>

			
			<tr>
				<td colspan="3" width="955">
					<table align="center" border="1" cellpadding="0" cellspacing="0" class="informe" width="955">
						<tr>
							<td><strong>Cédula</strong></td>
							<td><strong>Nombre</strong></td>
							<td><strong>Expediente N°</strong></td>
							<td><strong>Representante</strong></td>
							<td><strong>Teféfono</strong></td>
						</tr>
						<?php if (!empty($adultos)): ?>
							<?php foreach ($adultos as $adulto) { ?>
								<tr>
									<td><?=$adulto->cedula_adulto?></td>
									<td><?=$adulto->nombre_adulto?></td>
									<td><?=$adulto->numero_expediente_adulto?></td>
									<td><?=$adulto->nombre_representante." ".$adulto->apellido_representante ?></td>
									<td><?=$adulto->telefono_adulto?></td>
								</tr>
							<?php } ?>
						<?php endif ?>
					</table>
				</td>
			</tr>

			
		</table>
	</body>
</html>