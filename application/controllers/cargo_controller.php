<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

<<<<<<< HEAD
class Cargo extends CI_Controller {
=======
class Cargo_controller extends CI_Controller {
>>>>>>> f969eee14c479926c39a8964b5d37276d5cfe82b

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
	
<<<<<<< HEAD
	// function offices()
	// {
	// 	$output = $this->grocery_crud->render();

	// 	$this->_example_output($output);
	// }
=======
	function offices()
	{
		$output = $this->grocery_crud->render();

		$this->_example_output($output);
	}
>>>>>>> f969eee14c479926c39a8964b5d37276d5cfe82b
	
	function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}	
	
	function offices_management()
	{
		try{
			/* This is only for the autocompletion */
			$crud = new grocery_CRUD();

			$crud->set_table('tbl_cargo');
			$crud->set_subject('Cargo');
			$crud->required_fields('nombre_cargo');
			$crud->set_rules('nombre_cargo', 'Nombre del Cargo', 'alpha_space');
			$crud->columns('nombre_cargo','fregistro_cargo');
			
			$output = $crud->render();
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
<<<<<<< HEAD
	// function employees_management()
	// {
	// 		$crud = new grocery_CRUD();

	// 		$crud->set_theme('datatables');
	// 		$crud->set_table('employees');
	// 		$crud->set_relation('officeCode','offices','city');
	// 		$crud->display_as('officeCode','Office City');
	// 		$crud->set_subject('Employee');
			
	// 		$crud->required_fields('lastName');
			
	// 		$crud->set_field_upload('file_url','assets/uploads/files');
			
	// 		$output = $crud->render();

	// 		$this->_example_output($output);
	// }
	
	// function customers_management()
	// {
	// 		$crud = new grocery_CRUD();

	// 		$crud->set_table('customers');
	// 		$crud->columns('customerName','contactLastName','phone','city','country','salesRepEmployeeNumber','creditLimit');
	// 		$crud->display_as('salesRepEmployeeNumber','from Employeer')
	// 			 ->display_as('customerName','Name')
	// 			 ->display_as('contactLastName','Last Name');
	// 		$crud->set_subject('Customer');
	// 		$crud->set_relation('salesRepEmployeeNumber','employees','{lastName} {firstName}');
			
	// 		$output = $crud->render();
			
	// 		$this->_example_output($output);
	// }	
	
	// function orders_management()
	// {
	// 		$crud = new grocery_CRUD();

	// 		$crud->set_relation('customerNumber','customers','{contactLastName} {contactFirstName}');
	// 		$crud->display_as('customerNumber','Customer');
	// 		$crud->set_table('orders');
	// 		$crud->set_subject('Order');
	// 		$crud->unset_add();
	// 		$crud->unset_delete();
			
	// 		$output = $crud->render();
			
	// 		$this->_example_output($output);
	// }
	
	// function products_management()
	// {
	// 		$crud = new grocery_CRUD();

	// 		$crud->set_table('products');
	// 		$crud->set_subject('Product');
	// 		$crud->unset_columns('productDescription');
	// 		$crud->callback_column('buyPrice',array($this,'valueToEuro'));
			
	// 		$output = $crud->render();
			
	// 		$this->_example_output($output);
	// }	
	
	// function valueToEuro($value, $row)
	// {
	// 	return $value.' &euro;';
	// }
	
	// function film_management()
	// {
	// 	$crud = new grocery_CRUD();
		
	// 	$crud->set_table('film');
	// 	$crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname','priority');
	// 	$crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
	// 	$crud->unset_columns('special_features','description','actors');
		
	// 	$crud->fields('title', 'description', 'actors' ,  'category' ,'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');
		
	// 	$output = $crud->render();
		
	// 	$this->_example_output($output);
	// }
=======
	function employees_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('employees');
			$crud->set_relation('officeCode','offices','city');
			$crud->display_as('officeCode','Office City');
			$crud->set_subject('Employee');
			
			$crud->required_fields('lastName');
			
			$crud->set_field_upload('file_url','assets/uploads/files');
			
			$output = $crud->render();

			$this->_example_output($output);
	}
	
	function customers_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('customers');
			$crud->columns('customerName','contactLastName','phone','city','country','salesRepEmployeeNumber','creditLimit');
			$crud->display_as('salesRepEmployeeNumber','from Employeer')
				 ->display_as('customerName','Name')
				 ->display_as('contactLastName','Last Name');
			$crud->set_subject('Customer');
			$crud->set_relation('salesRepEmployeeNumber','employees','{lastName} {firstName}');
			
			$output = $crud->render();
			
			$this->_example_output($output);
	}	
	
	function orders_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_relation('customerNumber','customers','{contactLastName} {contactFirstName}');
			$crud->display_as('customerNumber','Customer');
			$crud->set_table('orders');
			$crud->set_subject('Order');
			$crud->unset_add();
			$crud->unset_delete();
			
			$output = $crud->render();
			
			$this->_example_output($output);
	}
	
	function products_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('products');
			$crud->set_subject('Product');
			$crud->unset_columns('productDescription');
			$crud->callback_column('buyPrice',array($this,'valueToEuro'));
			
			$output = $crud->render();
			
			$this->_example_output($output);
	}	
	
	function valueToEuro($value, $row)
	{
		return $value.' &euro;';
	}
	
	function film_management()
	{
		$crud = new grocery_CRUD();
		
		$crud->set_table('film');
		$crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname','priority');
		$crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
		$crud->unset_columns('special_features','description','actors');
		
		$crud->fields('title', 'description', 'actors' ,  'category' ,'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');
		
		$output = $crud->render();
		
		$this->_example_output($output);
	}
>>>>>>> f969eee14c479926c39a8964b5d37276d5cfe82b
	
}