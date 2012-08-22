<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adultos_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}

	public function get_all() {
		$consulta = $this->db->order_by('apellido_adulto asc, nombre_adulto asc')->get('tbl_adulto');
		if ($consulta->num_rows()) {
			$data = $consulta->result();
		} else {
			$data = FALSE;
		}
		$consulta->free_result();
		return $data;
	}

	public function get_byid($id_adulto) {
		$consulta = $this->db->join('tbl_representante', 'tbl_representante.id_representante=tbl_adulto.id_representante')->where("id_adulto", $id_adulto)->get('tbl_adulto');
		if ($consulta->num_rows()) {
			$data = $consulta->result();
		} else {
			$data = FALSE;
		}
		$consulta->free_result();
		return $data;
	}
}