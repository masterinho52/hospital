<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		//inicio sesion
		$this->load->library('session');
		//$this->load->library('Form_validation');
		//$this->load->library('grocery_CRUD');

		if (!$this->session->userdata("logged_in")){
			redirect('/');
		}
		//fin sesion

		$this->load->database();
		$this->load->helper('url');
		
		$this->load->library('grocery_CRUD');	
	}
	
	function _example_output($output = null)
	{
		$this->load->view('usuarios.php',$output);
	}

	function add_field_callback_1()
	{
	    return '+30 <input type="text" maxlength="50" value="" name="phone" style="width:462px">';
	}

	function index()
	{
		try{
			/* This is only for the autocompletion */
			$crud = new grocery_CRUD();

			$crud->set_table('tbl_usuario');
			
			$crud->set_subject('Usuario');
						
			$crud->columns('nombre_usuario', 'cedula_usuario', 'tipo_usuario', 'login');
			
			$crud->display_as('cedula_usuario', 'Cédula');
			$crud->display_as('nombre_usuario', 'Nombre Completo');
			$crud->display_as('tipo_usuario', 'Nivel de Usuario');
			$crud->display_as('login', 'Login');
			$crud->display_as('password', 'Password');
			
			$crud->fields('cedula_usuario', 'nombre_usuario', 'tipo_usuario', 'login', 'password');

			$crud->set_rules('cedula_usuario', 'Cédula del Usuario', 'required');
			$crud->set_rules('nombre_usuario', 'Nombre del Usuario', 'required|alpha_space');
			$crud->set_rules('login', 'Login del Usuario', 'required|alpha_space');
			$crud->set_rules('password', 'Password del Usuario', 'required|alpha_space');
			
			$crud->order_by('nombre_usuario','ASC');
			
			$crud->callback_add_field('phone',array($this,'add_field_callback_1'));

			if ($this->session->userdata("tipo_usuario")=='Supervisor') {
				$crud->unset_delete();
			}
			if ($this->session->userdata("tipo_usuario")=='Usuario') {
				$crud->unset_edit();
				$crud->unset_delete();
			}
			
			$output = $crud->render();
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
}