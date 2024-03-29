<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Receptorias_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}

	public function get_all() {
		$consulta = $this->db->join('tbl_adulto', 'tbl_adulto.id_adulto=tbl_receptoria.id_adulto')->order_by('apellido_adulto asc, nombre_adulto asc')->get('tbl_receptoria');
		if ($consulta->num_rows()) {
			$data = $consulta->result();
		} else {
			$data = FALSE;
		}
		$consulta->free_result();
		return $data;
	}

	public function get_byid($id_receptoria) {
		$consulta = $this->db->join('tbl_adulto', 'tbl_adulto.id_adulto=tbl_receptoria.id_adulto')->join('tbl_representante', 'tbl_representante.id_representante=tbl_adulto.id_representante')->join('tbl_grupo_familiar', 'tbl_grupo_familiar.id_adulto=tbl_adulto.id_adulto')->join('tbl_personal', 'tbl_personal.id_personal=tbl_receptoria.id_personal')->where("id_receptoria", $id_receptoria)->order_by('apellido_grupo asc, nombre_grupo asc')->limit(6)->get('tbl_receptoria');
		if ($consulta->num_rows()) {
			$data = $consulta->result();
		} else {
			$data = FALSE;
		}
		$consulta->free_result();
		return $data;
	}
}