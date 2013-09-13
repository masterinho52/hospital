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
						<tr><td align="center">gobernación del estado trujillo</td></tr>
						<tr><td align="center">fundación trujillana de la salud</td></tr>
						<tr><td align="center">coordinación de programas desarrollo social</td></tr>
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

			<tr><td colspan="3" class="informe_title">informe de receptoría</td></tr>

			<tr height="30"><td colspan="3"></td></tr>
			
			<tr>
				<td colspan="3" width="955">
					<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
						<tr>
							<td align="justify" class="informe_body" width="100%">
								<table align="center" border="0" cellpadding="0" cellspacing="1" width="100%">
									<tr>
										<td align="justify"><span class="informe_body8">fecha: <span class="informe_body9"><?=$fecha=date("d/m/Y",strtotime($recept[0]->fecha_receptoria));?>.</span> hora: </span><span class="informe_body9"><?php $fecha=date("H:i:s",strtotime($recept[0]->fecha_receptoria)); echo $fecha;?></span> <span class="informe_body18"><?php $fecha=date("H:i:s",strtotime($recept[0]->fecha_receptoria)); if ($fecha<'12:00:00') { echo "am"; } if ($fecha>='12:00:00') { echo "pm"; } ?>.</span></td>
									</tr>
									<tr>
										<td align="justify"><span class="informe_body8">referido por: <span class="informe_body9"><?=$recept[0]->referido_receptoria;?>.</span></span></td>
									</tr>
									<tr>
										<td align="justify"><span class="informe_body8">a: <span class="informe_body9"><?=$recept[0]->a_receptoria;?>.</span></span></td>
									</tr>
									<tr>
										<td align="justify"><span class="informe_body8">asunto: <span class="informe_body9"><?=$recept[0]->asunto_receptoria;?>.</span></span></td>
									</tr>
								</table>
							</td>
						</tr>

						<tr height="10"><td colspan="3"></td></tr>

						<tr>
							<td align="justify" class="informe_body" width="100%">
								<table align="center" border="1" cellpadding="0" cellspacing="1" width="100%">
									<tr>
										<td class="informe_body6"><span style="margin-left:10px;">1. identificación</span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">beneficiario:</span><span class="informe_body10">nº expediente: <span class="informe_body11"><?=$recept[0]->numero_expediente_adulto;?>.</span></span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">apellidos y nombres: <span class="informe_body9"><?=$recept[0]->apellido_adulto;?> <?=$recept[0]->nombre_adulto;?>.</span></span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">cédula: <span class="informe_body9"><?=$recept[0]->cedula_adulto;?>.</span></span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">sexo: <span class="informe_body9"><?=$recept[0]->sexo_adulto;?>.</span></span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">edad: <span class="informe_body9"><?=$edad?> años.</span></span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">estado civil: <span class="informe_body9"><?=$recept[0]->estadocivil_adulto;?>.</span></span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">fecha de ingreso: <span class="informe_body9"><?=$fecha=date("d/m/Y",strtotime($recept[0]->fechai_adulto));?>.</span></span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">fecha de nacimiento: <span class="informe_body9"><?=$fecha=date("d/m/Y",strtotime($recept[0]->fechan_adulto));?>.</span></span></td>
									</tr>
									<tr>
										<td align="justify"><span class="informe_body8">lugar de nacimiento: <span class="informe_body9"><?=$recept[0]->lugarn_adulto;?>.</span></span></td>
									</tr>
									<tr>
										<td align="justify"><span class="informe_body8">dirección: <span class="informe_body9"><?=$recept[0]->direccion_adulto;?>.</span></span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">teléfono: <span class="informe_body9"><?=$recept[0]->telefono_adulto;?>.</span></span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">nivel de instrucción: <span class="informe_body9"><?=$recept[0]->instruccion_adulto;?>.</span></span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">ocupación: <span class="informe_body9"><?=$recept[0]->ocupacion_adulto;?>.</span></span></td>
									</tr>
									<tr>
										<td align="justify"><span class="informe_body8">nombre del consejo comunal donde reside: <span class="informe_body9"><?=$recept[0]->comunal_adulto;?>.</span></span></td>
									</tr>
								</table>
							</td>
						</tr>

						<tr height="10"><td colspan="3"></td></tr>

						<tr>
							<td align="justify" class="informe_body" width="100%">
								<table align="center" border="1" cellpadding="0" cellspacing="1" width="100%">
									<tr>
										<td><span class="informe_body8">representante y/o solicitante:</span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">apellidos y nombres: <span class="informe_body9"><?=$recept[0]->apellido_representante;?> <?=$recept[0]->nombre_representante;?>.</span></span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">cédula: <span class="informe_body9"><?=$recept[0]->cedula_representante;?>.</span></span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">sexo: <span class="informe_body9"><?=$recept[0]->sexo_representante;?>.</span></span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">edad: <span class="informe_body9"><?=$edad_r?> años.</span></span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">estado civil: <span class="informe_body9"><?=$recept[0]->estadocivil_representante;?>.</span></span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">fecha de nacimiento: <span class="informe_body9"><?=$fecha=date("d/m/Y",strtotime($recept[0]->fechan_representante));?>.</span></span></td>
									</tr>
									<tr>
										<td align="justify"><span class="informe_body8">lugar de nacimiento: <span class="informe_body9"><?=$recept[0]->lugarn_representante;?>.</span></span></td>
									</tr>
									<tr>
										<td align="justify"><span class="informe_body8">dirección: <span class="informe_body9"><?=$recept[0]->direccion_representante;?>.</span></span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">parentesco: <span class="informe_body9"><?=$recept[0]->parentesco_representante;?>.</span></span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">teléfono: <span class="informe_body9"><?=$recept[0]->telefono_representante;?>.</span></span></td>
									</tr>
								</table>
							</td>
						</tr>

						<tr height="40"><td colspan="3"></td></tr>

						<tr>
							<td align="justify" class="informe_body" width="100%">
								<table align="center" border="1" cellpadding="0" cellspacing="1" width="100%">
									<tr>
										<td class="informe_body6" colspan="7"><span class="informe_body6">2. grupo familiar</span></td>
									</tr>
									<tr>
										<td align="center" class="informe_body15" width="25%">apellidos y nombres</td>
										<td align="center" class="informe_body15" width="12%">cédula</td>
										<td align="center" class="informe_body15" width="12%">parentesco</td>
										<td align="center" class="informe_body15" width="11%">sexo</td>
										<td align="center" class="informe_body15" width="12%">ocupación</td>
										<td align="center" class="informe_body15" width="14%">ingreso</td>
										<td align="center" class="informe_body15" width="14%">aporte</td>
									</tr>
									<?php if($recept) : ?>
									<?php foreach($recept as $row) : ?>
									<tr>
										<td align="justify" class="informe_body16"><?=$row->apellido_grupo;?> <?=$row->nombre_grupo;?></td>
										<td align="center" class="informe_body16"><?=$row->cedula_grupo;?></td>
										<td align="center" class="informe_body16"><?=$row->parentesco_grupo;?></td>
										<td align="center" class="informe_body16"><?=$row->sexo_grupo;?></td>
										<td align="center" class="informe_body16"><?=$row->ocupacion_grupo;?></td>
										<td align="right" class="informe_body16"><?php echo number_format($row->ingreso_grupo, 2);?> <span class="informe_body17">b</span><span class="informe_body12">s.</span></td>
										<td align="right" class="informe_body16"><?php echo number_format($row->aporte_grupo, 2);?> <span class="informe_body17">b</span><span class="informe_body12">s.</span></td>
									</tr>
									<?php endforeach; ?>
									<?php endif; ?>
								</table>
							</td>
						</tr>

						<tr height="10"><td colspan="3"></td></tr>

						<tr>
							<td align="justify" class="informe_body" width="100%">
								<table align="center" border="1" cellpadding="0" cellspacing="1" width="100%">
									<tr>
										<td class="informe_body6" colspan="3"><span class="informe_body6">3. area socio-económica</span></td>
									</tr>
									<tr>
										<td colspan="3"><span class="informe_body8">3.1.- condiciones de la vivienda:</span></td>
									</tr>
									<tr>
										<td align="center" class="informe_body8" width="3%">1</td>
										<td align="center" class="informe_body8" width="5%"><?php if($recept[0]->vivienda_receptoria=='Óptimas condiciones'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else {} ?></td>
										<td width="92%"><span class="informe_body13">óptimas condiciones</span></td>
									</tr>
									<tr>
										<td align="center" class="informe_body8" width="3%">2</td>
										<td align="center" class="informe_body8" width="5%"><?php if($recept[0]->vivienda_receptoria=='Sin lujos, espaciosa'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else {} ?></td>
										<td width="92%"><span class="informe_body13">Sin lujos, espaciosa</span></td>
									</tr>
									<tr>
										<td align="center" class="informe_body8" width="3%">3</td>
										<td align="center" class="informe_body8" width="5%"><?php if($recept[0]->vivienda_receptoria=='Buenas condiciones sanitarias, espacios reducidos'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else {} ?></td>
										<td width="92%"><span class="informe_body13">Buenas condiciones sanitarias, espacios reducidos</span></td>
									</tr>
									<tr>
										<td align="center" class="informe_body8" width="3%">4</td>
										<td align="center" class="informe_body8" width="5%"><?php if($recept[0]->vivienda_receptoria=='Ambientes espaciosos o reducidos con deficiencias sanitarias'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else {} ?></td>
										<td width="92%"><span class="informe_body13">Ambientes espaciosos o reducidos con deficiencias sanitarias</span></td>
									</tr>
									<tr>
										<td align="center" class="informe_body8" width="3%">5</td>
										<td align="center" class="informe_body8" width="5%"><?php if($recept[0]->vivienda_receptoria=='Rancho con espacios reducidos'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else {} ?></td>
										<td width="92%"><span class="informe_body13">Rancho con espacios reducidos</span></td>
									</tr>
								</table>
							</td>
						</tr>

						<tr height="10"><td colspan="3"></td></tr>

						<tr>
							<td align="justify" class="informe_body" width="100%">
								<table align="center" border="1" cellpadding="0" cellspacing="1" width="100%">
									<tr>
										<td colspan="3"><span class="informe_body8">3.2.- profesión del jefe de la familia:</span></td>
									</tr>
									<tr>
										<td align="center" class="informe_body8" width="3%">1</td>
										<td align="center" class="informe_body8" width="5%"><?php if($recept[0]->profesion_receptoria=='Universitario o alto comerciante'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else {} ?></td>
										<td width="92%"><span class="informe_body13">Universitario o alto comerciante</span></td>
									</tr>
									<tr>
										<td align="center" class="informe_body8" width="3%">2</td>
										<td align="center" class="informe_body8" width="5%"><?php if($recept[0]->profesion_receptoria=='Técnico o medio productor'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else {} ?></td>
										<td width="92%"><span class="informe_body13">Técnico o medio productor</span></td>
									</tr>
									<tr>
										<td align="center" class="informe_body8" width="3%">3</td>
										<td align="center" class="informe_body8" width="5%"><?php if($recept[0]->profesion_receptoria=='Sin profesión, pequeño comerciante, propietario con buena remuneración'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else {} ?></td>
										<td width="92%"><span class="informe_body13">Sin profesión, pequeño comerciante, propietario con buena remuneración</span></td>
									</tr>
									<tr>
										<td align="center" class="informe_body8" width="3%">4</td>
										<td align="center" class="informe_body8" width="5%"><?php if($recept[0]->profesion_receptoria=='Obrero especializado, chofer, albañil'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else {} ?></td>
										<td width="92%"><span class="informe_body13">Obrero especializado, chofer, albañil</span></td>
									</tr>
									<tr>
										<td align="center" class="informe_body8" width="3%">5</td>
										<td align="center" class="informe_body8" width="5%"><?php if($recept[0]->profesion_receptoria=='Obrero no especializado, buhonero, servicio domestico'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else {} ?></td>
										<td width="92%"><span class="informe_body13">Obrero no especializado, buhonero, servicio domestico</span></td>
									</tr>
								</table>
							</td>
						</tr>

						<tr height="10"><td colspan="3"></td></tr>

						<tr>
							<td align="justify" class="informe_body" width="100%">
								<table align="center" border="1" cellpadding="0" cellspacing="1" width="100%">
									<tr>
										<td colspan="3"><span class="informe_body8">3.3.- nivel de educación de la madre:</span></td>
									</tr>
									<tr>
										<td align="center" class="informe_body8" width="3%">1</td>
										<td align="center" class="informe_body8" width="5%"><?php if($recept[0]->madre_receptoria=='Universitaria o su equivalente'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else {} ?></td>
										<td width="92%"><span class="informe_body13">Universitaria o su equivalente</span></td>
									</tr>
									<tr>
										<td align="center" class="informe_body8" width="3%">2</td>
										<td align="center" class="informe_body8" width="5%"><?php if($recept[0]->madre_receptoria=='Secundaria completa o Técnica Superior'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else {} ?></td>
										<td width="92%"><span class="informe_body13">Secundaria completa o Técnica Superior</span></td>
									</tr>
									<tr>
										<td align="center" class="informe_body8" width="3%">3</td>
										<td align="center" class="informe_body8" width="5%"><?php if($recept[0]->madre_receptoria=='Secundaria incompleta o Técnica Medio'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else {} ?></td>
										<td width="92%"><span class="informe_body13">Secundaria incompleta o Técnica Medio</span></td>
									</tr>
									<tr>
										<td align="center" class="informe_body8" width="3%">4</td>
										<td align="center" class="informe_body8" width="5%"><?php if($recept[0]->madre_receptoria=='Primaria o Alfabeta'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else {} ?></td>
										<td width="92%"><span class="informe_body13">Primaria o Alfabeta</span></td>
									</tr>
									<tr>
										<td align="center" class="informe_body8" width="3%">5</td>
										<td align="center" class="informe_body8" width="5%"><?php if($recept[0]->madre_receptoria=='Analfabeta'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else {} ?></td>
										<td width="92%"><span class="informe_body13">Analfabeta</span></td>
									</tr>
								</table>
							</td>
						</tr>

						<tr height="10"><td colspan="3"></td></tr>

						<tr>
							<td align="justify" class="informe_body" width="100%">
								<table align="center" border="1" cellpadding="0" cellspacing="1" width="100%">
									<tr>
										<td colspan="3"><span class="informe_body8">3.4.- principal fuente de ingresos de la familia:</span></td>
									</tr>
									<tr>
										<td align="center" class="informe_body8" width="3%">1</td>
										<td align="center" class="informe_body8" width="5%"><?php if($recept[0]->fuente_receptoria=='Herencia'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else {} ?></td>
										<td width="92%"><span class="informe_body13">Herencia</span></td>
									</tr>
									<tr>
										<td align="center" class="informe_body8" width="3%">2</td>
										<td align="center" class="informe_body8" width="5%"><?php if($recept[0]->fuente_receptoria=='Ganancias, beneficios, honorarios profesionales'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else {} ?></td>
										<td width="92%"><span class="informe_body13">Ganancias, beneficios, honorarios profesionales</span></td>
									</tr>
									<tr>
										<td align="center" class="informe_body8" width="3%">3</td>
										<td align="center" class="informe_body8" width="5%"><?php if($recept[0]->fuente_receptoria=='Sueldo mensual'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else {} ?></td>
										<td width="92%"><span class="informe_body13">Sueldo mensual</span></td>
									</tr>
									<tr>
										<td align="center" class="informe_body8" width="3%">4</td>
										<td align="center" class="informe_body8" width="5%"><?php if($recept[0]->fuente_receptoria=='Salario semanal o por día'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else {} ?></td>
										<td width="92%"><span class="informe_body13">Salario semanal o por día</span></td>
									</tr>
									<tr>
										<td align="center" class="informe_body8" width="3%">5</td>
										<td align="center" class="informe_body8" width="5%"><?php if($recept[0]->fuente_receptoria=='Donaciones de orden público'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else {} ?></td>
										<td width="92%"><span class="informe_body13">Donaciones de orden público</span></td>
									</tr>
								</table>
							</td>
						</tr>

						<tr height="350"><td colspan="3"></td></tr>

						<tr>
							<td align="justify" class="informe_body" width="100%">
								<table align="center" border="1" cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td class="informe_body6"><span style="margin-left:10px;">4. sintesis del caso</span></td>
									</tr>
									<tr>
										<td align="center">
											<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
												<tr>
													<td width="2%"></td>
													<td align="justify" width="96%">
														<span class="informe_body9"><?=$recept[0]->sintesis_receptoria;?>.</span>
													</td>
													<td width="2%"></td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>

						<tr height="10"><td colspan="3"></td></tr>

						<tr>
							<td align="justify" class="informe_body" width="100%">
								<table align="center" border="1" cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td class="informe_body6"><span style="margin-left:10px;">5. diagnóstico social y/o médico</span></td>
									</tr>
									<tr>
										<td align="center">
											<table align="center" border="0" cellpadding="0" cellspacing="1" width="100%">
												<tr>
													<td width="2%"></td>
													<td align="justify" width="96%">
														<span class="informe_body9"><?=$recept[0]->diagnostico_receptoria;?>.</span>
													</td>
													<td width="2%"></td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>

						<tr height="10"><td colspan="3"></td></tr>

						<tr>
							<td align="justify" class="informe_body" width="100%">
								<table align="center" border="1" cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td class="informe_body6"><span style="margin-left:10px;">6. gestiones realizadas</span></td>
									</tr>
									<tr>
										<td align="center">
											<table align="center" border="0" cellpadding="0" cellspacing="1" width="100%">
												<tr>
													<td width="2%"></td>
													<td align="justify" width="96%">
														<span class="informe_body9"><?=$recept[0]->gestiones_receptoria;?>.</span>
													</td>
													<td width="2%"></td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>

						<tr height="10"><td colspan="3"></td></tr>

						<tr>
							<td align="justify" class="informe_body" width="100%">
								<table align="center" border="1" cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td class="informe_body6"><span style="margin-left:10px;">7. validación</span></td>
									</tr>
									<tr>
										<td align="center">
											<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
												<tr height="110">
													<td align="left" width="50%">
														<div class="informe_body8">trabajador(a) social: </div><div style="margin-left:10px;" class="informe_body9"><?=$recept[0]->nombre_personal;?> <?=$recept[0]->apellido_personal;?></div>
														<div class="informe_body8">c.i.: <span class="informe_body9"><?=$recept[0]->cedula_personal;?></span></div>
													</td>
													<td align="center" valign="bottom" width="50%"><span class="hr">__________________________________</span><div class="informe_body3" style="margin-top:-10px;">firma</div></td>
												</tr>
											</table>
										</td>
									</tr>
									<tr>
										<td align="justify"><span class="informe_body8">vobo por: <span class="informe_body9"><?=$recept[0]->vobo_receptoria;?></span></span></td>
									</tr>
									<tr>
										<td align="center">
											<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
												<tr>
													<td width="50%"></td>
													<td align="center" class="informe_body3" width="50%"><div>coordinador del servicio</div><div style="margin-top:-15px;">trabajo social</div></td>
												</tr>
											</table>
										</td>
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