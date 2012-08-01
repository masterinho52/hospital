<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gruposf_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}

	public function get_all() {
		$consulta = $this->db->order_by('apellido_grupo')->order_by('nombre_grupo')->get('tbl_grupo_familiar');
		if ($consulta->num_rows()) {
			$data = $consulta->result();
		} else {
			$data = FALSE;
		}
		$consulta->free_result();
		return $data;
	}
}