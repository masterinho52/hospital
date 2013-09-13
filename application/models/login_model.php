<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	public function check_login($usuario, $password)
	{
		$md5_pass = md5($password);

		$data = $this->db->where("login", $usuario);
		$data = $this->db->where("password", $md5_pass);

		$data = $this->db->get("tbl_usuario");

		if ($data->num_rows()) {
			return $data->row(0);
		} else {
			return false;			
		}

	}
}
