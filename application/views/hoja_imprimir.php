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
						<tr><td align="center">coordinación promoción de la salud y</td></tr>
						<tr><td align="center">prevención de la enfermedad. trabajo social</td></tr>
					</table>
				<td align="center" width="150"><img border="0" src="<?=base_url()?>img/escudo_trujillo.jpg" height="145" width="145" /></td>
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

			<tr><td align="center" colspan="3" class="informe_title">hoja de vida</td></tr>

			<tr height="30"><td colspan="3"></td></tr>

			<tr>
				<td colspan="3" width="955">
					<table align="center" border="0" cellpadding="0" cellspacing="0" width="955">
						<tr>
							<td align="right" valign="top" width="250"><img border="0" class="bg" src="<?=base_url()?>img/foto.jpg" style="margin-right:2px;" /></td>
							<td align="center" width="745"><img border="0" class="bg" src="<?=base_url()?>img/cedula.jpg" /></td>
						</tr>
					</table>
				</td>
			</tr>

			<tr height="20"><td colspan="3"></td></tr>

			<tr>
				<td colspan="3" width="955">
					<table align="center" border="0" cellpadding="0" cellspacing="5" width="100%">
						<tr>
							<td align="justify" class="informe_body">
								nombres: <span class="informe_body5"><?=$adulto[0]->nombre_adulto;?>.</span>
							</td>
						</tr>

						<tr>
							<td align="justify" class="informe_body">
								apellidos: <span class="informe_body5"><?=$adulto[0]->apellido_adulto;?>.</span>
							</td>
						</tr>

						<tr>
							<td align="justify" class="informe_body">
								cédula de identidad nº: <span class="informe_body5"><?=$adulto[0]->cedula_adulto;?>.</span>
							</td>
						</tr>

						<tr>
							<td align="justify" class="informe_body">
								lugar y fecha de nacimiento: <span class="informe_body5"><?=$adulto[0]->lugarn_adulto;?>, el <?=$fecha=date("d/m/Y",strtotime($adulto[0]->fechan_adulto));?>.</span>
							</td>
						</tr>

						<tr>
							<td align="justify" class="informe_body">
								fecha de ingreso: <span class="informe_body5"><?=$fecha=date("d/m/Y",strtotime($adulto[0]->fechai_adulto));?>.</span>
							</td>
						</tr>

						<tr>
							<td align="left" class="informe_body">
								procedente de: <span class="informe_body5"><?=$procedente;?>.</span>
							</td>
						</tr>

						<tr>
							<td align="left" class="informe_body">
								referido por: <span class="informe_body5"><?=$referido;?>.</span>
							</td>
						</tr>

						<?php if(empty($grupo)) : ?>
						<tr>
							<td align="left" colspan="3" class="informe_body">
								posee familiares: <span class="informe_body5">no.</span>
							</td>
						</tr>
						<?php endif; ?>
						<?php if($grupo) : ?>
						<tr>
							<td align="left" colspan="3" class="informe_body">
								posee familiares: <span class="informe_body5">si.</span>
							</td>
						</tr>

						<tr>
							<td align="center" width="100%">
								<table align="center" border="1" cellpadding="0" cellspacing="2" width="100%">
									<tr>
										<td align="center" class="informe_body" width="50%"><strong>apellidos y nombres</strong></td>
										<td align="center" class="informe_body" width="30%"><strong>parentesco</strong></td>
										<td align="center" class="informe_body" width="20%"><strong>teléfono</strong></td>
									</tr>
									<?php foreach($grupo as $row) : ?>
									<tr>
										<td align="left" class="informe_body" width="50%"><?=$row->apellido_grupo;?> <?=$row->nombre_grupo;?></td>
										<td align="center" class="informe_body" width="30%"><?=$row->parentesco_grupo;?></td>
										<td align="center" class="informe_body" width="20%"><?=$row->telefono_grupo;?></td>
									</tr>
									<?php endforeach; ?>									
								</table>
							</td>
						</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>

			<tr height="130"><td colspan="3"></td></tr>

			<tr>
				<td align="center" colspan="3">
					<span class="hr">_________________________________________________________________</span>
				</td>
			</tr>

			<tr>
				<td align="center" class="informe_body3" colspan="3">
					<div><?=$personal[0]->instruccion_personal;?> <?=$personal[0]->nombre_personal;?> <?=$personal[0]->apellido_personal;?></div><div>funcionario receptor</div>
				</td>
			</tr>
		</table>
	</body>
</html>