<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gruposf extends CI_Controller {

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
		$this->load->view('grupof.php',$output);	
	}

	function index() {
		try {
			/* This is only for the autocompletion */
			$crud = new grocery_CRUD();

			$crud->set_table('tbl_grupo_familiar');
			
			$crud->set_subject('Grupo Familiar');
			
			$crud->columns('apellido_grupo', 'nombre_grupo', 'cedula_grupo', 'fechan_grupo', 'instruccion_grupo', 'telefono_grupo', 'parentesco_grupo', 'id_adulto', 'id_usuario', 'fregistro_grupo');
			
			$crud->display_as('cedula_grupo', 'Cédula');
			$crud->display_as('nombre_grupo', 'Nombres');
			$crud->display_as('apellido_grupo', 'Apellidos');
			$crud->display_as('fechan_grupo', 'Fecha de Nacimiento');
			$crud->display_as('sexo_grupo', 'Sexo');
			$crud->display_as('instruccion_grupo', 'Grado de Instrucción');
			$crud->display_as('direccion_grupo', 'Dirección');
			$crud->display_as('telefono_grupo', 'Teléfono');
			$crud->display_as('parentesco_grupo', 'Parentesco');
			$crud->display_as('ocupacion_grupo', 'Ocupación');
			$crud->display_as('ingreso_grupo', 'Ingreso');
			$crud->display_as('aporte_grupo', 'Aporte');
			$crud->display_as('id_adulto', 'Adulto');
			$crud->display_as('id_usuario', 'Registrado por');
			$crud->display_as('fregistro_adulto', 'Fecha de Registro');
			
			$crud->fields('cedula_grupo', 'nombre_grupo', 'apellido_grupo', 'fechan_grupo', 'instruccion_grupo', 'direccion_grupo', 'telefono_grupo', 'parentesco_grupo', 'ocupacion_grupo', 'ingreso_grupo', 'aporte_grupo', 'id_adulto', 'id_usuario');
			
			$crud->set_rules('cedula_grupo', 'Cédula del Grupo Familiar', 'required|numeric');
			$crud->set_rules('nombre_grupo', 'Nombres del Grupo Familiar', 'required|alpha_space');
			$crud->set_rules('apellido_grupo', 'Apellidos del Grupo Familiar', 'required|alpha_space');
			$crud->set_rules('fechan_grupo', 'Fecha de Nacimiento del Grupo Familiar', 'required');
			$crud->set_rules('sexo_grupo', 'Sexo del Grupo Familiar', 'required');
			$crud->set_rules('instruccion_grupo', 'Grado de Instrucción del Grupo Familiar', 'required');
			$crud->set_rules('direccion_grupo', 'Dirección del Grupo Familiar', 'required');
			$crud->set_rules('telefono_grupo', 'Teléfono del Grupo Familiar', 'required|numeric');
			$crud->set_rules('ocupacion_grupo', 'Ocupación del Grupo Familiar', 'required');
			$crud->set_rules('ingreso_grupo', 'Ingreso del Grupo Familiar', 'required');
			$crud->set_rules('aporte_grupo', 'Aporte del Grupo Familiar', 'required|alpha_space');
			$crud->set_rules('id_adulto', 'Nombre del Adulto', 'required');
			$crud->set_rules('id_usuario', 'Nombre del Usuario', 'required'); 
			
			$crud->set_relation('id_adulto', 'tbl_adulto', '{apellido_adulto} {nombre_adulto} - {cedula_adulto}');
			$crud->set_relation('id_usuario', 'tbl_usuario', 'nombre_usuario');

			$crud->order_by('apellido_grupo','ASC');

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
    	$post_array['cedula_grupo'] = strtoupper($post_array['cedula_grupo']);
    	$post_array['nombre_grupo'] = strtoupper($post_array['nombre_grupo']);
    	$post_array['apellido_grupo'] = strtoupper($post_array['apellido_grupo']);
    	$post_array['direccion_grupo'] = strtoupper($post_array['direccion_grupo']);
    	$post_array['aporte_grupo'] = strtoupper($post_array['aporte_grupo']);
    	$post_array['parentesco_grupo'] = strtoupper($post_array['parentesco_grupo']);
    	// Devuelve el arreglo para Guardar
    	return $post_array;
    }	
}