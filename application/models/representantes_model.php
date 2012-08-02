<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Representantes_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}

	public function get_all() {
		$consulta = $this->db->order_by('apellido_representante')->order_by('nombre_representante')->get('tbl_representante');
		if ($consulta->num_rows()) {
			$data = $consulta->result();
		} else {
			$data = FALSE;
		}
		$consulta->free_result();
		return $data;
	}

	public function get_byid($id_representante)	{
		$consulta = $this->db->where("id_representante", $id_representante)->get('tbl_representante');
		if ($consulta->num_rows()) {
			$data = $consulta->result();
		} else {
			$data = FALSE;
		}
		$consulta->free_result();
		return $data;
	}
}