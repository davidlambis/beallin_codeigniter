<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beallin_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function registrar_Jobber($nombres,$nombreUsuario,$correo,$contraseña){

		$datos = array(
				'nombres' => $nombres,
				'nombreUsuario' =>$nombreUsuario,
				'correo' => $correo,
				'contraseña' => $contraseña,	
					);

		return $this->db->insert('usuarios', $datos);
	}

	

}