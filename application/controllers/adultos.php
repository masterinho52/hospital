// <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adultos extends CI_Controller {

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
		$this->load->view('adulto.php',$output);	
	}

	function index() {
		try {
			/* This is only for the autocompletion */
			$crud = new grocery_CRUD();

			$crud->set_table('tbl_adulto');
			
			$crud->set_subject('Adulto');
			
			$crud->columns('apellido_adulto', 'nombre_adulto', 'cedula_adulto', 'sexo_adulto', 'fechan_adulto', 'fechai_adulto', 'telefono_adulto', 'id_usuario', 'fregistro_adulto');
			
			$crud->display_as('cedula_adulto', 'Cédula');
			$crud->display_as('nombre_adulto', 'Nombres');
			$crud->display_as('apellido_adulto', 'Apellidos');
			$crud->display_as('sexo_adulto', 'Sexo');
			$crud->display_as('lugarn_adulto', 'Lugar de Nacimiento');
			$crud->display_as('fechan_adulto', 'Fecha de Nacimiento');
			$crud->display_as('fechai_adulto', 'Fecha de Ingreso');
			$crud->display_as('direccion_adulto', 'Direccion');
			$crud->display_as('telefono_adulto', 'Telefono');
			$crud->display_as('id_usuario', 'Registrado por');
			$crud->display_as('fregistro_adulto', 'Fecha de Registro');

			$crud->fields('cedula_adulto', 'nombre_adulto', 'apellido_adulto', 'sexo_adulto', 'lugarn_adulto', 'fechan_adulto', 'fechai_adulto', 'direccion_adulto', 'telefono_adulto', 'id_usuario');
			
			$crud->set_rules('cedula_personal', 'Cedula del Adulto', 'required|numeric');
			$crud->set_rules('nombre_personal', 'Nombres del Adulto', 'required|alpha_space');
			$crud->set_rules('apellido_personal', 'Apellidos del Adulto', 'required|alpha_space');
			$crud->set_rules('sexo_adulto', 'Sexo del Adulto', 'required');
			$crud->set_rules('fechan_adulto', 'Fecha de Nacimiento del Adulto', 'required');
			$crud->set_rules('fechai_adulto', 'Fecha de Ingreso del Adulto', 'required');
			$crud->set_rules('telefono_adulto', 'Telefono del Adulto', 'required|numeric');
			
			$crud->set_relation('id_usuario', 'tbl_usuario', 'nombre_usuario');

			$crud->order_by('apellido_adulto','ASC');
			
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
    	$post_array['cedula_adulto'] = strtoupper($post_array['cedula_adulto']);
    	$post_array['nombre_adulto'] = strtoupper($post_array['nombre_adulto']);
    	$post_array['apellido_adulto'] = strtoupper($post_array['apellido_adulto']);
    	$post_array['lugarn_adulto'] = strtoupper($post_array['lugarn_adulto']);
    	$post_array['direccion_adulto'] = strtoupper($post_array['direccion_adulto']);
    	// Devuelve el arreglo para Guardar
    	return $post_array;
    }	
}