<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Personales_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}

	public function get_all() {
		$consulta = $this->db->order_by('apellido_personal')->order_by('nombre_personal')->get('tbl_personal');
		if ($consulta->num_rows()) {
			$data = $consulta->result();
		} else {
			$data = FALSE;
		}
		$consulta->free_result();
		return $data;
	}

	public function get_all_bycargo_director($nombre_cargo = 'DIRECTOR') {
		$consulta = $this->db->join('tbl_cargo', 'tbl_cargo.id_cargo= tbl_personal.id_cargo')->where("nombre_cargo", $nombre_cargo)->order_by('apellido_personal')->order_by('nombre_personal')->get('tbl_personal');
		if ($consulta->num_rows()) {
			$data = $consulta->result();
		} else {
			$data = FALSE;
		}
		$consulta->free_result();
		return $data;
	}

	public function get_all_bycargo() {
		$consulta = $this->db->join('tbl_cargo', 'tbl_cargo.id_cargo= tbl_personal.id_cargo')->where("nombre_cargo !=", 'DIRECTOR')->order_by('apellido_personal')->order_by('nombre_personal')->get('tbl_personal');
		if ($consulta->num_rows()) {
			$data = $consulta->result();
		} else {
			$data = FALSE;
		}
		$consulta->free_result();
		return $data;
	}
}