<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beallin_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function registrar_Jobber($tipo,$nombres,$correo,$contraseña){

		$datos = array(
				'tipo' => $tipo,
				'nombres' => $nombres,
				'correo' => $correo,
				'contraseña' => $contraseña,	
				'JoA' => "Jobber"	
				);

		return $this->db->insert('usuarios', $datos);
	}

	public function registrar_Adder($tipo,$nombres,$correo,$contraseña){

		$datos = array(
				'tipo' => $tipo,
				'nombres' => $nombres,
				'correo' => $correo,
				'contraseña' => $contraseña,	
				'JoA' => "Adder"	
				);

		return $this->db->insert('usuarios', $datos);
	}

}