<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->library('Form_validation');
		$this->load->model("login_model");
	}
	public function index() {
		$this->form_validation->set_rules("login", "Usuario", "required|trim|max_length[50]|xss_clean");
		$this->form_validation->set_rules("password", "Clave", "required|trim|max_length[50]|xss_clean");

		if ($this->form_validation->run() == FALSE) {
			// echo "error";
			$this->load->view('inicio');
		} else {
			$data = $this->login_model->check_login(set_value("login"), set_value("password"));
			if ($data) {
				$this->session->set_userdata("logged_in" , TRUE);
				$this->session->set_userdata("cedula_usuario" , $data->cedula_usuario);
				$this->session->set_userdata("nombre_usuario", $data->nombre_usuario);
				$this->session->set_userdata("tipo_usuario"	, $data->tipo_usuario);
				$this->session->set_userdata("login" , $data->login);

				redirect('admin/');
			}  else  {
				$this->session->set_flashdata("loged_in_fail", TRUE);
				// redirect('/');
				$this->load->view('inicio');
			}
		}
	}
	public function logout() {
		$this->session->set_userdata("logged_in", FALSE);
		$this->session->sess_destroy();
		redirect('/');
	}
}