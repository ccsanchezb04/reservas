<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bienvenido extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('principal');		
	}

	public function index()
	{
		$this->load->view('layouts/header');
		$this->load->view('bienvenida');
		$this->load->view('layouts/footer');
	}

	public function addReserva()
	{
		$this->load->view('reservas/add_reserva');
	}

	public function lstReserva()
	{
		$data['reserva'] = $this->principal->reservas();
		$this->load->view('reservas/lst_reserva', $data);
	}
}

/* End of file bienvenida.php */
/* Location: ./application/controllers/bienvenida.php */