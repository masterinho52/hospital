<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cierres_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}

	public function get_all() {
		$consulta = $this->db->join('tbl_adulto', 'tbl_adulto.id_adulto=tbl_cierre.id_adulto')->order_by('apellido_adulto asc, nombre_adulto asc')->get('tbl_cierre');
		if ($consulta->num_rows()) {
			$data = $consulta->result();
		} else {
			$data = FALSE;
		}
		$consulta->free_result();
		return $data;
	}

	public function get_byid($id_cierre) {
		$consulta = $this->db->join('tbl_adulto', 'tbl_adulto.id_adulto=tbl_cierre.id_adulto')->join('tbl_personal', 'tbl_personal.id_personal=tbl_cierre.id_personal')->where("id_cierre", $id_cierre)->get('tbl_cierre');
		if ($consulta->num_rows()) {
			$data = $consulta->result();
		} else {
			$data = FALSE;
		}
		$consulta->free_result();
		return $data;
	}

	public function get_all_between($desde, $hasta) {
		$consulta = $this->db->join('tbl_adulto', 'tbl_adulto.id_adulto=tbl_cierre.id_adulto')->where('fecha_cierre >=', $desde)->where('fecha_cierre <=', $hasta)->order_by('fecha_cierre asc')->get('tbl_cierre');
		if ($consulta->num_rows()) {
			$data = $consulta->result();
		} else {
			$data = FALSE;
		}
		$consulta->free_result();
		$consulta = $this->db->join('tbl_adulto', 'tbl_adulto.id_adulto=tbl_cierre.id_adulto')->order_by('apellido_adulto asc, nombre_adulto asc')->get('tbl_cierre');
		return $data;
	}
	
}