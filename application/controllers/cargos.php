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

			$crud->set_table('tbl_cargo');
			$crud->set_subject('Cargo');
			$crud->columns('nombre_cargo', 'id_usuario', 'fregistro_cargo');
			$crud->display_as('id_usuario','Usuario');
			$crud->display_as('nombre_cargo','Cargo');
			$crud->display_as('fregistro_cargo','Fecha de Registro');
			$crud->fields('nombre_cargo','id_usuario');
			$crud->set_rules('nombre_cargo', 'Nombre del Cargo', 'required|alpha_space');
			$crud->set_rules('id_usuario', 'Nombre del Usuario', 'required');
			
			$crud->set_relation('id_usuario','tbl_usuario','nombre_usuario');

			$output = $crud->render();
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
}