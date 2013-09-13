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

			<tr><td align="center" colspan="3" class="informe_title">informe de cierre</td></tr>

			<tr height="30"><td colspan="3"></td></tr>

			<tr>
				<td align="right" class="informe_body" colspan="3" width="955">
					matricula: <span class="informe_body2"><?=$cierr[0]->cedula_adulto;?>.</span>
				</td>
			</tr>

			<tr height="30"><td colspan="3"></td></tr>

			<tr>
				<td colspan="3" width="955">
					<table align="center" border="0" cellpadding="0" cellspacing="5" width="100%">
						<tr>
							<td width="10%"></td>
							<td class="informe_title2" width="80%">
								identificación del caso:
							</td>
							<td width="10%"></td>
						</tr>

						<tr height="30"><td colspan="3"></td></tr>
						
						<tr>
							<td width="10%"></td>
							<td align="justify" class="informe_body" width="80%">
								cliente: <span class="informe_body5"><?=$cierr[0]->nombre_adulto;?> <?=$cierr[0]->apellido_adulto;?>.</span>
							</td>
							<td width="10%"></td>
						</tr>

						<tr height="10"><td></td></tr>

						<tr>
							<td width="10%"></td>
							<td align="justify" class="informe_body" width="80%">
								dirección: <span class="informe_body5"><?=$cierr[0]->direccion_adulto;?>.</span>
							</td>
							<td width="10%"></td>
						</tr>

						<tr height="10"><td></td></tr>

						<tr>
							<td width="10%"></td>
							<td align="justify" class="informe_body" width="80%">
								lapso de atención: <span class="informe_body5"><?=$cierr[0]->lapso_cierre;?>.</span>
							</td>
							<td width="10%"></td>
						</tr>

						<tr height="10"><td></td></tr>

						<tr>
							<td width="10%"></td>
							<td align="justify" class="informe_body" width="80%">
								sintesis del caso: <span class="informe_body5"><?=$cierr[0]->sintesis_cierre;?>.</span>
							</td>
							<td width="10%"></td>
						</tr>

						<tr height="10"><td></td></tr>

						<tr>
							<td width="10%"></td>
							<td align="justify" class="informe_body" width="80%">
								motivo de cierre: <span class="informe_body5"><?=$cierr[0]->motivo_cierre;?>.</span>
							</td>
							<td width="10%"></td>
						</tr>

						<tr height="10"><td></td></tr>

						<tr>
							<td width="10%"></td>
							<td align="left" class="informe_body" width="80%">
								trujillo, <span class="informe_body2"><?php $fecha = explode('-', $cierr[0]->fecha_cierre); echo $fecha[2];?></span> de <span class="informe_body2"><?php $fecha = explode('-', $cierr[0]->fecha_cierre); if ($fecha[1]=='01') { echo "enero";} if ($fecha[1]=='02') { echo "febrero";} if ($fecha[1]=='03') { echo "marzo";} if ($fecha[1]=='04') { echo "abril";} if ($fecha[1]=='05') { echo "mayo";} if ($fecha[1]=='07') { echo "julio";} if ($fecha[1]=='08') { echo "agosto";} if ($fecha[1]=='09') { echo "septiembre";} if ($fecha[1]=='10') { echo "octubre";} if ($fecha[1]=='11') { echo "noviembre";} if ($fecha[1]=='12') { echo "diciembre";} ?></span> del <span class="informe_body2"><?php $fecha = explode('-', $cierr[0]->fecha_cierre); echo $fecha[0];?>.</span>
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
							<td width="40%"></td>
							<td width="20%"></td>
							<td align="center" width="40%"><span class="hr">_____________________________________________________</span></td>
						</tr>

						<tr>
							<td colspan="3"></td>
						</tr>

						<tr>
							<td width="40%"></td>
							<td width="20%"></td>
							<td align="center" class="informe_body3" width="40%"><div>c.i: <?=$cierr[0]->cedula_personal;?></div><div><?=$cierr[0]->instruccion_personal;?> <?=$cierr[0]->nombre_personal;?> <?=$cierr[0]->apellido_personal;?></div><div>trabajador social</div></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</body>
</html>