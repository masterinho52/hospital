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
					<h3 class="centrado">Hoja de Vida</h3>
					<form action="<?=base_url()?>impresiones/hoja_print" id="formulario" method="post" name="formulario" target="_blank">
					<table align="center" border="0" cellpadding="0" cellspacing="2" class="texto" width="100%">
						<tr height="20"><td colspan="4"></td></tr>

						<tr>
							<td width="20%"></td>
							<td width="18%">Adulto:</td>
							<td width="42%">
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
							<td width="18%">Procedente de:</td>
							<td width="42%">
								<input id="procedente" maxlength="50" name="procedente" size="50" type="text" />
							</td>
							<td width="20%"></td>
						</tr>

						<tr>
							<td width="20%"></td>
							<td width="18%">Refereido por:</td>
							<td width="42%">
								<input id="referido" maxlength="50" name="referido" size="50" type="text" />
							</td>
							<td width="20%"></td>
						</tr>

						<tr>
							<td width="20%"></td>
							<td width="18%">Trabajador Social:</td>
							<td width="42%">
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
		var frmvalidator = new Validator("formulario");
		frmvalidator.EnableMsgsTogether();
		frmvalidator.addValidation("id_adulto","req","El campo del Adulto esta vacio, ¡Debe seleccionar los Datos!");
    	frmvalidator.addValidation("procedente","req","El campo de la Procedencia del Adulto esta vacio, ¡Debe ingresar los Datos!");
    	frmvalidator.addValidation("referido","req","El campo de Referido esta vacio, ¡Debe ingresar los Datos!");
		frmvalidator.addValidation("posee","req","El campo de Posee Familiares esta vacio, ¡Debe seleccionar los Datos!");
    	frmvalidator.addValidation("telefono","req","El campo del Teléfono esta vacio, ¡Debe ingresar los Datos!");
    	frmvalidator.addValidation("funcionario_receptor","req","El campo del Funcionario Receptor esta vacio, ¡Debe ingresar los Datos!");
    </script>
</html>