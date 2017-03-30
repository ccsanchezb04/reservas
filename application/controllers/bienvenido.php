<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bienvenido extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('principal');
		$this->removeCache();
		if ($this->session->userdata('userRole') == '') {
			echo "<script type='text/javascript'>";
            echo "alert('Debe iniciar sesión!');";
            echo "window.location.replace('".base_url()."');";
            echo "</script>";
		}		
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
			if ($cliente == "true") {
				$docCliente = $this->input->post('clie_id');
				$data['oper'] = $this->principal->addReserva($docCliente);
			}else {
				$data['oper'] = $this->principal->addReservaCliente();
			}
			$this->load->view('layouts/header');
			$this->load->view('layouts/alerts', $data);
			$this->load->view('layouts/footer');
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