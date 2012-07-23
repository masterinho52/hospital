<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Departamentos extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->library('session');
		//$this->load->library('Form_validation');
		//$this->load->library('grocery_CRUD');

		if (!$this->session->userdata("logged_in")){
			redirect('/');
		}
		
		$this->load->database();
		$this->load->helper('url');
		
		$this->load->library('grocery_CRUD');	
	}
	
	function _example_output($output = null)
	{
		$this->load->view('departamento.php',$output);	
	}

	function index()
	{
		try{
			/* This is only for the autocompletion */
			$crud = new grocery_CRUD();

			$crud->set_table('tbl_departamento');
			
			$crud->set_subject('Departamento');
			
			$crud->columns('nombre_departamento', 'id_usuario', 'fregistro_departamento');
			
			$crud->display_as('nombre_departamento', 'Departamento');
			$crud->display_as('id_usuario', 'Usuario');
			$crud->display_as('fregistro_departamento', 'Fecha de Registro');
			
			$crud->fields('nombre_departamento', 'id_usuario');
			
			$crud->set_rules('nombre_departamento', 'Nombre del Departamento', 'required|alpha_space');
			$crud->set_rules('id_usuario', 'Nombre del Usuario', 'required');
			
			$crud->set_relation('id_usuario', 'tbl_usuario', 'nombre_usuario');

			$output = $crud->render();
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
}