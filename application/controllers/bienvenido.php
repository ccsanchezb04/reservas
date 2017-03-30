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

	public function mostrarAddReserva()
	{
		$this->load->view('reservas/add_reserva');
	}

	public function addReserva()
	{
		if ($_POST) {
			$cliente = $this->input->post('existe');		
			$docCliente = $this->input->post('clie_id');		
			if ($cliente == false) {
				$oper = $this->principal->addReservaCliente();
			}else {
				$oper = $this->principal->addReserva($docCliente);
			}
			return $oper;	
		}	
	}

	public function buscarCliente()
	{
		if ($_POST) {
			$cliente = $this->principal->cliente($_POST['doc']);
		}
	}

	public function lstReserva()
	{
		$data['reserva'] = $this->principal->reservas();
		$this->load->view('reservas/lst_reserva', $data);
	}
}

/* End of file bienvenida.php */
/* Location: ./application/controllers/bienvenida.php */