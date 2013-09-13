<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reportes extends CI_Controller {
	function __construct() {
		parent::__construct();
		
		$this->load->library('session');

		if (!$this->session->userdata("logged_in")) {
			redirect('/');
		} else {
			$this->load->model("adultos_model");
			$this->load->model("personales_model");
			$this->load->model("gruposf_model");
			$this->load->model("cierres_model");
			$this->load->model("receptorias_model");
			$this->load->model("sociales_model");
		}

		$this->load->database();
		$this->load->helper('url');
	}

	public function adulto() {
		$this->load->view('adulto_reporte.php');	
	}

	public function adultos_print() {
		$d = $this->fecha2sql($_POST['desde']);
		$h = $this->fecha2sql($_POST['hasta']);
		$data['adultos'] = $this->adultos_model->get_all_between($d, $h);
		$this->load->view('adulto_imprimir.php', $data);	
	}
	
	public function fecha2sql($fecha)
	{
		$fech = explode('/', $fecha);
		$nfecha = $fech[2].'-'.$fech[1].'-'.$fech[0];
		return $nfecha;
	}

	public function cierre() {
		$this->load->view('cierre_reporte.php');	
	}

	public function cierres_print() {
		$d = $this->fecha2sql($_POST['desde']);
		$h = $this->fecha2sql($_POST['hasta']);
		$data['adultos'] = $this->cierres_model->get_all_between($d, $h);
		$this->load->view('cierres_imprimir.php', $data);	
	}
}