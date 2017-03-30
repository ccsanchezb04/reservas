<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('loginMod');
		$this->removeCache();
	}

	public function index()
	{
		$this->user		= $this->input->post('user');
		$this->password = $this->input->post('password');

		if ($this->session->userdata('userName')) {
			$estado = $this->session->userdata('userStat');
			if ($estado == "A") {
				redirect(base_url().'bienvenido/', 'refresh');
			}
			else{
				echo "<script>";
				echo "alert('¡Su estado actual es: Inactivo, por lo tanto no puede iniciar sesión!');";
				echo "window.location.replace('".base_url()."login/close')";
				echo "</script>";
			}
		} elseif (($this->user!= '' && $this->password!= '')||($this->user!= 0 && $this->password!= 0)) {
			$this->loginMod->validacion();
		}
		$this->load->view("layouts/header");
		$this->load->view("login");
		$this->load->view("layouts/footer");
	}

	public function close()
	{
		$this->session->sess_destroy();
	    redirect(base_url(),'refresh');
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */