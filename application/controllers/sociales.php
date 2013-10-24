<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sociales extends CI_Controller {

	function __construct() {
		parent::__construct();
		
		$this->load->library('session');
		//$this->load->library('Form_validation');
		//$this->load->library('grocery_CRUD');

		if (!$this->session->userdata("logged_in")) {
			redirect('/');
		}

		$this->load->database();
		$this->load->helper('url');
		
		$this->load->library('grocery_CRUD');	
	}
	
	function _example_output($output = null) {
		$this->load->view('social_view.php',$output);	
	}

	function index() {
		try {
			/* This is only for the autocompletion */
			$crud = new grocery_CRUD();

			$crud->set_table('tbl_social');
			
			$crud->set_subject('Informe Social');
			
			$crud->columns('id_adulto', 'fecha_social', 'referido_social', 'a_social', 'id_usuario', 'fregistro_social');
			
			$crud->display_as('id_adulto', 'Adulto');
			$crud->display_as('fecha_social', 'Fecha y Hora');
			$crud->display_as('referido_social', 'Referido por');
			$crud->display_as('a_social', 'A');
			$crud->display_as('asunto_social', 'Asunto');
			$crud->display_as('caracteristica_vivienda', 'Característica de la Vivienda');
			$crud->display_as('tipo_vivienda', 'Tipo de la Vivienda');
			$crud->display_as('tenencia_vivienda', 'Tenencia de la Vivienda');
			$crud->display_as('tenencia_otro_vivienda', 'Otra Tenencia de la Vivienda');
			$crud->display_as('ambiente_vivienda_u', 'Ambiente (Único) de la Vivienda');
			$crud->display_as('ambiente_vivienda_b', 'Ambiente (Baño) de la Vivienda');
			$crud->display_as('ambiente_vivienda_c', 'Ambiente (Comedor) de la Vivienda');
			$crud->display_as('ambiente_vivienda_d', 'Ambiente (Dormitorio) de la Vivienda');
			$crud->display_as('ambiente_vivienda_s', 'Ambiente (Sala) de la Vivienda');
			$crud->display_as('ambiente_vivienda_co', 'Ambiente (Comedor) de la Vivienda');
			$crud->display_as('ambiente_otro_vivienda', 'Otra Ambiente de la Vivienda');
			$crud->display_as('techo_vivienda', 'Techo de la Vivienda');
			$crud->display_as('techo_otro_vivienda', 'Otro Techo de la Vivienda');
			$crud->display_as('piso_vivienda', 'Piso de la Vivienda');
			$crud->display_as('piso_otro_vivienda', 'Otro Piso de la Vivienda');
			$crud->display_as('pared_vivienda', 'Pared de la Vivienda');
			$crud->display_as('pared_otro_vivienda', 'Otra Pared de la Vivienda');
			$crud->display_as('excreta_vivienda', 'Excretas de la Vivienda');
			$crud->display_as('excreta_otro_vivienda', 'Otra Excreta de la Vivienda');
			$crud->display_as('alumbrado_vivienda', 'Alumbrado de la Vivienda');
			$crud->display_as('alumbrado_otro_vivienda', 'Otro Alumbrado de la Vivienda');
			$crud->display_as('basura_vivienda', 'Basura de la Vivienda');
			$crud->display_as('basura_otro_vivienda', 'Otra Basura de la Vivienda');
			$crud->display_as('agua_vivienda', 'Suministro de Agua de la Vivienda');
			$crud->display_as('agua_otro_vivienda', 'Otro Suministro de Agua de la Vivienda');
			$crud->display_as('acceso_vivienda', 'Acceso de la Vivienda');
			$crud->display_as('transporte_vivienda', 'Transporte de la Vivienda');
			$crud->display_as('telefono_vivienda', 'Teléfono de la Vivienda');
			$crud->display_as('vivienda_analisis', 'Vivienda del Análisis Socio-Económico');
			$crud->display_as('transporte_analisis', 'Transporte del Análisis Socio-Económico');
			$crud->display_as('servicios_analisis', 'Servicios del Análisis Socio-Económico');
			$crud->display_as('medicina_analisis', 'Medicina del Análisis Socio-Económico');
			$crud->display_as('alimentacion_analisis', 'Alimentación del Análisis Socio-Económico');
			$crud->display_as('otro_analisis', 'Otro Egreso del Análisis Socio-Económico');
			$crud->display_as('ingreso_analisis', 'Ingreso del Análisis Socio-Económico');
			$crud->display_as('conclusion_analisis', 'Conclusión del Análisis Socio-Económico');
			$crud->display_as('sintesis_social', 'Sintesis del Caso');
			$crud->display_as('diagnostico_social', 'Diagnóstico Social');
			$crud->display_as('recomendacion_social', 'Recomendacion');
			$crud->display_as('vobo_social', 'Elaborado por');
			$crud->display_as('id_personal', 'Personal');
			$crud->display_as('id_usuario', 'Registrado por');
			$crud->display_as('fregistro_social', 'Fecha de Registro');

			$crud->fields('id_adulto', 'fecha_social', 'referido_social', 'a_social', 'asunto_social', 'caracteristica_vivienda', 'tipo_vivienda', 'tenencia_vivienda', 'tenencia_otro_vivienda', 'ambiente_vivienda_u', 'ambiente_vivienda_b', 'ambiente_vivienda_c', 'ambiente_vivienda_d', 'ambiente_vivienda_s', 'ambiente_vivienda_co', 'ambiente_otro_vivienda', 'techo_vivienda', 'techo_otro_vivienda', 'piso_vivienda', 'piso_otro_vivienda', 'pared_vivienda', 'pared_otro_vivienda', 'excreta_vivienda', 'excreta_otro_vivienda', 'alumbrado_vivienda', 'alumbrado_otro_vivienda', 'basura_vivienda', 'basura_otro_vivienda', 'agua_vivienda', 'agua_otro_vivienda', 'acceso_vivienda', 'transporte_vivienda', 'telefono_vivienda', 'vivienda_analisis', 'transporte_analisis', 'servicios_analisis', 'medicina_analisis', 'alimentacion_analisis', 'otro_analisis', 'ingreso_analisis', 'conclusion_analisis', 'sintesis_social', 'diagnostico_social', 'recomendacion_social', 'vobo_social', 'id_personal', 'id_usuario');
			
			$crud->set_rules('id_adulto', 'Nombre del Adulto', 'required');
			$crud->set_rules('fecha_social', 'Fecha y Hora', 'required');
			$crud->set_rules('referido_social', 'Referido por', 'required|alpha_space');
			$crud->set_rules('a_social', 'A', 'required|alpha_space');
			$crud->set_rules('asunto_social', 'El Asunto Social', 'required|alpha_space');
			$crud->set_rules('caracteristica_vivienda', 'Característica de la Vivienda', 'required');
			$crud->set_rules('tipo_vivienda', 'Tipo de la Vivienda', 'required');
			$crud->set_rules('tenencia_vivienda', 'Tenencia de la Vivienda', 'required');
			$crud->set_rules('ambiente_vivienda_u', 'Ambiente (Único) de la Vivienda', 'required');
			$crud->set_rules('ambiente_vivienda_b', 'Ambiente (Baño) de la Vivienda', 'required');
			$crud->set_rules('ambiente_vivienda_c', 'Ambiente (Comedor) de la Vivienda', 'required');
			$crud->set_rules('ambiente_vivienda_d', 'Ambiente (Dormitorio) de la Vivienda', 'required');
			$crud->set_rules('ambiente_vivienda_s', 'Ambiente (Sala) de la Vivienda', 'required');
			$crud->set_rules('ambiente_vivienda_co', 'Ambiente (Comedor) de la Vivienda', 'required');
			$crud->set_rules('techo_vivienda', 'Techo de la Vivienda', 'required');
			$crud->set_rules('techo_otro_vivienda', 'Otro Techo de la Vivienda', 'alpha_space');
			$crud->set_rules('piso_vivienda', 'Piso de la Vivienda', 'required');
			$crud->set_rules('piso_otro_vivienda', 'Otro Piso de la Vivienda', 'alpha_space');
			$crud->set_rules('pared_vivienda', 'Pared de la Vivienda', 'required');
			$crud->set_rules('pared_otro_vivienda', 'Otra Pared de la Vivienda', 'alpha_space');
			$crud->set_rules('excreta_vivienda', 'Excretas de la Vivienda', 'required');
			$crud->set_rules('excreta_otro_vivienda', 'Otra Excreta de la Vivienda', 'alpha_space');
			$crud->set_rules('alumbrado_vivienda', 'Alumbrado de la Vivienda', 'required');
			$crud->set_rules('alumbrado_otro_vivienda', 'Otro Alumbrado de la Vivienda', 'alpha_space');
			$crud->set_rules('basura_vivienda', 'Basura de la Vivienda', 'required');
			$crud->set_rules('basura_otro_vivienda', 'Otra Basura de la Vivienda', 'alpha_space');
			$crud->set_rules('agua_vivienda', 'Suministro de Agua de la Vivienda', 'required');
			$crud->set_rules('agua_otro_vivienda', 'Otro Suministro de Agua de la Vivienda', 'alpha_space');
			$crud->set_rules('acceso_vivienda', 'Acceso de la Vivienda', 'required');
			$crud->set_rules('transporte_vivienda', 'Transporte de la Vivienda', 'required');
			$crud->set_rules('telefono_vivienda', 'Teléfono de la Vivienda', 'required');
			$crud->set_rules('vivienda_analisis', 'Vivienda del Análisis Socio-Económico', 'required|numeric');
			$crud->set_rules('transporte_analisis', 'Transporte del Análisis Socio-Económico', 'required|numeric');
			$crud->set_rules('servicios_analisis', 'Servicios del Análisis Socio-Económico', 'required|numeric');
			$crud->set_rules('medicina_analisis', 'Medicina del Análisis Socio-Económico', 'required|numeric');
			$crud->set_rules('alimentacion_analisis', 'Alimentación del Análisis Socio-Económico', 'required|numeric');
			$crud->set_rules('otro_analisis', 'Otro Egreso del Análisis Socio-Económico', 'numeric');
			$crud->set_rules('ingreso_analisis', 'Ingreso del Análisis Socio-Económico', 'required|numeric');
			$crud->set_rules('conclusion_analisis', 'Conclusión del Análisis Socio-Económico', 'alpha_space');
			$crud->set_rules('sintesis_social', 'Sintesis del Caso', 'required|alpha_space');
			$crud->set_rules('diagnostico_social', 'Diagnóstico Social', 'required|alpha_space');
			$crud->set_rules('recomendacion_social', 'Recomendacion', 'required|alpha_space');
			$crud->set_rules('vobo_social', 'VoBo Social', 'required|alpha_space');
			$crud->set_rules('id_personal', 'Nombre del Personal', 'required');
			$crud->set_rules('id_usuario', 'Nombre del Usuario', 'required');

			$crud->set_relation('id_adulto', 'tbl_adulto', '{apellido_adulto} {nombre_adulto} - {cedula_adulto}');
			$crud->set_relation('id_personal', 'tbl_personal', '{apellido_personal} {nombre_personal} - {cedula_personal}');
			$crud->set_relation('id_usuario', 'tbl_usuario', 'nombre_usuario');

			$crud->order_by('apellido_adulto, nombre_adulto','ASC');
			$crud->unset_texteditor('conclusion_analisis','full_text');
			$crud->unset_texteditor('sintesis_social','full_text');
			$crud->unset_texteditor('diagnostico_social','full_text');
			$crud->unset_texteditor('recomendacion_social','full_text');

			if ($this->session->userdata("tipo_usuario")=='Supervisor') {
				$crud->unset_delete();
			}
			if ($this->session->userdata("tipo_usuario")=='Usuario') {
				$crud->unset_edit();
				$crud->unset_delete();
			}

			// Función a ejecutarse antes de Guardar y Modificar modificac el texto en mayuscula 
			$crud->callback_before_insert(array($this,'valid_uppercase'));
    		$crud->callback_before_update(array($this,'valid_uppercase'));

			$output = $crud->render();
			
			$this->_example_output($output);
			
		} catch(Exception $e) {
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
	// Función que Guardarla en mayuscula
	function valid_uppercase($post_array, $primary_key = null) {
    	$post_array['referido_social'] = strtoupper($post_array['referido_social']);
    	$post_array['a_social'] = strtoupper($post_array['a_social']);
    	$post_array['asunto_social'] = strtoupper($post_array['asunto_social']);
    	$post_array['tenencia_otro_vivienda'] = strtoupper($post_array['tenencia_otro_vivienda']);
    	$post_array['ambiente_otro_vivienda'] = strtoupper($post_array['ambiente_otro_vivienda']);
    	$post_array['techo_otro_vivienda'] = strtoupper($post_array['techo_otro_vivienda']);
    	$post_array['piso_otro_vivienda'] = strtoupper($post_array['piso_otro_vivienda']);
    	$post_array['pared_otro_vivienda'] = strtoupper($post_array['pared_otro_vivienda']);
    	$post_array['excreta_otro_vivienda'] = strtoupper($post_array['excreta_otro_vivienda']);
    	$post_array['alumbrado_otro_vivienda'] = strtoupper($post_array['alumbrado_otro_vivienda']);
    	$post_array['basura_otro_vivienda'] = strtoupper($post_array['basura_otro_vivienda']);
    	$post_array['agua_otro_vivienda'] = strtoupper($post_array['agua_otro_vivienda']);
    	$post_array['conclusion_analisis'] = strtoupper($post_array['conclusion_analisis']);
    	$post_array['sintesis_social'] = strtoupper($post_array['sintesis_social']);
    	$post_array['diagnostico_social'] = strtoupper($post_array['diagnostico_social']);
    	$post_array['recomendacion_social'] = strtoupper($post_array['recomendacion_social']);
    	$post_array['vobo_social'] = strtoupper($post_array['vobo_social']);
    	// Devuelve el arreglo para Guardar
    	return $post_array;
    }	
}