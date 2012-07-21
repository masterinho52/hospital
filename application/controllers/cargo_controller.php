<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cargo_controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->helper('url');
		
		$this->load->library('grocery_CRUD');	
	}
	
	function _example_output($output = null)
	{
		$this->load->view('cargo_view.php',$output);	
	}

	function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
		try{
			/* This is only for the autocompletion */
			$crud = new grocery_CRUD();

			$crud->set_table('tbl_cargo');
			$crud->set_subject('Cargo');
			$crud->required_fields('nombre_cargo');
			$crud->set_rules('nombre_cargo', 'Nombre del Cargo', 'alpha_space');
			$crud->columns('nombre_cargo', 'nombre_usuario', 'fregistro_cargo');
			
			$output = $crud->render();
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
}