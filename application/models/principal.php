<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*// Varables campos tabla clientes
var $clie_id = "";
var $clie_nume_docu = "";
var $clie_nombre = "";
var $clie_email = "";

// Varables campos tabla reserva
var $rese_id = "";
var $rese_clie_id = "";
var $rese_fecha = "";
var $rese_valo_tota = "";
var $rese_observaciones = "";*/

class Principal extends CI_Model {

	public function reservas()
	{
		$this->db->select('rese_fecha,clie_nume_docu,clie_nombre,rese_valo_tota,rese_observaciones');
		$this->db->from('clientes');
		$this->db->join('reserva', 'rese_clie_id = clie_id', 'INNER');
		$this->db->order_by("rese_fecha", "desc");

		$query = $this->db->get();
		return $query->result();
	}

	public function cliente($cliente_nume_doc)
	{
		// echo $cliente_nume_doc;

		$this->db->select('clie_id');
		$this->db->from('clientes');
		$this->db->where('clie_nume_docu',$cliente_nume_doc);

		$query = $this->db->get();
		// return $query->result();
		foreach ($query->result() as $key) {
			$docume = $key->clie_id;
		}
		if ($docume < 0) {
			$bandera = false;
		}
		else {
			$bandera = $docume;
		}
		return $bandera;
	}

	public function addReservaCliente()
	{
		$cliente = array('clie_nume_docu' => $this->input->post('clie_nume_docu'),
						 'clie_nombre'	  => $this->input->post('clie_nombre'),
						 'clie_email'  	  => $this->input->post('clie_email'));
       
	    if (!$this->db->insert('clientes', $cliente)) 
        {        	
            return false;
        }
        else
        {
        	$this->db->select('clie_id');
			$this->db->from('clientes');		
			$this->db->where('clie_nume_doc', $this->input->post('clie_nume_doc'));
			$query = $this->db->get();

			foreach ($query->result() as $key) {
				$clie_id = $key->clie_id;
			}			
        
        	$reserva = array('rese_clie_id' 	  => $clie_id,
							 'rese_fecha'    	  => $this->input->post('rese_fecha'),
							 'rese_valo_tota'     => $this->input->post('rese_valo_tota'),
							 'rese_observaciones' => $this->input->post('rese_observaciones'));

        	$this->db->insert('reserva', $reserva);
            return true;
        }
	}

	public function addReserva($clie_id)
	{
		$reserva1 = array('rese_clie_id' 	   => $clie_id,
						  'rese_fecha'    	   => $this->input->post('rese_fecha'),
						  'rese_valo_tota'     => $this->input->post('rese_valo_tota'),
						  'rese_observaciones' => $this->input->post('rese_observaciones'));

		if (!$this->db->insert('reserva', $reserva1)) 
        {        	
            return false;
        }
        else
        {
        	return true;	
        }
    }
}

/* End of file principal.php */
/* Location: ./application/models/principal.php */