<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cierres extends CI_Controller {

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
		$this->load->view('cierre_view.php',$output);	
	}

	function index() {
		try {
			/* This is only for the autocompletion */
			$crud = new grocery_CRUD();

			$crud->set_table('tbl_cierre');
			
			$crud->set_subject('Informe de Cierre');
			
			$crud->columns('id_adulto', 'fecha_cierre', 'id_personal', 'id_usuario', 'fregistro_cierre');
			
			$crud->display_as('id_adulto', 'Adulto');
			$crud->display_as('id_personal', 'Personal');
			$crud->display_as('fecha_cierre', 'Fecha de Cierre');
			$crud->display_as('lapso_cierre', 'Lapso de Atención');
			$crud->display_as('sintesis_cierre', 'Sintesis del Caso');
			$crud->display_as('motivo_cierre', 'Motico de Cierre');
			$crud->display_as('id_usuario', 'Registrado por');
			$crud->display_as('fregistro_cierre', 'Fecha de Registro');

			$crud->fields('id_adulto', 'id_personal', 'lapso_cierre', 'sintesis_cierre', 'motivo_cierre', 'fecha_cierre', 'id_usuario');
			
			$crud->set_rules('id_adulto', 'Nombre del Adulto', 'required');
			$crud->set_rules('id_personal', 'Nombre del Personal', 'required');
			$crud->set_rules('lapso_cierre', 'Lapso de Atención del Cierre', 'required|alpha_space');
			$crud->set_rules('sintesis_cierre', 'Sintesis del Caso del Cierre', 'required|alpha_space');
			$crud->set_rules('motivo_cierre', 'Motivo del Cierre', 'required|alpha_space');
			$crud->set_rules('fecha_cierre', 'Fecha del Cierre', 'required');
			$crud->set_rules('id_usuario', 'Nombre del Usuario', 'required');

			$crud->set_relation('id_adulto', 'tbl_adulto', '{apellido_adulto} {nombre_adulto} - {cedula_adulto}');
			$crud->set_relation('id_personal', 'tbl_personal', '{apellido_personal} {nombre_personal} - {cedula_personal}');
			$crud->set_relation('id_usuario', 'tbl_usuario', 'nombre_usuario');

			$crud->order_by('apellido_adulto, nombre_adulto','ASC');
			$crud->unset_texteditor('sintesis_cierre','full_text');
			$crud->unset_texteditor('motivo_cierre','full_text');

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
    	$post_array['lapso_cierre'] = strtoupper($post_array['lapso_cierre']);
    	$post_array['sintesis_cierre'] = strtoupper($post_array['sintesis_cierre']);
    	$post_array['motivo_cierre'] = strtoupper($post_array['motivo_cierre']);
    	// Devuelve el arreglo para Guardar
    	return $post_array;
    }	
}