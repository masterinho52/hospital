<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Impresiones extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		
		//inicio sesion
		$this->load->library('session');

		if (!$this->session->userdata("logged_in")){
			redirect('/');
		}
		//fin sesion
		$this->load->database();
		$this->load->helper('url');	
	}

	public function acta() {
		$this->load->view('acta.php');	
	}

	public function acta_print() {
		$this->load->view('acta_imprimir.php');	
	}
}