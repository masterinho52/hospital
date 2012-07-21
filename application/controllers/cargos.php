<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cargos extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->helper('url');
		
		$this->load->library('grocery_CRUD');	
	}
	
	function _example_output($output = null)
	{
		$this->load->view('cargo.php',$output);	
	}

	function index()
	{
		try{
			/* This is only for the autocompletion */
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('tbl_cargo');
			$crud->set_subject('Cargo');
			$crud->display_as('id_cargo','Cargo');
			$crud->set_relation('id_cargo','tbl_cargo','nombre_cargo');
			$crud->required_fields('nombre_cargo');
			$crud->set_rules('nombre_cargo', 'Nombre del Cargo', 'alpha_space');
			/*$crud->columns('nombre_cargo', 'nombre_usuario', 'fregistro_cargo');*/
			
			$output = $crud->render();
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
}