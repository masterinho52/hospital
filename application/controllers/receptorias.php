<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Receptorias extends CI_Controller {

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
		$this->load->view('receptoria_view.php',$output);	
	}

	function index() {
		try {
			/* This is only for the autocompletion */
			$crud = new grocery_CRUD();

			$crud->set_table('tbl_receptoria');
			
			$crud->set_subject('Informe de Receptoría');
			
			$crud->columns('id_adulto', 'fecha_receptoria', 'referido_receptoria', 'a_receptoria', 'id_usuario', 'fregistro_receptoria');
			
			$crud->display_as('id_adulto', 'Adulto');
			$crud->display_as('fecha_receptoria', 'Fecha y Hora');
			$crud->display_as('referido_receptoria', 'Referido por');
			$crud->display_as('a_receptoria', 'A');
			$crud->display_as('asunto_receptoria', 'Asunto');
			$crud->display_as('vivienda_receptoria', 'Condiciones de la Vivienda');
			$crud->display_as('profesion_receptoria', 'Profesión del Jefe de la Flia');
			$crud->display_as('madre_receptoria', 'Nivel de la Madre');
			$crud->display_as('fuente_receptoria', 'Fuente de Ingresos');
			$crud->display_as('sintesis_receptoria', 'Sintesis del Caso');
			$crud->display_as('diagnostico_receptoria', 'Diagnóstico Social');
			$crud->display_as('gestiones_receptoria', 'Gestiones Realizadas');
			$crud->display_as('vobo_receptoria', 'Elaborado por');
			$crud->display_as('id_personal', 'Personal');
			$crud->display_as('id_usuario', 'Registrado por');
			$crud->display_as('fregistro_receptoria', 'Fecha de Registro');

			$crud->fields('id_adulto', 'fecha_receptoria', 'referido_receptoria', 'a_receptoria', 'asunto_receptoria', 'vivienda_receptoria', 'profesion_receptoria', 'madre_receptoria', 'fuente_receptoria', 'sintesis_receptoria', 'diagnostico_receptoria', 'gestiones_receptoria', 'vobo_receptoria', 'id_personal', 'id_usuario');
			
			$crud->set_rules('id_adulto', 'Nombre del Adulto', 'required');
			$crud->set_rules('fecha_receptoria', 'Fecha y Hora', 'required');
			$crud->set_rules('referido_receptoria', 'Referido por', 'required|alpha_space');
			$crud->set_rules('a_receptoria', 'A', 'required|alpha_space');
			$crud->set_rules('asunto_receptoria', 'Asunto de la Receptoría', 'required|alpha_space');
			$crud->set_rules('vivienda_receptoria', 'Condiciones de la Vivienda', 'required');
			$crud->set_rules('profesion_receptoria', 'Profesión del Jefe de la Familia', 'required');
			$crud->set_rules('madre_receptoria', 'Nivel de la Madre', 'required');
			$crud->set_rules('fuente_receptoria', 'Fuente de Ingresos de la Familia', 'required');
			$crud->set_rules('sintesis_receptoria', 'Sintesis del Caso', 'required|alpha_space');
			$crud->set_rules('diagnositco_receptoria', 'Diagnóstico Social y/o Médico', 'required|alpha_space');
			$crud->set_rules('gestiones_receptoria', 'Gestiones Realizadas', 'required|alpha_space');
			$crud->set_rules('vobo_receptoria', 'Receptoria por', 'required|alpha_space');
			$crud->set_rules('id_personal', 'Nombre del Personal', 'required');
			$crud->set_rules('id_usuario', 'Nombre del Usuario', 'required');

			$crud->set_relation('id_adulto', 'tbl_adulto', '{apellido_adulto} {nombre_adulto} - {cedula_adulto}');
			$crud->set_relation('id_personal', 'tbl_personal', '{apellido_personal} {nombre_personal} - {cedula_personal}');
			$crud->set_relation('id_usuario', 'tbl_usuario', 'nombre_usuario');

			$crud->order_by('apellido_adulto, nombre_adulto','ASC');
			$crud->unset_texteditor('sintesis_receptoria','full_text');
			$crud->unset_texteditor('diagnostico_receptoria','full_text');
			$crud->unset_texteditor('gestiones_receptoria','full_text');

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
    	$post_array['referido_receptoria'] = strtoupper($post_array['referido_receptoria']);
    	$post_array['a_receptoria'] = strtoupper($post_array['a_receptoria']);
    	$post_array['asunto_receptoria'] = strtoupper($post_array['asunto_receptoria']);
    	$post_array['sintesis_receptoria'] = strtoupper($post_array['sintesis_receptoria']);
    	$post_array['diagnostico_receptoria'] = strtoupper($post_array['diagnostico_receptoria']);
    	$post_array['gestiones_receptoria'] = strtoupper($post_array['gestiones_receptoria']);
    	$post_array['vobo_receptoria'] = strtoupper($post_array['vobo_receptoria']);
    	// Devuelve el arreglo para Guardar
    	return $post_array;
    }	
}