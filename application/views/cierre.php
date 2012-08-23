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
					<h3 class="centrado">Impresión de Informe de Cierre</h3>
					<form action="<?=base_url()?>impresiones/cierre_print" id="formulario" method="post" name="formulario" target="_blank">
					<table align="center" border="0" cellpadding="0" cellspacing="2" class="texto" width="100%">
						<tr height="20"><td colspan="3"></td></tr>

						<tr>
							<td width="22%"></td>
							<td width="15%">Cierre del Adulto:</td>
							<td width="63%">
								<select name="id_cierre" id="id_cierre" class="combo">
			                      	<option value=""></option>
			                      	<?php if($cierr) : ?>
			                    		<?php foreach($cierr as $row) : ?>
			                      			<option value="<?=$row->id_cierre;?>"><?=$row->apellido_adulto; ?> <?=$row->nombre_adulto; ?> - <?=$row->cedula_adulto; ?></option>
			                        	<?php endforeach; ?>
			                      	<?php endif; ?>
			                    </select>
							</td>
						</tr>

						<tr height="20"><td colspan="3"></td></tr>

						<tr>
							<td align="center" colspan="3">
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
		frmvalidator.addValidation("id_cierre","req","El campo del Cierre esta vacio, ¡Debe seleccionar los Datos!");
    </script>
</html>