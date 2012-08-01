<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Visitantes extends CI_Controller {

	function __construct() {
		parent::__construct();
		
		$this->load->database();
		$this->load->helper('url');
		
		$this->load->library('grocery_CRUD');	
	}
	
	function _example_output($output = null) {
		$this->load->view('visitante.php',$output);	
	}

	function index() {
		try {
			/* This is only for the autocompletion */
			$crud = new grocery_CRUD();

			$crud->set_table('tbl_adulto');
			
			$crud->columns('fechai_adulto', 'id_adulto', 'apellido_adulto', 'nombre_adulto', 'cedula_adulto', 'fechan_adulto', 'telefono_adulto', 'id_usuario', 'fregistro_adulto');
			
			$crud->display_as('id_adulto', 'Codigo');
			$crud->display_as('cedula_adulto', 'Cedula');
			$crud->display_as('nombre_adulto', 'Nombres');
			$crud->display_as('apellido_adulto', 'Apellidos');
			$crud->display_as('fechan_adulto', 'Fecha de Nacimiento');
			$crud->display_as('fechai_adulto', 'Fecha de Ingreso');
			$crud->display_as('telefono_adulto', 'Telefono');
			$crud->display_as('id_usuario', 'Registrado por');
			$crud->display_as('fregistro_adulto', 'Fecha de Registro');

			$crud->set_relation('id_usuario', 'tbl_usuario', 'nombre_usuario');

			$crud->order_by('fechai_adulto','DESC');

			$crud->unset_add();
			$crud->unset_edit();
			$crud->unset_delete();

			$output = $crud->render();
			
			$this->_example_output($output);
			
		} catch(Exception $e) {
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
}