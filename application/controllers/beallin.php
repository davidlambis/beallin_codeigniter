<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beallin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('beallin_model');
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
	}

	function index(){
		$this->load->view('header');
		$this->load->view('pagina_inicio');
		$this->load->view('footer');
	}

	function registroJobber(){
		$this->load->helper('form');
		$this->load->library('form_validation');

	//Reglas para la validación de datos por parte del servidor.
	$this->form_validation->set_rules('nombres','nombres','trim|required|min_length[4]|max_length[50]');
	$this->form_validation->set_rules('correo', 'correo', 'trim|required');
	$this->form_validation->set_rules('contraseña','contraseña','trim|required|min_length[6]|max_length[20]');
	$this->form_validation->set_rules('confirmar_contraseña', 'confirmar_contraseña', 'trim|required|min_length[6]|max_length[20]|matches[contraseña]');

		if ($this->form_validation->run() === false){
			$this->load->view('header');
			$this->load->view('formulario_registro');
			$this->load->view('footer'); 
		}else{	
			//Se mandan variables del formulario
			$tipo = $this->input->post('tipo');
			$nombres = $this->input->post('nombres');
			$correo = $this->input->post('correo');
			$contraseña = $this->input->post('contraseña');

			if($this->beallin_model->registrar_Jobber($tipo,$nombres,$correo,$contraseña)){
				// Creación de usuario correcta.
				echo "<script language='JavaScript'>alert('Usuario registrado exitosamente');</script>"; 
			}
		}
	}

	function registroAdder(){
		$this->load->helper('form');
		$this->load->library('form_validation');

	//Reglas para la validación de datos por parte del servidor.
	$this->form_validation->set_rules('nombres','nombres','trim|required|min_length[4]|max_length[50]');
	$this->form_validation->set_rules('correo', 'correo', 'trim|required');
	$this->form_validation->set_rules('contraseña','contraseña','trim|required|min_length[6]|max_length[20]');
	$this->form_validation->set_rules('confirmar_contraseña', 'confirmar_contraseña', 'trim|required|min_length[6]|max_length[20]|matches[contraseña]');

		if ($this->form_validation->run() === false){
			$this->load->view('header');
			$this->load->view('formulario_registro');
			$this->load->view('footer'); 
		}else{	
			//Se mandan variables del formulario
			$tipo = $this->input->post('tipo');
			$nombres = $this->input->post('nombres');
			$correo = $this->input->post('correo');
			$contraseña = $this->input->post('contraseña');

			if($this->beallin_model->registrar_Adder($tipo,$nombres,$correo,$contraseña)){
				// Creación de usuario correcta.
				echo "<script language='JavaScript'>alert('Usuario registrado exitosamente');</script>"; 
			}
		}
	}

	public function login(){
		$this->load->helper('form');
		$this->load->library('form_validation');

	$this->form_validation->set_rules('correo', 'correo', 'trim|required');
	$this->form_validation->set_rules('contraseña','contraseña','trim|required');	

		if ($this->form_validation->run() === false){
		//if($this->input->post()){
			$data = array();
			$this->load->view('header');
			$this->load->view('formulario_login' , $data);
			$this->load->view('footer');
		}else{	
			$correo = $this->input->post('correo');
			$contraseña = $this->input->post('contraseña');
			$usuario = $this->beallin_model->usuario_por_correo_y_contraseña($correo,$contraseña);
			if($usuario) {
				$usuario_data = array(
               'idUsuario' => $usuario->idUsuario,
               'correo' => $usuario->correo,
               'logueado' => TRUE
               );
			   $this->session->set_userdata($usuario_data);
			   echo "<script language='JavaScript'>alert('login exitoso');</script>";
			}else{
			   echo "<script language='JavaScript'>alert('Error en los datos');</script>";
			   //redirect('beallin/login');
			   
			}
		}
		//}
		 //else{
			/*$data = array();
			$this->load->view('header');
			$this->load->view('formulario_login' , $data);
			$this->load->view('footer'); */
		//}
	}

	public function logueado() {
      if($this->session->userdata('logueado')){
         $data = array();
         $data['correo'] = $this->session->userdata('correo');
        // $this->load->view('usuarios/logueado', $data); Toca poner el home.
      }else{
         redirect('usuarios/iniciar_sesion');
      }
   }

		
	// Funciones para validar si el correo del usuario ya está registrado en la base de datos.
	private function correo_existe($correo)
	{
		$this->db->where('correo', $correo);
		$query = $this->db->get('usuarios');
		if( $query->num_rows() > 0 ){ return TRUE; } else { return FALSE; }
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