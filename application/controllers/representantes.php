<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Representantes extends CI_Controller {

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
		$this->load->view('representante.php',$output);	
	}

	function index() {
		try {
			/* This is only for the autocompletion */
			$crud = new grocery_CRUD();

			$crud->set_table('tbl_representante');
			
			$crud->set_subject('Representante');
			
			$crud->columns('apellido_representante', 'nombre_representante', 'cedula_representante', 'fechan_representante', 'telefono_representante', 'parentesco_representante', 'profesion_representante', 'id_usuario', 'fregistro_representante');
			
			$crud->display_as('cedula_representante', 'Cédula');
			$crud->display_as('nombre_representante', 'Nombres');
			$crud->display_as('apellido_representante', 'Apellidos');
			$crud->display_as('sexo_representante', 'Sexo');
			$crud->display_as('lugarn_representante', 'Lugar de Nacimiento');
			$crud->display_as('estadocivil_representante', 'Estado Civil');
			$crud->display_as('fechan_representante', 'Fecha de Nacimiento');
			$crud->display_as('direccion_representante', 'Dirección');
			$crud->display_as('telefono_representante', 'Teléfono');
			$crud->display_as('profesion_representante', 'Profesión');
			$crud->display_as('parentesco_representante', 'Parentesco');
			$crud->display_as('id_usuario', 'Registrado por');
			$crud->display_as('fregistro_representante', 'Fecha de Registro');

			$crud->fields('cedula_representante', 'nombre_representante', 'apellido_representante', 'sexo_representante', 'estadocivil_representante', 'lugarn_representante', 'fechan_representante', 'direccion_representante', 'telefono_representante',  'parentesco_representante', 'profesion_representante', 'id_usuario');
			
			$crud->set_rules('cedula_representante', 'Cédula del Representante', 'required|numeric');
			$crud->set_rules('nombre_representante', 'Nombres del Representante', 'required|alpha_space');
			$crud->set_rules('apellido_representanteo', 'Apellidos del Representante', 'required|alpha_space');
			$crud->set_rules('estadocivil_representante', 'Estado Civil del Representante', 'required');
			$crud->set_rules('lugarn_representante', 'Lugar de Nacimiento del Representante', 'required|alpha_space');
			$crud->set_rules('fechan_representante', 'Fecha de Nacimiento del Representante', 'required');
			$crud->set_rules('direccion_representante', 'Dirección del Representante', 'required');
			$crud->set_rules('sexo_representante', 'Sexo del Representante', 'required|alpha_space');
			$crud->set_rules('profesion_representante', 'Profesión del Representante', 'required');
			$crud->set_rules('parentesco_representante', 'Parentesco del Representante', 'required');
			$crud->set_rules('telefono_adulto', 'Teléfono del Representante', 'required|numeric');
			$crud->set_rules('id_usuario', 'Nombre del Usuario', 'required');

			$crud->set_relation('id_usuario', 'tbl_usuario', 'nombre_usuario');

			$crud->order_by('apellido_representante, nombre_representante','ASC');

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
    	$post_array['cedula_representante'] = strtoupper($post_array['cedula_representante']);
    	$post_array['nombre_representante'] = strtoupper($post_array['nombre_representante']);
    	$post_array['apellido_representante'] = strtoupper($post_array['apellido_representante']);
    	$post_array['direccion_representante'] = strtoupper($post_array['direccion_representante']);
    	$post_array['lugarn_representante'] = strtoupper($post_array['lugarn_representante']);
    	$post_array['profesion_representante'] = strtoupper($post_array['profesion_representante']);
    	// Devuelve el arreglo para Guardar
    	return $post_array;
    }	
}