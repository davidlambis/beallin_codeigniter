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
				'contraseña' => $this->hash_password($contraseña),	
				'JoA' => "Jobber"	
				);

		return $this->db->insert('usuarios', $datos);
	}

	public function registrar_Adder($tipo,$nombres,$correo,$contraseña){

		$datos = array(
				'tipo' => $tipo,
				'nombres' => $nombres,
				'correo' => $correo,
				'contraseña' => $this->hash_password($contraseña),	
				'JoA' => "Adder"	
				);

		return $this->db->insert('usuarios', $datos);
	}

	// Nos devuelve un objeto usuario según el correo y contraseña que se introduzca.
	public function usuario_por_correo_y_contraseña($correo,$contraseña){
		$this->db->select('idUsuario, correo');
		$this->db->from('usuarios');
		$this->db->where('correo', $correo);
		$this->db->where('contraseña', $contraseña);
		$consulta = $this->db->get();
		$resultado = $consulta->row();
		return $resultado;
	}

	//Función para ver si es un Jobber o Adder
	public function jobber_o_adder($correo){	
		$this->db->from('usuarios');
		$this->db->where('correo', $correo);
		$consulta = $this->db->get();

		foreach ($consulta->result() as $value) {
			$tipo = $value->JoA;
		}
		return $tipo;
		
	}

	private function hash_password($contraseña) {
		return password_hash($contraseña, PASSWORD_BCRYPT);
	} 

	

}