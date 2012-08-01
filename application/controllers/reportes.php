<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reportes extends CI_Controller {
	function __construct() {
		parent::__construct();
		
		$this->load->library('session');

		if (!$this->session->userdata("logged_in")) {
			redirect('/');
		}

		$this->load->database();
		$this->load->helper('url');	
	}

	public function departamento() {
		$this->load->view('departamento_reporte.php');	
	}

	public function departamento_report() {
		$this->load->view('departamento_reporte_imprimir.php');	
	}

	public function cargo() {
		$this->load->view('cargo_reporte.php');	
	}

	public function cargo_report() {
		$this->load->view('cargo_reporte_imprimir.php');	
	}

	public function personal() {
		$this->load->view('personal_reporte.php');	
	}

	public function personal_report() {
		$this->load->view('personal_reporte_imprimir.php');	
	}

	public function adulto() {
		$this->load->view('adulto_reporte.php');	
	}

	public function adulto_report() {
		$this->load->view('adulto_reporte_imprimir.php');	
	}

	public function gruposf() {
		$this->load->view('gruposf_reporte.php');	
	}

	public function gruposf_report() {
		$this->load->view('gruposf_reporte_imprimir.php');	
	}
}