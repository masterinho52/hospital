<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adultos extends CI_Controller {

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
		$this->load->view('adulto.php',$output);	
	}

	function index()
	{
		try{
			/* This is only for the autocompletion */
			$crud = new grocery_CRUD();

			$crud->set_table('tbl_adulto');
			
			$crud->set_subject('Adulto');
			
			$crud->columns('cedula_adulto', 'nombre_adulto', 'apellido_adulto', 'sexo_adulto', 'fechan_adulto', 'fechai_adulto', 'telefono_adulto', 'id_usuario', 'fregistro_adulto');
			
			$crud->display_as('cedula_adulto', 'Cedula');
			$crud->display_as('nombre_adulto', 'Nombres');
			$crud->display_as('apellido_adulto', 'Apellidos');
			$crud->display_as('sexo_adulto', 'Sexo');
			$crud->display_as('lugarn_adulto', 'Lugar de Nacimiento');
			$crud->display_as('fechan_adulto', 'Fecha de Nacimiento');
			$crud->display_as('fechai_adulto', 'Fecha de Ingreso');
			$crud->display_as('direccion_adulto', 'Direccion');
			$crud->display_as('telefono_adulto', 'Telefono');
			$crud->display_as('id_usuario', 'Usuario');
			$crud->display_as('fregistro_adulto', 'Fecha de Registro');
			
			$crud->fields('cedula_adulto', 'nombre_adulto', 'apellido_adulto', 'sexo_adulto', 'lugarn_adulto', 'fechan_adulto', 'fechai_adulto', 'direccion_adulto', 'telefono_adulto', 'id_usuario');
			
			$crud->set_rules('cedula_personal', 'Cedula del Adulto', 'required|numeric');
			$crud->set_rules('nombre_personal', 'Nombres del Adulto', 'required|alpha_space');
			$crud->set_rules('apellido_personal', 'Apellidos del Adulto', 'required|alpha_space');
			$crud->set_rules('sexo_adulto', 'Sexo del Adulto', 'required');
			$crud->set_rules('fechan_adulto', 'Fecha de Nacimiento del Adulto', 'required');
			$crud->set_rules('fechai_adulto', 'Fecha de Ingreso del Adulto', 'required');
			$crud->set_rules('telefono_adulto', 'Telefono del Adulto', 'required|numeric');
			
			$crud->set_relation('id_usuario', 'tbl_usuario', 'nombre_usuario');

			$output = $crud->render();
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
}