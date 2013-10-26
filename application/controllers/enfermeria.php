<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Enfermeria extends CI_Controller {

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
		$this->load->view('ingresos',$output);	
	}

	function ingresos() {
		try {
			$crud = new grocery_CRUD();

			$crud->set_table('tbl_ingreso');
			
			$crud->set_subject('Ingreso a Enfermería');
			$crud->set_relation('id_adulto', 'tbl_adulto', '{apellido_adulto} {nombre_adulto} - {cedula_adulto}');

			$crud->display_as('id_adulto', 'Adulto');
			$crud->display_as('fecha_ingreso', 'Fecha de Ingreso');
			$crud->display_as('diagnostico_ingreso', 'Diagnóstico');
			$crud->display_as('evaluacion_ingreso', 'Evaluación');
			$crud->display_as('cama_ingreso', 'Cama');

			$crud->set_rules('id_adulto', 'Adulto', 'required|numeric');
			$crud->set_rules('fecha_ingreso', 'Fecha de Ingreso', 'required');
			$crud->set_rules('diagnostico_ingreso', 'Diagnóstico de Ingreso', 'required');
			$crud->set_rules('evaluacion_ingreso', 'Evaluación de Ingreso', 'required');
			$crud->set_rules('cama_ingreso', 'Cama Asignada', 'required|alpha_space');
			
			$crud->order_by('fecha_ingreso','DESC');
			$crud->unset_texteditor('diagnostico_ingreso');
			$crud->unset_texteditor('evaluacion_ingreso');

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

	function tratamientos() {
		try {
			$crud = new grocery_CRUD();

			$crud->set_table('tbl_tratamiento');
			
			$crud->set_subject('Tratamiento');
			$crud->set_relation('id_ingreso', 'tbl_ingreso', '{cama_ingreso}');

			$crud->display_as('fechai','Fecha de Inicio');
			$crud->display_as('fechaf','Fecha de Término');
			$crud->display_as('via','Vía');
			$crud->display_as('id_ingreso','Cama');

			$crud->unset_fields('administrado_1','administrado_2','administrado_3');

			$crud->set_rules('id_ingreso','','required');
			$crud->set_rules('fechai','','required');
			$crud->set_rules('fechaf','','required');
			$crud->set_rules('medicamento','','required');
			$crud->set_rules('indicaciones','','required');
			$crud->set_rules('hora','','required');
			$crud->set_rules('via','','required');

			// $crud->order_by('fecha_ingreso','DESC');
			$crud->unset_texteditor('indicaciones');
			$crud->unset_texteditor('observaciones');
			$crud->unset_texteditor('hora');
			$crud->unset_texteditor('via');

			if ($this->session->userdata("tipo_usuario")=='Supervisor') {
				$crud->unset_delete();
			}
			if ($this->session->userdata("tipo_usuario")=='Usuario') {
				$crud->unset_edit();
				$crud->unset_delete();
			}

			// Función a ejecutarse antes de Guardar y Modificar modificac el texto en mayuscula 
			// $crud->callback_before_insert(array($this,'valid_uppercase'));
   //  		$crud->callback_before_update(array($this,'valid_uppercase'));
    		
			$output = $crud->render();
			
			$this->_example_output($output);
			
		} catch(Exception $e) {
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
	// Función que Guardarla en mayuscula
	function valid_uppercase($post_array, $primary_key = null) {
		
    	$post_array['diagnostico_ingreso'] = strtoupper($post_array['diagnostico_ingreso']);
    	$post_array['evaluacion_ingreso'] = strtoupper($post_array['evaluacion_ingreso']);
    	$post_array['cama_ingreso'] = strtoupper($post_array['cama_ingreso']);
    	// Devuelve el arreglo para Guardar
    	return $post_array;
    }

}