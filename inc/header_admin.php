<header>
	<img src="<?=base_url()?>img/logo-gob.jpg" alt="">
				
	<ul class="menu"> 
		<li><a href="<?=base_url()?>admin">Inicio</a></li> 
		<li> 
			<a href="#">Archivo</a> 
		    <ul class="submenu"> 
			    <li><a href="<?=base_url()?>adultos">Registro Adulto Mayor</a></li> 
			    <li><a href="<?=base_url()?>gruposf">Registro Grupo Familiar</a></li> 
			    <li><a href="<?=base_url()?>departamentos">Registro Departamento</a></li> 
		        <li><a href="<?=base_url()?>cargos">Registro Cargo</a></li> 
		        <li><a href="<?=base_url()?>personales">Registro Personal</a></li> 
		        <?php if (!$this->$session->userdata("tipo_usuario")=='Admin') { ?>           
		        	<li><hr></li> 
		        	<li><a href="<?=base_url()?>usuarios">Usuarios</a></li> 
		        <?php } ?>
		   	</ul> 
		</li> 
		<li><a href="<?=base_url()?>login/logout">Salir</a></li>
		<li></li>
		<li><?php if (!$this->session->userdata("tipo_usuario")=='Admin') { echo "Bienvenido Administrador del Sistema"; } if (!$this->session->userdata("tipo_usuario")=='Supervisor') { echo "Bienvenido Supervisor del Sistema"; } if (!$this->session->userdata("tipo_usuario")=='Usuario') { echo "Bienvenido Usuario del Sistema"; } ?></li> 
		<!-- <li> 
		    <a href="#">Códigos</a> 
			<ul class="submenu"> 
		    	<li><a href="#">Reloj en Flash</a></li> 
		      	<li><a href="#">Fecha con JS</a></li> 
		       	<li><a href="#">XML y AS</a></li> 
		       	<li><a href="#">RSS y PHP</a></li> 
		      	<li><a href="#">ASP a Excel</a></li> 
		       	<li><a href="#">PHP a Excel</a></li> 
		  	</ul> 
		</li> -->
	</ul> 
</header>