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

			<tr><td align="center" colspan="3" class="informe_title">cronología de caso</td></tr>

			<tr height="30"><td colspan="3"></td></tr>

			<tr>
				<td colspan="3" width="955">
					<table align="center" border="0" cellpadding="0" cellspacing="5" width="100%">
						<tr>
							<td width="35%"></td>
							<td align="left" class="informe_body5" width="65%">
								adulto mayor: <span class="informe_body4"><?=$adulto[0]->nombre_adulto;?> <?=$adulto[0]->apellido_adulto;?>.</span>
							</td>
						</tr>

						<tr>
							<td width="35%"></td>
							<td align="left" class="informe_body5" width="65%">
								cédula de identidad: <span class="informe_body4"><?=$adulto[0]->cedula_adulto;?>.</span>
							</td>
						</tr>

						<tr>
							<td width="35%"></td>
							<td align="left" class="informe_body5" width="65%">
								historia nº: <span class="informe_body4"><?=$adulto[0]->numero_expediente_adulto;?>.</span>
							</td>
						</tr>

						<tr>
							<td width="35%"></td>
							<td align="left" class="informe_body5" width="65%">
								fecha: <span class="informe_body4"><?=$dia;?> de <?=$mes;?> del <?=$ano;?>.</span>
							</td>
						</tr>
					</table>
				</td>
			</tr>

			<tr height="30"><td colspan="3"></td></tr>

			<tr>
				<td colspan="3" width="955">
					<table align="center" border="0" cellpadding="0" cellspacing="5" width="100%">
						<tr>
							<td width="10%"></td>
							<td align="justify" class="informe_body" width="80%">
								situación actual: <span class="informe_body2"><?=$situacion;?>.</span>
							</td>
							<td width="10%"></td>
						</tr>
					</table>
				</td>
			</tr>

			<tr height="200"><td colspan="3"></td></tr>

			<tr>
				<td align="center" colspan="3" width="955">
					<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
						<tr>
							<td align="center" width="100%"><span class="hr">_____________________________________________________</span></td>
						</tr>

						<tr>
							<td align="center" class="informe_body3" width="100%"><div>c.i: <?=$personal[0]->cedula_personal;?></div><div><?=$personal[0]->instruccion_personal;?> <?=$personal[0]->nombre_personal;?> <?=$personal[0]->apellido_personal;?></div><div>trabajador social</div></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</body>
</html>