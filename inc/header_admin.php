<header>
	<img border="0" src="<?=base_url()?>img/etiqueta_mpps.jpg" id="membrete" />
	<ul class="menu"> 
		<li><a href="<?=base_url()?>admin">Inicio</a></li> 
		<li> 
			<a href="#">Archivo</a> 
		    <ul class="submenu">
		    	<?php if ($this->session->userdata("tipo_usuario")=='Administrador') { ?>           
		        	<li><a href="<?=base_url()?>usuarios">Registro de Usuarios</a></li>
		        <?php } ?>
		        <li><a href="<?=base_url()?>departamentos">Registro del Departamento</a></li>
				<li><a href="<?=base_url()?>cargos">Registro del Cargo</a></li>
		        <li><a href="<?=base_url()?>personales">Registro del Personal</a></li>
		        <li><a href="<?=base_url()?>representantes">Registro del Representante</a></li>
		        <li><a href="<?=base_url()?>adultos">Registro del Adulto Mayor</a></li>
		        <li><a href="<?=base_url()?>gruposf">Registro del Grupo Familiar</a></li>
		   	</ul> 
		</li>
		<?php if (($this->session->userdata("tipo_usuario")=='Administrador') || ($this->session->userdata("tipo_usuario")=='Supervisor')) { ?>  
		<li> 
			<a href="#">Procesos</a> 
		    <ul class="submenu">
		        <li><a href="<?=base_url()?>cierres">Informe de Cierre</a></li>
		        <li><a href="<?=base_url()?>receptorias">Informe de Receptoria</a></li>
				<li><a href="<?=base_url()?>sociales">Informe Social</a></li>
		   	</ul> 
		</li>
		<?php } if ($this->session->userdata("tipo_usuario")=='Administrador') { ?>  
		<li> 
			<a href="#">Impresiones</a> 
		    <ul class="submenu">
		    	<li><a href="<?=base_url()?>impresiones/acta">Acta de Convenio</a></li>
		    	<li><a href="<?=base_url()?>impresiones/constancia">Constancia de Visita a Instituciones</a></li>
		    	<li><a href="<?=base_url()?>impresiones/control">Control de Asistencia</a></li>
		    	<li><a href="<?=base_url()?>impresiones/cronologia">Cronología de Caso</a></li>
		    	<li><a href="<?=base_url()?>impresiones/hoja">Hoja de Vida</a></li>
		        <li><a href="<?=base_url()?>impresiones/cierre">Informe de Cierre</a></li>
		        <li><a href="<?=base_url()?>impresiones/receptoria">Informe de Receptoria</a></li>
				<li><a href="<?=base_url()?>impresiones/social">Informe Social</a></li>
		   	</ul> 
		</li>
		<li> 
			<a href="#">Reportes</a> 
		    <ul class="submenu">
		        <li><a href="<?=base_url()?>reportes/departamento">Reporte de Departamentos</a></li>
				<li><a href="<?=base_url()?>reportes/cargo">Reporte de Cargos</a></li>
		        <li><a href="<?=base_url()?>reportes/personal">Reporte de Personal</a></li> 
		        <li><a href="<?=base_url()?>reportes/representante">Reporte del Representante</a></li>
		        <li><a href="<?=base_url()?>reportes/adulto">Reporte de Adultos Mayores</a></li>
		        <li><a href="<?=base_url()?>reportes/gruposf">Reporte de Grupos Familiares</a></li>
		   	</ul> 
		</li>
		<?php } ?>
		<li> 
			<a href="#">Mantenimiento</a> 
		    <ul class="submenu">
		        <li><a href="<?=base_url()?>cambios">Cambio de Contraseña</a></li>
		   	</ul> 
		</li> 
		<li class="pull-right">
			<a href="#">Cuenta: <?php echo $this->session->userdata("nombre_usuario"); ?></a>
			<ul class="submenu">
				<li><a href="<?=base_url()?>login/logout">Cerrar Sesion</a></li>
			</ul>
		</li>
	</ul> 
	<div align="right" style="margin-right:40px;" class="usuario"><?php if ($this->session->userdata("tipo_usuario")=='Administrador') { echo "Bienvenido, ".$this->session->userdata("tipo_usuario")." del Sistema" ; } if ($this->session->userdata("tipo_usuario")=='Supervisor') { echo "Bienvenido, ".$this->session->userdata("tipo_usuario")." del Sistema"; } if ($this->session->userdata("tipo_usuario")=='Usuario') { echo "Bienvenido, ".$this->session->userdata("tipo_usuario")." del Sistema"; } ?></div>
</header>
