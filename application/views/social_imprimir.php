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
						<tr><td align="center">fundasalud</td></tr>
						<tr><td align="center">dirección de promoción de la salud y</td></tr>
						<tr><td align="center">prevención de la enfermedad</td></tr>
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

			<tr><td colspan="3" class="informe_title">informe social</td></tr>

			<tr height="30"><td colspan="3"></td></tr>
			
			<tr>
				<td colspan="3" width="955">
					<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
						<tr>
							<td align="justify" class="informe_body" width="100%">
								<table align="center" border="0" cellpadding="0" cellspacing="1" width="100%">
									<tr>
										<td align="justify"><span class="informe_body8">fecha: <span class="informe_body9"><?=$fecha=date("d/m/Y",strtotime($soc[0]->fecha_social));?>.</span> hora: </span><span class="informe_body9"><?php $fecha=date("H:i:s",strtotime($soc[0]->fecha_social)); echo $fecha;?></span> <span class="informe_body18"><?php $fecha=date("H:i:s",strtotime($soc[0]->fecha_social)); if ($fecha<'12:00:00') { echo "am"; } if ($fecha>='12:00:00') { echo "pm"; } ?>.</span></td>
									</tr>
									<tr>
										<td align="justify"><span class="informe_body8">referido por: <span class="informe_body9"><?=$soc[0]->referido_social;?>.</span></span></td>
									</tr>
									<tr>
										<td align="justify"><span class="informe_body8">a: <span class="informe_body9"><?=$soc[0]->a_social;?>.</span></span></td>
									</tr>
									<tr>
										<td align="justify"><span class="informe_body8">asunto: <span class="informe_body9"><?=$soc[0]->asunto_social;?>.</span></span></td>
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
										<td><span class="informe_body8">beneficiario:</span><span class="informe_body10">nº expediente: <span class="informe_body11"><?=$soc[0]->numero_expediente_adulto;?>.</span></span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">apellidos y nombres: <span class="informe_body9"><?=$soc[0]->apellido_adulto;?> <?=$soc[0]->nombre_adulto;?>.</span></span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">cédula: <span class="informe_body9"><?=$soc[0]->cedula_adulto;?>.</span></span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">sexo: <span class="informe_body9"><?=$soc[0]->sexo_adulto;?>.</span></span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">edad: <span class="informe_body9"><?=$edad?> años.</span></span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">estado civil: <span class="informe_body9"><?=$soc[0]->estadocivil_adulto;?>.</span></span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">fecha de ingreso: <span class="informe_body9"><?=$fecha=date("d/m/Y",strtotime($soc[0]->fechai_adulto));?>.</span></span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">fecha de nacimiento: <span class="informe_body9"><?=$fecha=date("d/m/Y",strtotime($soc[0]->fechan_adulto));?>.</span></span></td>
									</tr>
									<tr>
										<td align="justify"><span class="informe_body8">lugar de nacimiento: <span class="informe_body9"><?=$soc[0]->lugarn_adulto;?>.</span></span></td>
									</tr>
									<tr>
										<td align="justify"><span class="informe_body8">dirección: <span class="informe_body9"><?=$soc[0]->direccion_adulto;?>.</span></span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">teléfono: <span class="informe_body9"><?=$soc[0]->telefono_adulto;?>.</span></span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">nivel de instrucción: <span class="informe_body9"><?=$soc[0]->instruccion_adulto;?>.</span></span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">ocupación: <span class="informe_body9"><?=$soc[0]->ocupacion_adulto;?>.</span></span></td>
									</tr>
									<tr>
										<td align="justify"><span class="informe_body8">nombre del consejo comunal donde reside: <span class="informe_body9"><?=$soc[0]->comunal_adulto;?>.</span></span></td>
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
										<td><span class="informe_body8">apellidos y nombres: <span class="informe_body9"><?=$soc[0]->apellido_representante;?> <?=$soc[0]->nombre_representante;?>.</span></span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">cédula: <span class="informe_body9"><?=$soc[0]->cedula_representante;?>.</span></span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">sexo: <span class="informe_body9"><?=$soc[0]->sexo_representante;?>.</span></span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">edad: <span class="informe_body9"><?=$edad_r?> años.</span></span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">estado civil: <span class="informe_body9"><?=$soc[0]->estadocivil_representante;?>.</span></span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">fecha de nacimiento: <span class="informe_body9"><?=$fecha=date("d/m/Y",strtotime($soc[0]->fechan_representante));?>.</span></span></td>
									</tr>
									<tr>
										<td align="justify"><span class="informe_body8">lugar de nacimiento: <span class="informe_body9"><?=$soc[0]->lugarn_representante;?>.</span></span></td>
									</tr>
									<tr>
										<td align="justify"><span class="informe_body8">dirección: <span class="informe_body9"><?=$soc[0]->direccion_representante;?>.</span></span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">parentesco: <span class="informe_body9"><?=$soc[0]->parentesco_representante;?>.</span></span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">teléfono: <span class="informe_body9"><?=$soc[0]->telefono_representante;?>.</span></span></td>
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
									<?php if($soc) : ?>
									<?php foreach($soc as $row) : ?>
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
										<td class="informe_body6"><span class="informe_body6">3. area físico-ambiental</span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">3.1.- característica de la vivienda:</span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">característica: </span><span class="informe_body9">rural (<?php if($soc[0]->caracteristica_vivienda=='Rural'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>) Urbana (<?php if($soc[0]->caracteristica_vivienda=='Urbana'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>)</span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">tipo: </span><span class="informe_body9">casa (<?php if($soc[0]->caracteristica_vivienda=='Casa'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>) apartamento (<?php if($soc[0]->caracteristica_vivienda=='Apartamento'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>) rancho (<?php if($soc[0]->caracteristica_vivienda=='Rancho'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>)</span></td>
									</tr>
									<tr>
										<td align="justify">
											<div class="informe_body8">tenencia: <span class="informe_body9">propia (<?php if($soc[0]->tenencia_vivienda=='Propia'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>) alquilada (<?php if($soc[0]->tenencia_vivienda=='Alquilada'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>) comodato (<?php if($soc[0]->tenencia_vivienda=='comodato'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>)</span></div>
											<div class="informe_body8">otro: <span class="informe_body9"><?=$soc[0]->tenencia_otro_vivienda ?></span></div>
										</td>
									</tr>
									<tr>
										<td align="justify">
											<div class="informe_body8">número de ambientes: <span class="informe_body9">único (<?php if($soc[0]->ambiente_vivienda_u=='Si'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>) baño (<?php if($soc[0]->ambiente_vivienda_b=='Si'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>) comedor (<?php if($soc[0]->ambiente_vivienda_c=='Si'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>) dormitorio (<?php if($soc[0]->ambiente_vivienda_d=='Si'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>) cocina (<?php if($soc[0]->ambiente_vivienda_co=='Si'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>)</span></div>
											<div class="informe_body8">otro: <span class="informe_body9"><?=$soc[0]->ambiente_otro_vivienda ?></span></div>
										</td>
									</tr>
								</table>
							</td>
						</tr>

						<tr height="10"><td colspan="3"></td></tr>

						<tr>
							<td align="justify" class="informe_body" width="100%">
								<table align="center" border="1" cellpadding="0" cellspacing="1" width="100%">
									<tr>
										<td><span class="informe_body8">3.2.- materiales predominantes de la vivienda:</span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">techo: </span><span class="informe_body9">platabanda (<?php if($soc[0]->techo_vivienda=='Platabanda'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>) láminas (<?php if($soc[0]->techo_vivienda=='Láminas'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>) tejas (<?php if($soc[0]->techo_vivienda=='Tejas'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>)</span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">tipo: </span><span class="informe_body9">casa (<?php if($soc[0]->caracteristica_vivienda=='Casa'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>) apartamento (<?php if($soc[0]->caracteristica_vivienda=='Apartamento'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>) rancho (<?php if($soc[0]->caracteristica_vivienda=='Rancho'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>)</span></td>
									</tr>
									<tr>
										<td align="justify">
											<div class="informe_body8">tenencia: <span class="informe_body9">propia (<?php if($soc[0]->tenencia_vivienda=='Propia'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>) alquilada (<?php if($soc[0]->tenencia_vivienda=='Alquilada'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>) comodato (<?php if($soc[0]->tenencia_vivienda=='comodato'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>)</span></div>
											<div class="informe_body8">otro: <span class="informe_body9"><?=$soc[0]->tenencia_otro_vivienda ?></span></div>
										</td>
									</tr>
									<tr>
										<td align="justify">
											<div class="informe_body8">número de ambientes: <span class="informe_body9">único (<?php if($soc[0]->ambiente_vivienda_u=='Si'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>) baño (<?php if($soc[0]->ambiente_vivienda_b=='Si'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>) comedor (<?php if($soc[0]->ambiente_vivienda_c=='Si'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>) dormitorio (<?php if($soc[0]->ambiente_vivienda_d=='Si'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>) cocina (<?php if($soc[0]->ambiente_vivienda_co=='Si'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>)</span></div>
											<div class="informe_body8">otro: <span class="informe_body9"><?=$soc[0]->ambiente_otro_vivienda ?></span></div>
										</td>
									</tr>
								</table>
							</td>
						</tr>

						<tr height="10"><td colspan="3"></td></tr>

						<tr>
							<td align="justify" class="informe_body" width="100%">
								<table align="center" border="1" cellpadding="0" cellspacing="1" width="100%">
									<tr>
										<td><span class="informe_body8">3.3.- servicios de la vivienda:</span></td>
									</tr>
									<tr>
										<td align="justify">
											<div class="informe_body8">eliminación de excretas: </span><span class="informe_body9">red de cloacas (<?php if($soc[0]->excreta_vivienda=='Red de Cloacas'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>) poso séptico (<?php if($soc[0]->excreta_vivienda=='Poso Séptico'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>)</span></div>
											<div class="informe_body8">otro: <span class="informe_body9"><?=$soc[0]->excreta_otro_vivienda ?>
										</td>
									</tr>
									<tr>
										<td align="justify">
											<div class="informe_body8">sistema de alumbrado: </span><span class="informe_body9">eléctrico (<?php if($soc[0]->alumbrado_vivienda=='Eléctrico'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>) lámpara / kerosene (<?php if($soc[0]->alumbrado_vivienda=='Lámpara / Kerosene'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>)</span></div>
											<div class="informe_body8">otro: <span class="informe_body9"><?=$soc[0]->alumbrado_otro_vivienda ?>
										</td>
									</tr>
									<tr>
										<td align="justify">
											<div class="informe_body8">disposición de basura: </span><span class="informe_body9">aseo urbano (<?php if($soc[0]->basura_vivienda=='Aseo Urbano'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>) quemaderos (<?php if($soc[0]->basura_vivienda=='Quemaderos'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>)</span></div>
											<div class="informe_body8">otro: <span class="informe_body9"><?=$soc[0]->basura_otro_vivienda ?>
										</td>
									</tr>
									<tr>
										<td align="justify">
											<div class="informe_body8">suministro de agua: </span><span class="informe_body9">tubería (<?php if($soc[0]->agua_vivienda=='Tubería'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>) cisterna (<?php if($soc[0]->agua_vivienda=='Cisterna'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>) tanque (<?php if($soc[0]->agua_vivienda=='Tanque'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>) quebrada (<?php if($soc[0]->agua_vivienda=='Quebrada'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>)</span></div>
											<div class="informe_body8">otro: <span class="informe_body9"><?=$soc[0]->agua_otro_vivienda ?>
										</td>
									</tr>
									<tr>
										<td><span class="informe_body8">vías de acceso: </span><span class="informe_body9">pavimentada (<?php if($soc[0]->acceso_vivienda=='Pavimentada'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>) Carretera Abierta (<?php if($soc[0]->acceso_vivienda=='Carretera Abierta'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>) camino de tierra (<?php if($soc[0]->acceso_vivienda=='Camino de Tierra'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>) gradas (<?php if($soc[0]->acceso_vivienda=='Gradas'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>)</span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">medio de transporte: </span><span class="informe_body9">público (<?php if($soc[0]->transporte_vivienda=='Público'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>) privado (<?php if($soc[0]->transporte_vivienda=='Privado'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>)</span></td>
									</tr>
									<tr>
										<td><span class="informe_body8">teléfono: </span><span class="informe_body9">público (<?php if($soc[0]->telefono_vivienda=='Público'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>) residencial (<?php if($soc[0]->telefono_vivienda=='Residencial'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>) celular (<?php if($soc[0]->telefono_vivienda=='Celular'){ ?><img border="0" src="<?=base_url()?>img/check.png" /><?php } else { echo " ";} ?>)</span></td>
									</tr>
								</table>
							</td>
						</tr>

						<tr height="10"><td colspan="3"></td></tr>

						<tr>
							<td align="justify" class="informe_body" width="50%">
								<table align="center" border="1" cellpadding="0" cellspacing="1" width="100%">
									<tr>
										<td class="informe_body6" colspan="2"><span class="informe_body6">4. análisis socio-económico</span></td>
									</tr>
									<tr>
										<td colspan="2"><span class="informe_body8">4.1.- egresos:</span></td>
									</tr>

									<tr>
										<td align="justify" class="informe_body" width="50%">
											<table align="center" border="1" cellpadding="0" cellspacing="1" width="100%">
												<tr>
													<td><span class="informe_body8">vivienda: </span><span class="informe_body9"><?php echo number_format($soc[0]->vivienda_analisis,2); ?></span> <span class="informe_body17">b</span><span class="informe_body12">s.</span></td>
												</tr>
												<tr>
													<td><span class="informe_body8">transporte: </span><span class="informe_body9"><?php echo number_format($soc[0]->transporte_analisis,2); ?></span> <span class="informe_body17">b</span><span class="informe_body12">s.</span></td>
												</tr>
												<tr>
													<td><span class="informe_body8">servicios: </span><span class="informe_body9"><?php echo number_format($soc[0]->servicios_analisis,2); ?></span> <span class="informe_body17">b</span><span class="informe_body12">s.</span></td>
												</tr>
												<tr>
													<td><span class="informe_body8">medicina: </span><span class="informe_body9"><?php echo number_format($soc[0]->medicina_analisis,2); ?></span> <span class="informe_body17">b</span><span class="informe_body12">s.</span></td>
												</tr>
												<tr>
													<td><span class="informe_body8">alimentación: </span><span class="informe_body9"><?php echo number_format($soc[0]->alimentacion_analisis,2); ?></span> <span class="informe_body17">b</span><span class="informe_body12">s.</span></td>
												</tr>
												<tr>
													<td><span class="informe_body8">otro: </span><span class="informe_body9"><?php echo number_format($soc[0]->otro_analisis,2); ?></span> <span class="informe_body17">b</span><span class="informe_body12">s.</span></td>
												</tr>
												<tr>
													<td><span class="informe_body8">total egresos: </span><span class="informe_body9"><?php echo number_format($soc[0]->vivienda_analisis+$soc[0]->transporte_analisis+$soc[0]->servicios_analisis+$soc[0]->medicina_analisis+$soc[0]->alimentacion_analisis+$soc[0]->otro_analisis,2); ?></span> <span class="informe_body17">b</span><span class="informe_body12">s.</span></td>
												</tr>
											</table>
										</td>
										<td align="center" class="informe_body" width="50%" valign="top">
											<table align="center" border="0" cellpadding="0" cellspacing="1" width="100%">
												<tr>
													<td><span class="informe_body8">total ingresos: </span><span class="informe_body9"><?php echo number_format($soc[0]->ingreso_analisis,2); ?></span> <span class="informe_body17">b</span><span class="informe_body12">s.</span></td>
												</tr>
												<tr>
													<td><span class="informe_body8">total egresos: </span><span class="informe_body9"><?php echo number_format($soc[0]->vivienda_analisis+$soc[0]->transporte_analisis+$soc[0]->servicios_analisis+$soc[0]->medicina_analisis+$soc[0]->alimentacion_analisis+$soc[0]->otro_analisis,2); ?></span> <span class="informe_body17">b</span><span class="informe_body12">s.</span></td>
												</tr>
												<tr>
													<td align="justify"><span class="informe_body8">conclusión: </span><span class="informe_body9"><?=$soc[0]->conclusion_analisis; ?></span></td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>

						<tr height="180"><td colspan="3"></td></tr>

						<tr>
							<td align="justify" class="informe_body" width="100%">
								<table align="center" border="1" cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td class="informe_body6"><span style="margin-left:10px;">5. sintesis del caso</span></td>
									</tr>
									<tr>
										<td align="center">
											<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
												<tr>
													<td width="2%"></td>
													<td align="justify" width="96%">
														<span class="informe_body9"><?=$soc[0]->sintesis_social;?>.</span>
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
										<td class="informe_body6"><span style="margin-left:10px;">6. diagnóstico social</span></td>
									</tr>
									<tr>
										<td align="center">
											<table align="center" border="0" cellpadding="0" cellspacing="1" width="100%">
												<tr>
													<td width="2%"></td>
													<td align="justify" width="96%">
														<span class="informe_body9"><?=$soc[0]->diagnostico_social;?>.</span>
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
										<td class="informe_body6"><span style="margin-left:10px;">7. recomendación</span></td>
									</tr>
									<tr>
										<td align="center">
											<table align="center" border="0" cellpadding="0" cellspacing="1" width="100%">
												<tr>
													<td width="2%"></td>
													<td align="justify" width="96%">
														<span class="informe_body9"><?=$soc[0]->recomendacion_social;?>.</span>
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
										<td class="informe_body6"><span style="margin-left:10px;">8. validación</span></td>
									</tr>
									<tr>
										<td align="center">
											<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
												<tr height="110">
													<td align="left" width="50%">
														<div class="informe_body8">trabajador(a) social: </div><div style="margin-left:10px;" class="informe_body9"><?=$soc[0]->nombre_personal;?> <?=$soc[0]->apellido_personal;?></div>
														<div class="informe_body8">c.i.: <span class="informe_body9"><?=$soc[0]->cedula_personal;?></span></div>
													</td>
													<td align="center" valign="bottom" width="50%"><span class="hr">__________________________________</span><div class="informe_body3" style="margin-top:-10px;">firma</div></td>
												</tr>
											</table>
										</td>
									</tr>
									<tr>
										<td align="justify"><span class="informe_body8">Elaboradopor: <span class="informe_body9"><?=$soc[0]->vobo_social;?></span></span></td>
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