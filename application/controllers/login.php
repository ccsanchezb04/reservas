<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view("layouts/header");
		$this->load->view("login");
		$this->load->view("layouts/footer");
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */