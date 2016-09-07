<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beallin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('beallin_model');
	}

	function index(){
		$this->load->view('header');
		$this->load->view('pagina_inicio');
		$this->load->view('footer');
	}

	function registroJobber(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		//Objeto de datos
		//Reglas para la validación de datos por parte del servidor.
		$this->form_validation->set_rules('nombres', 'nombres', 'trim|alpha|required|min_length[4]|max_length[30]');
		$this->form_validation->set_rules('nombreUsuario', 'nombreUsuario', 'trim|required|min_length[4]|max_length[15]|is_unique[usuarios.nombreUsuario]');
		$this->form_validation->set_rules('correo', 'correo', 'trim|required|valid_email|is_unique[usuarios.correo]');
		$this->form_validation->set_rules('contraseña', 'contraseña', 'trim|required|min_length[6]|max_length[20]');
		$this->form_validation->set_rules('confirmar_contraseña', 'confirmar_contraseña', 'trim|required|min_length[6]|max_length[20]|matches[contraseña]');


		if ($this->form_validation->run() === false) {
			//Mostrar errores
			$this->load->view('header');
			$this->load->view('formulario_registro');
			$this->load->view('footer'); 

		}else{
			//Se mandan variables del formulario
			$nombres = $this->input->post('nombres');
			$nombreUsuario = $this->input->post('nombreUsuario');
			$correo = $this->input->post('correo');
			$contraseña = $this->input->post('contraseña');

			if ($this->beallin_model->registrar_Jobber($nombres,$nombreUsuario,$correo,$contraseña)) {
				// Creación de usuario correcta.
				$this->load->view('pagina_inicio');
			}	

		}	
	}

	// Funciones de validación si el correo ya está registrado en la base de datos.
	private function correo_existe($correo)
	{
		$this->db->where('correo', $correo);
		$query = $this->db->get('usuarios');
		if( $query->num_rows() > 0 ){
		 	return TRUE; 
		}else { 
		  	return FALSE; 
		}
	}


	function verificar_correo()
	{
		if (array_key_exists('correo',$_POST)) {
			if ( $this->correo_existe($this->input->post('correo')) == TRUE ) {
				echo json_encode(FALSE);
			} else {
				echo json_encode(TRUE);
			}
		}
	}


}
