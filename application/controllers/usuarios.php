<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		// Carga de Librería para Manejar las Sesiones
		$this->load->library('session');
		//$this->load->library('Form_validation');
		//$this->load->library('grocery_CRUD');

		// Verifica si hay un usuario Logueado, es decir, si hay una sesión abierta
		if (!$this->session->userdata("logged_in")){
			// Si no es correcto, redirige al usuario hasta la página principal
			redirect('/');
		}
		//fin sesion

		// Carga de librerías necesarias para manejar el módulo
		$this->load->database();
		$this->load->helper('url');
		
		$this->load->library('grocery_CRUD');	
	}
	
	function index()
	{
		try{
			// Función principal

			// Configuración de objetos
			$crud = new grocery_CRUD();

			// Tabla de Base de Datos
			$crud->set_table('tbl_usuario');
			
			// Definición del Indivíduo
			$crud->set_subject('Usuario');
			
			// Campos a Mostrar en la Lista
			$crud->columns('nombre_usuario', 'cedula_usuario', 'tipo_usuario', 'login');
			
			// Ordenamiento de la Lista
			$crud->order_by('nombre_usuario','ASC');

			// Alias para desplegar los campos
			$crud->display_as('cedula_usuario', 'Cédula');
			$crud->display_as('nombre_usuario', 'Nombre Completo');
			$crud->display_as('tipo_usuario', 'Nivel de Usuario');
			$crud->display_as('login', 'Login');
			$crud->display_as('password', 'Password');
			$crud->display_as('password_confirmacion', 'Corfirme su Clave');
			

			// Cambiar tipo de objeto para la Clave
			$crud->change_field_type('password','password');
			$crud->change_field_type('password_confirmacion','password');

			// Definición de campos que se van a mostrar en Guardar y Modificar
			$crud->fields('cedula_usuario', 'nombre_usuario', 'tipo_usuario', 'login', 'password', 'password_confirmacion');

			// Reglas de Validación
			$crud->set_rules('cedula_usuario', 'Cédula del Usuario', 'required');
			$crud->set_rules('nombre_usuario', 'Nombre del Usuario', 'required|alpha_space');
			$crud->set_rules('login', 'Login del Usuario', 'required|alpha_space');
			$crud->set_rules('password', 'Password del Usuario', 'required|alpha_dash|matches[password_confirmacion]');
			$crud->set_rules('password_confirmacion', 'Campo de Confirmación', 'required|alpha_dash|matches[password]');
			
			// Permisos de usuario
			if (($this->session->userdata("tipo_usuario")=='Supervisor') or ($this->session->userdata("tipo_usuario")=='Usuario')) {
				$crud->unset_add();
				$crud->unset_edit();
				$crud->unset_delete();
			}
			
			// Función a ejecutarse antes de Guardar y Modificar para Guardar la Clave en MD5
			$crud->callback_before_insert(array($this,'encrypt_password'));
			$crud->callback_before_update(array($this,'encrypt_password'));

			// Función a ejecutarse para que al momento de Agregar y Modificar el campo de Clave esté Vacío
			$crud->callback_edit_field('password',array($this,'set_password_input_to_empty'));
    		$crud->callback_add_field('password',array($this,'set_password_input_to_empty'));
			
			// Renderiza la Vista
			$output = $crud->render();
			
			// Llama a la función que va a mostrar la Vista
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
	// Función que muestra la Vista
	function _example_output($output = null)
	{
		$this->load->view('usuario.php',$output);
	}

	// Función que Encripta la Clave antes de Guardarla
	function encrypt_password($post_array, $primary_key = null)
    {
    	$this->load->helper('security');
    	$post_array['password'] = do_hash($post_array['password'], 'md5');
    	$post_array['password_confirmacion'] = do_hash($post_array['password_confirmacion'], 'md5');
    	$post_array['nombre_usuario'] = strtoupper($post_array['nombre_usuario']);
    	// Devuelve el arreglo para Guardar
    	return $post_array;
       
    }

    // Función a ejecutarse para que al momento de Agregar y Modificar el campo de Clave esté Vacío
    function set_password_input_to_empty() {
	    return "<input type='password' name='password' value='' />";
	}

}