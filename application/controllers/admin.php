<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		//$this->load->helper('form');
		$this->load->library('session');
		//$this->load->library('Form_validation');
		//$this->load->library('grocery_CRUD');

		if (!$this->session->userdata("logged_in")){
			redirect('/');
		}
	}
	public function index() {
		$this->load->view('admin');	
	}
}