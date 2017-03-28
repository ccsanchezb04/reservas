<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginMod extends CI_Model {

	var $user 	  = "";
	var $password = "";

	public function validacion()
	{
		$this->user		= $this->input->post('user');
		$this->password = $this->input->post('password');

		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('usua_login', $this->user);
		$this->db->where('usua_contrasena', $this->password);

		$query = $this->db->get();			
		
		foreach ($query->result() as $key) 
		{
			$this->session->set_userdata(array('userId'=> $key->usua_id,
											   'userName'=> $key->usua_login,
											   'userStat'=> $key->usua_estado));
		}
		if ($query->num_rows() > 0) 
		{
			redirect(base_url(), 'refresh');
		}
		else
		{
			echo "<script>";
			echo "window.location.replace(".base_url().");";
			echo "alertaFail('¡Usuario/Contraseña Incorrectos!');";
			echo "</script>";
		}
	}

}

/* End of file loginMod.php */
/* Location: ./application/models/loginMod.php */