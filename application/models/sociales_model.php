<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sociales_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}

	public function get_all() {
		$consulta = $this->db->join('tbl_adulto', 'tbl_adulto.id_adulto=tbl_social.id_adulto')->order_by('apellido_adulto asc, nombre_adulto asc')->get('tbl_social');
		if ($consulta->num_rows()) {
			$data = $consulta->result();
		} else {
			$data = FALSE;
		}
		$consulta->free_result();
		return $data;
	}

	public function get_byid($id_social) {
		$consulta = $this->db->join('tbl_adulto', 'tbl_adulto.id_adulto=tbl_social.id_adulto')->join('tbl_representante', 'tbl_representante.id_representante=tbl_adulto.id_representante')->join('tbl_grupo_familiar', 'tbl_grupo_familiar.id_adulto=tbl_adulto.id_adulto')->join('tbl_personal', 'tbl_personal.id_personal=tbl_social.id_personal')->where("id_social", $id_social)->order_by('apellido_grupo asc, nombre_grupo asc')->limit(6)->get('tbl_social');
		if ($consulta->num_rows()) {
			$data = $consulta->result();
		} else {
			$data = FALSE;
		}
		$consulta->free_result();
		return $data;
	}
}