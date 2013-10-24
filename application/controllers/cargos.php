<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cargos extends CI_Controller {

	function __construct() {
		parent::__construct();
		
		//inicio sesion
		$this->load->library('session');
		//$this->load->library('Form_validation');
		//$this->load->library('grocery_CRUD');

		if (!$this->session->userdata("logged_in")) {
			redirect('/');
		}
		//fin sesion

		$this->load->database();
		$this->load->helper('url');
		
		$this->load->library('grocery_CRUD');	
	}
	
	function _example_output($output = null) {
		$this->load->view('cargo.php',$output);
	}


	function index() {
		try {
			/* This is only for the autocompletion */
			$crud = new grocery_CRUD();

			$crud->set_table('tbl_cargo');
			
			$crud->set_subject('Cargo');
			
			$crud->columns('nombre_cargo', 'id_usuario', 'fregistro_cargo');
			
			$crud->display_as('nombre_cargo', 'Cargo');
			$crud->display_as('id_usuario', 'Registrado por');
			
			$crud->fields('nombre_cargo', 'id_usuario');

			$crud->set_rules('nombre_cargo', 'Nombre del Cargo', 'required|alpha_space');
			$crud->set_rules('id_usuario', 'Nombre del Usuario', 'required');
			
			$crud->set_relation('id_usuario', 'tbl_usuario', 'nombre_usuario');

			$crud->order_by('nombre_cargo','ASC');

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
    	$post_array['nombre_cargo'] = strtoupper($post_array['nombre_cargo']);
    	// Devuelve el arreglo para Guardar
    	return $post_array;
    }	
}