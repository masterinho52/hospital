<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adultos_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}

	public function get_all() {
		$consulta = $this->db->join('tbl_representante', 'tbl_representante.id_representante=tbl_adulto.id_representante')->where('estatus_adulto',1)->order_by('apellido_adulto asc, nombre_adulto asc')->get('tbl_adulto');
		if ($consulta->num_rows()) {
			$data = $consulta->result();
		} else {
			$data = FALSE;
		}
		$consulta->free_result();
		return $data;
	}

	public function get_all_byDate($desde, $hasta) {
		$consulta = $this->db->join('tbl_representante', 'tbl_representante.id_representante=tbl_adulto.id_representante')->where('estatus_adulto',1)->where('fechai_adulto >='.$desde)->where('fechai_adulto <=', $hasta)->order_by('apellido_adulto asc, nombre_adulto asc')->get('tbl_adulto');
		if ($consulta->num_rows()) {
			$data = $consulta->result();
		} else {
			$data = FALSE;
		}
		$consulta->free_result();
		return $data;
	}


	public function get_byid($id_adulto) {
		$consulta = $this->db->join('tbl_representante', 'tbl_representante.id_representante=tbl_adulto.id_representante')->where("estatus_adulto", 1)->where("id_adulto", $id_adulto)->get('tbl_adulto');
		if ($consulta->num_rows()) {
			$data = $consulta->result();
		} else {
			$data = FALSE;
		}
		$consulta->free_result();
		return $data;
	}

	public function estatus_cero($id_adulto) {

		$data_adulto = array (
							'estatus_adulto'=> '0'
						);
		$data = $this->db->where('id_adulto', $id_adulto)->update('tbl_adulto', $data_adulto);
		if ($data) { return TRUE; } else { return FALSE; }
	}

	public function estatus_uno($id_adulto) {

		$data_adulto = array (
							'estatus_adulto'=> '1'
						);
		$data = $this->db->where('id_adulto', $id_adulto)->update('tbl_adulto', $data_adulto);
		if ($data) { return TRUE; } else { return FALSE; }
	}


}