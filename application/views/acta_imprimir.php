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
					</table>
				</td>
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

			<tr>
				<td colspan="3" width="955">
					<table align="center" border="0" cellpadding="0" cellspacing="5" width="100%">
						<tr><td colspan="3" class="informe_title">acta convenio</td></tr>

						<tr height="30"><td colspan="3"></td></tr>

						<tr>
							<td width="10%"></td>
							<td align="justify" class="informe_body" width="80%">
								YO, <span class="informe_body2"><?=$adulto[0]->nombre_representante;?> <?=$adulto[0]->apellido_representante;?>,</span> venezolano (a),
								titular de la cédula de identidad nº: <span class="informe_body2"><?=$adulto[0]->cedula_representante;?>,</span> 
								edad: <span class="informe_body2"><?=$edad_r?></span> años, 
								preofesión: <span class="informe_body2"><?=$adulto[0]->profesion_representante;?>,</span> 
								dirección de habitación: <span class="informe_body2"><?=$adulto[0]->direccion_representante;?>,</span>
								teléfonos: <span class="informe_body2"><?=$adulto[0]->telefono_representante;?>.</span>
							</td>
							<td width="10%"></td>
						</tr>

						<tr height="10"><td colspan="3"></td></tr>

						<tr>
							<td width="10%"></td>
							<td align="justify" class="informe_body" width="80%">
								he ingresado al hospital especial "alejandro prospero reverend", el dia: <span class="informe_body2"><?=$fecha=date("d/m/Y",strtotime($adulto[0]->fechai_adulto));?>,</span>
								por un lapso a convenir: <span class="informe_body2"><?=$adulto[0]->nombre_adulto;?> <?=$adulto[0]->apellido_adulto;?>,</span> venezolano (a),
								titular de la cédula de identidad nº: <span class="informe_body2"><?=$adulto[0]->cedula_adulto;?>,</span> 
								fecha de nacimiento: <span class="informe_body2"><?=$fecha=date("d/m/Y",strtotime($adulto[0]->fechan_adulto));?>,</span> 
								edad: <span class="informe_body2"><?=$edad?></span> años, 
								estado civil: <span class="informe_body2"><?=$adulto[0]->estadocivil_adulto;?>,</span> 
								dirección de habitación: <span class="informe_body2"><?=$adulto[0]->direccion_adulto;?>.</span>
							</td>
							<td width="10%"></td>
						</tr>

						<tr height="10"><td colspan="3"></td></tr>

						<tr>
							<td width="10%"></td>
							<td align="justify" class="informe_body" width="80%">
								comprometiendome a cumplir con la dirección de esta institución con las siguientes normas:
							</td>
							<td width="10%"></td>
						</tr>
						
						<tr>
							<td width="10%"></td>
							<td align="justify" class="informe_body" width="80%">
								1º visitar por lo mínimo una vez al mes al paciente.
							</td>
							<td width="10%"></td>
						</tr>

						<tr>
							<td width="10%"></td>
							<td align="justify" class="informe_body" width="80%">
								2º estar pendiente de suministrar el tratamiento que le sea indicado, así mismo vestimenta y articulos personales en la medida de sus posibilidades.
							</td>
							<td width="10%"></td>
						</tr>

						<tr>
							<td width="100"></td>
							<td align="justify" class="informe_body" width="80%">
								3º estar pendiente de renovar el acta convenio trismestralmente.
							</td>
							<td width="100"></td>
						</tr>

						<tr>
							<td width="10%"></td>
							<td align="justify" class="informe_body" width="80%">
								4º en caso de fallecimiento del paciente, cubrir los gastos funerarios, entre otros.
							</td>
							<td width="10%"></td>
						</tr>

						<tr height="10"><td colspan="3"></td></tr>

						<tr>
							<td width="10%"></td>
							<td align="justify" class="informe_body" width="80%">
								acta que se expide en la ciudad de trujillo a: 
								<span class="informe_body2"><?=$dia;?> del mes <?=$mes;?> del <?=$ano;?>.</span>
							</td>
							<td width="10%"></td>
						</tr>

						<tr height="20"><td colspan="3"></td></tr>

						<tr><td align="center" class="informe_body3" colspan="3">firmas conformes</td></tr>

						<tr height="100"><td colspan="3"></td></tr>

						<tr>
							<td align="center" colspan="3" width="955">
								<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td align="center" width="40%"><span class="hr">_____________________________________________________</span></td>
										<td width="20%"></td>
										<td align="center" width="40%"><span class="hr">_____________________________________________________</span></td>
									</tr>

									<tr>
										<td colspan="3"></td>
									</tr>

									<tr>
										<td align="center" class="informe_body3" width="40%"><div>c.i: <?=$personal[0]->cedula_personal;?></div><div><?=$personal[0]->instruccion_personal;?> <?=$personal[0]->nombre_personal;?> <?=$personal[0]->apellido_personal;?></div><div>trabajador social</div></td>
										<td width="20%"></td>
										<td align="center" class="informe_body3" width="40%"><div>c.i: <?=$adulto[0]->cedula_representante;?></div><div><?=$adulto[0]->nombre_representante;?> <?=$adulto[0]->apellido_representante;?></div><div>persona responsable</div></td>
									</tr>

									<tr height="50"><td colspan="3"></td></tr>

									<tr>
										<td align="center" colspan="3" width="100%"><span class="hr">_____________________________________________________</span></td>
									</tr>

									<tr>
										<td align="center" colspan="3" class="informe_body3" width="100%"><div>c.i: <?=$director[0]->cedula_personal;?></div><div><?=$director[0]->instruccion_personal;?> <?=$director[0]->nombre_personal;?> <?=$director[0]->apellido_personal;?></div><div>director(a)</div></td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</body>
</html>