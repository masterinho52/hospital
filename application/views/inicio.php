<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Hospital de Ancianos</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?=base_url()?>css/default.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="container">
			<header>
				<img src="<?=base_url()?>img/logo-gob.jpg" alt="">
			</header>

			<div id="body">
				<h1 class="centrado">Hospital Especial Dr. Alejandro Próspero Reverend</h1>
				<p>
					<h3 class="centrado">Departamento de Trabajo Social</h3>
					<form action="" method="post" accept-charset="utf-8">
						<h4>Usuarios Registrados</h4>
						<label for="login">Usuario: </label>
						<input type="text" name="login" id="login" placeholder="Nombre de Usuario">
						<label for="password">Clave: </label>
						<input type="password" name="password" id="password" placeholder="Clave del Usuario">	
						<input type="submit" value="Ingresar">
					</form>
				</p>
			</div>
			<p class="footer">Diseñado y Desarrollado por: <strong>Marcos Orozco</strong></p>
		</div>
	</body>
</html>