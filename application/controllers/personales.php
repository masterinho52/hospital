<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Personales extends CI_Controller {

	function __construct() {
		parent::__construct();
		
		$this->load->library('session');
		//$this->load->library('Form_validation');
		//$this->load->library('grocery_CRUD');

		if (!$this->session->userdata("logged_in")) {
			redirect('/');
		}

		$this->load->database();
		$this->load->helper('url');
		
		$this->load->library('grocery_CRUD');	
	}
	
	function _example_output($output = null) {
		$this->load->view('personal.php',$output);	
	}

	function index() {
		try {
			/* This is only for the autocompletion */
			$crud = new grocery_CRUD();

			$crud->set_table('tbl_personal');
			
			$crud->set_subject('Personal');
			
			$crud->columns('apellido_personal', 'nombre_personal', 'cedula_personal',  'instruccion_personal', 'id_cargo', 'id_departamento', 'id_usuario', 'fregistro_personal');
			
			$crud->display_as('cedula_personal', 'Cédula');
			$crud->display_as('nombre_personal', 'Nombres');
			$crud->display_as('apellido_personal', 'Apellidos');
			$crud->display_as('instruccion_personal', 'Grado de Instrucción');
			$crud->display_as('id_cargo', 'Cargo');
			$crud->display_as('id_departamento', 'Departamento');
			$crud->display_as('id_usuario', 'Registrado por');
			$crud->display_as('fregistro_personal', 'Fecha de Registro');
			
			$crud->fields('cedula_personal', 'nombre_personal', 'apellido_personal', 'instruccion_personal', 'id_cargo', 'id_departamento', 'id_usuario');
			
			$crud->set_rules('cedula_personal', 'Cédula del Personal', 'required|numeric');
			$crud->set_rules('nombre_personal', 'Nombres del Personal', 'required|alpha_space');
			$crud->set_rules('apellido_personal', 'Apellidos del Personal', 'required|alpha_space');
			$crud->set_rules('instruccion_personal', 'Grado de Instrucción del Personal', 'required');
			$crud->set_rules('id_cargo', 'Nombre del Cargo', 'required');
			$crud->set_rules('id_departamento', 'Nombre del Departamento', 'required');
			$crud->set_rules('id_usuario', 'Nombre del Usuario', 'required');
			
			$crud->set_relation('id_cargo', 'tbl_cargo', 'nombre_cargo');
			$crud->set_relation('id_departamento', 'tbl_departamento', 'nombre_departamento');
			$crud->set_relation('id_usuario', 'tbl_usuario', 'nombre_usuario');

			$crud->order_by('apellido_personal, nombre_personal','ASC');

			if ($this->session->userdata("tipo_usuario")=='Supervisor') {
				$crud->unset_delete();
			}
			if ($this->session->userdata("tipo_usuario")=='Usuario') {
				$crud->unset_edit();
				$crud->unset_delete();
			}

			// Función a ejecutarse antes de Guardar y Modificar modificac el texto en mayuscula 
			$crud->callback_before_insert(array($this,'valid_uppercase'));
    		$crud->callback_before_update(array($this,'valid_uppercase'));

			$output = $crud->render();
			
			$this->_example_output($output);
			
		} catch(Exception $e) {
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
	// Función que Guardarla en mayuscula
	function valid_uppercase($post_array, $primary_key = null) {
    	$post_array['cedula_personal'] = strtoupper($post_array['cedula_personal']);
    	$post_array['nombre_personal'] = strtoupper($post_array['nombre_personal']);
    	$post_array['apellido_personal'] = strtoupper($post_array['apellido_personal']);
    	// Devuelve el arreglo para Guardar
    	return $post_array;
    }	
}