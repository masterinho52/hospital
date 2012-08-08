<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Impresiones extends CI_Controller {
	function __construct() {
		parent::__construct();
		
		$this->load->library('session');

		if (!$this->session->userdata("logged_in")) {
			redirect('/');
		} else {
			$this->load->model("adultos_model");
			$this->load->model("personales_model");
		}

		$this->load->database();
		$this->load->helper('url');
	}

	public function acta($data = array()) {
		$data['adulto'] = $this->adultos_model->get_all();
		$data['personal'] = $this->personales_model->get_all_bycargo();
		$data['director'] = $this->personales_model->get_all_bycargo_director();
		$this->load->view('acta.php', $data);	
	}

	public function acta_print() {
		$data['dia'] = $this->conversion_dia($_POST['dia']);
		$data['mes'] = $_POST['mes'];
		$data['ano'] = $_POST['ano'];
		$data['adulto'] = $this->adultos_model->get_byid($_POST['id_adulto']);
		$data['personal'] = $this->personales_model->get_byid($_POST['id_personal']);
		$data['director'] = $this->personales_model->get_byid($_POST['personal_id']);
		$data['edad'] = $this->fn_edad($data['adulto'][0]->fechan_adulto);
		$data['edad_r'] = $this->fn_edad($data['adulto'][0]->fechan_representante);
		$this->load->view('acta_imprimir.php', $data);	
	}

	public function constancia() {
		$data['personal'] = $this->personales_model->get_all_bycargo();
		$this->load->view('constancia.php');	
	}

	public function constancia_print() {
		$data['institucion'] = $_POST['institucion'];
		$data['dia'] = $_POST['dia'];
		$data['mes'] = $_POST['mes'];
		$data['ano'] = $_POST['ano'];
		$data['hora'] = $_POST['hora'];
		$data['minuto'] = $_POST['minuto'];
		$data['tiempo'] = $_POST['tiempo'];
		$data['funcionario'] = $_POST['funcionario'];
		$data['cargo'] = $_POST['cargo'];
		$data['motivo'] = $_POST['motivo'];
		$data['acuerdo'] = $_POST['acuerdo'];
		$data['personal'] = $this->personales_model->get_byid($_POST['id_personal']);
		$this->load->view('constancia_imprimir.php');	
	}

	public function control() {
		$this->load->view('control.php');	
	}

	public function control_print() {
		$this->load->view('control_imprimir.php');	
	}

	public function cronologia() {
		$this->load->view('cronologia.php');	
	}

	public function cronologia_print() {
		$this->load->view('cronologia_imprimir.php');	
	}

	public function hoja() {
		$this->load->view('hoja.php');	
	}

	public function hoja_print() {
		$this->load->view('hoja_imprimir.php');	
	}

	public function cierre() {
		$this->load->view('cierre.php');	
	}

	public function cierre_print() {
		$this->load->view('cierre_imprimir.php');	
	}

	public function receptoria() {
		$this->load->view('receptoria.php');	
	}

	public function receptoria_print() {
		$this->load->view('receptoria_imprimir.php');	
	}

	public function social() {
		$this->load->view('social.php');	
	}

	public function social_print() {
		$this->load->view('social_imprimir.php');	
	}

	public function fn_edad($fn) {
		$fecha = explode('-', $fn);
		$Yactual = date('Y');
		$Mactual = date('m');
		$Dactual = date('d');
		
		$edad = $Yactual - $fecha[0];

		if ($Mactual < $fecha[1]) {
			$edad--;
		} elseif ($Mactual == $fecha[1]) {
			if ($Dactual < $fecha[0]) {
				$edad--;
			}
		}

		return $edad;
	}
	
	public function conversion_dia($dia) {
		if ($dia==1) { return "día uno (01)"; } 
		if ($dia==2) { return "los dos (02) días"; }
		if ($dia==3) { return "los tres (03) días"; } 
		if ($dia==4) { return "los cuatro (04) días"; } 
		if ($dia==5) { return "los cinco (05) días";  } 
		if ($dia==6) { return "los seis (06) días";  } 
		if ($dia==7) { return "los siete (07) días"; }
		if ($dia==8) { return "los ocho (08) días";  } 
		if ($dia==9) { return "los nueve (09) días";  } 
		if ($dia==10) { return "los diez (10) días";  } 
		if ($dia==11) { return "los once (11) días";  } 
		if ($dia==12) { return "los doce (12) días";  }
		if ($dia==13) { return "los trece (13) días";  }
		if ($dia==14) { return "los cartoce (14) días";  }
		if ($dia==15) { return "los quince (15) días";  }
		if ($dia==16) { return "los dieciséis (16) días";  }
		if ($dia==17) { return "los diecisiete (17) días";  }
		if ($dia==18) { return "los dieciocho (18) días";  }
		if ($dia==19) { return "los diecinueve (19) días";  }
		if ($dia==20) { return "los veinte (20) días";  }
		if ($dia==21) { return "los veintiun (21) días";  }
		if ($dia==22) { return "los veintidos (22) días";  }
		if ($dia==23) { return "los veintitres (23) días";  }
		if ($dia==24) { return "los veinticuatro (24) días";  }
		if ($dia==25) { return "los veinticinco (25) días";  }
		if ($dia==26) { return "los veintiseis (26) días";  }
		if ($dia==27) { return "los veintisiete (27) días";  }
		if ($dia==28) { return "los veintiocho (28) días";  }
		if ($dia==29) { return "los veintinueve (29) días";  }
		if ($dia==30) { return "los treinta (30) días";  }
		if ($dia==31) { return "los treintiun (31) días";  } 
	}
}