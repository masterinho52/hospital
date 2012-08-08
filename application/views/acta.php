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
					<form action="<?=base_url()?>impresiones/acta_print" id="imp_acta" method="post" name="imp_acta" target="_blank">
					<table align="center" border="0" cellpadding="0" cellspacing="3" class="texto" width="100%">
						<tr height="20"><td colspan="4"></td></tr>

						<tr>
							<td width="20%"></td>
							<td width="15%">Adulto:</td>
							<td width="45%">
								<select name="id_adulto" id="id_adulto" class="combo">
			                      	<option value=""></option>
			                      	<?php if($adulto) : ?>
			                    		<?php foreach($adulto as $row) : ?>
			                      			<option value="<?=$row->id_adulto;?>"><?=$row->apellido_adulto; ?> <?=$row->nombre_adulto; ?> - <?=$row->cedula_adulto; ?></option>
			                        	<?php endforeach; ?>
			                      	<?php endif; ?>
			                    </select>
							</td>
							<td width="20%"></td>
						</tr>

						<tr>
							<td width="20%"></td>
							<td width="15%">Fecha:</td>
							<td width="45%">
								<select name="dia" id="dia" class="combo">
                                	<option value="">DIA</option>
									<script language="JavaScript" type="text/javascript">
                                       	for(i=1;i<=31;i++){
                                        	document.write('<option value="'+i+'">'+i+'</option>');
                                    	}
                                   	</script>
                               	</select> /
                               	<select name="mes" id="mes" class="combo">
                                	<option value="">MES</option>
									<option value="ENERO">ENERO</option>
									<option value="FEBRERO">FEBRERO</option>
									<option value="MARZO">MARZO</option>
									<option value="ABRIL">ABRIL</option>
									<option value="MAYO">MAYO</option>
									<option value="JUNIO">JUNIO</option>
									<option value="JULIO">JULIO</option>
									<option value="AGOSTO">AGOSTO</option>
									<option value="SEPTIEMBRE">SEPTIEMBRE</option>
									<option value="OCTUBRE">OCTUBRE</option>
									<option value="NOVIEMBRE">NOVIEMBRE</option>
									<option value="DICIEMBRE">DICIEMBRE</option>
                               	</select> /
                               	<select name="ano" id="ano" class="combo">
                                	<option value="">AÑO</option>
									<script language="JavaScript" type="text/javascript">
                                       	for(i=<?php echo date("Y");?>;i>=1912;i--){
                                        	document.write('<option value="'+i+'">'+i+'</option>');
                                    	}
                                   	</script>
                               	</select>
							</td>
							<td width="20%"></td>
						</tr>

						<tr>
							<td width="20%"></td>
							<td width="15%">Trabajador Social:</td>
							<td width="45%">
								<select name="id_personal" id="id_personal" class="combo">
			                      	<option value=""></option>
			                      	<?php if($personal) : ?>
			                    		<?php foreach($personal as $row) : ?>
			                      			<option value="<?=$row->id_personal;?>"><?=$row->apellido_personal; ?> <?=$row->nombre_personal; ?> - <?=$row->cedula_personal; ?></option>
			                        	<?php endforeach; ?>
			                      	<?php endif; ?>
			                    </select>
							</td>
							<td width="20%"></td>
						</tr>

						<tr>
							<td width="20%"></td>
							<td width="15%">Director(a):</td>
							<td width="45%">
								<select name="personal_id" id="personal_id" class="combo">
			                      	<option value=""></option>
			                      	<?php if($director) : ?>
			                    		<?php foreach($director as $row) : ?>
			                      			<option value="<?=$row->id_personal;?>"><?=$row->apellido_personal; ?> <?=$row->nombre_personal; ?> - <?=$row->cedula_personal; ?></option>
			                        	<?php endforeach; ?>
			                      	<?php endif; ?>
			                    </select>
							</td>
							<td width="20%"></td>
						</tr>

						<tr height="20"><td colspan="4"></td></tr>

						<tr>
							<td align="center" colspan="4">
								<div id="noprint" style="margin-left:13px;">
									<a id="impri" href="#" onclick="return imprimir();" class="enlace_imprimir">
										<input type="image" border="0" name="imprimir" id="imprimir" value="Imprimir" src="<?=base_url()?>img/print.png" height="64" width="64" />
										<div style="margin-left:4px;">Imprimir</div>
									</a>
								</div>
							</td>
						</tr>
					</table>
					</form>
				</p>
			</div>
			<?php include_once("inc/footer.php");?>
		</div>
	</body>
  	<script type="text/javascript" src="<?=base_url()?>js/jquery-1.7.2.min.js"></script>
  	<script type="text/javascript" src="<?=base_url()?>js/application.js"></script>
  	<script type="text/javascript" src="<?=base_url()?>js/gen_validatorv4.js"></script>
  	<script type="text/javascript">
		var frmvalidator = new Validator("imp_acta");
		frmvalidator.EnableMsgsTogether();
		frmvalidator.addValidation("id_adulto","req","El campo del Adulto esta vacio, ¡Debe seleccionar los Datos!");
    	frmvalidator.addValidation("ano","req","El campo del Año esta vacio, ¡Debe seleccionar los Datos!");
		frmvalidator.addValidation("dia","req","El campo del Día esta vacio, ¡Debe seleccionar los Datos!");
		frmvalidator.addValidation("mes","req","El campo del Mes esta vacio, ¡Debe seleccionar los Datos!");
    	frmvalidator.addValidation("id_personal","req","El campo del Trabajador Social esta vacio, ¡Debe seleccionar los Datos!");
    	frmvalidator.addValidation("personal_id","req","El campo del Director(a) esta vacio, ¡Debe seleccionar los Datos!");
    </script>
</html>