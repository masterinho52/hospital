<header>
	<img border="0" src="<?=base_url()?>img/etiqueta_mpps.jpg" width="900" />
	<ul class="menu"> 
		<li><a href="<?=base_url()?>admin">Inicio</a></li> 
		<li> 
			<a href="#">Archivo</a> 
		    <ul class="submenu">
		    	<?php if ($this->session->userdata("tipo_usuario")=='Administrador') { ?>           
		        	<li><a href="<?=base_url()?>usuarios">Registro de Usuarios</a></li>
		        	<li><hr></li> 
		        <?php } ?>
		        <li><a href="<?=base_url()?>departamentos">Registro del Departamento</a></li>
				<li><a href="<?=base_url()?>cargos">Registro del Cargo</a></li>
		        <li><a href="<?=base_url()?>personales">Registro del Personal</a></li> 
		        <li><a href="<?=base_url()?>adultos">Registro del Adulto Mayor</a></li>
			    <li><a href="<?=base_url()?>gruposf">Registro del Grupo Familiar</a></li>
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
