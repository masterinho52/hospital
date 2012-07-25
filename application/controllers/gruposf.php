<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gruposf extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->library('session');
		//$this->load->library('Form_validation');
		//$this->load->library('grocery_CRUD');

		if (!$this->session->userdata("logged_in")){
			redirect('/');
		}

		$this->load->database();
		$this->load->helper('url');
		
		$this->load->library('grocery_CRUD');	
	}
	
	function _example_output($output = null)
	{
		$this->load->view('grupof.php',$output);	
	}

	function index()
	{
		try{
			/* This is only for the autocompletion */
			$crud = new grocery_CRUD();

			$crud->set_table('tbl_grupo_familiar');
			
			$crud->set_subject('Grupo Familiar');
			
			$crud->columns('apellido_grupo', 'nombre_grupo', 'cedula_grupo', 'telefono_grupo', 'representante_grupo', 'parentesco_grupo', 'id_adulto', 'id_usuario', 'fregistro_grupo');
			
			$crud->display_as('cedula_grupo', 'Cedula');
			$crud->display_as('nombre_grupo', 'Nombres');
			$crud->display_as('apellido_grupo', 'Apellidos');
			$crud->display_as('direccion_grupo', 'Direccion');
			$crud->display_as('telefono_grupo', 'Telefono');
			$crud->display_as('representante_grupo', 'Representante');
			$crud->display_as('parentesco_grupo', 'Parentesco');
			$crud->display_as('id_adulto', 'Adulto');
			$crud->display_as('id_usuario', 'Usuario');
			$crud->display_as('fregistro_adulto', 'Fecha de Registro');
			
			$crud->fields('cedula_grupo', 'nombre_grupo', 'apellido_grupo', 'direccion_grupo', 'telefono_grupo', 'representante_grupo', 'parentesco_grupo', 'id_adulto', 'id_usuario');
			
			$crud->set_rules('cedula_grupo', 'Cedula del Grupo Familiar', 'required|numeric');
			$crud->set_rules('nombre_grupo', 'Nombres del Grupo Familiar', 'required|alpha_space');
			$crud->set_rules('apellido_grupo', 'Apellidos del Grupo Familiar', 'required|alpha_space');
			$crud->set_rules('telefono_grupo', 'Telefono del Grupo Familiar', 'required|numeric');
			$crud->set_rules('representante_grupo', 'Nombre del Representante del Grupo Familiar', 'required|alpha_space');
			$crud->set_rules('id_adulto', 'Nombre del Adulto', 'required');
			$crud->set_rules('id_usuario', 'Nombre del Uusuario', 'required');
			
			$crud->set_relation('id_adulto', 'tbl_adulto', '{cedula_adulto} - {nombre_adulto} {apellido_adulto}');
			$crud->set_relation('id_usuario', 'tbl_usuario', 'nombre_usuario');

			$crud->order_by('apellido_grupo','ASC');

			$output = $crud->render();
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
}