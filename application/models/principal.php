<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Model {

	public function reservas()
	{
		$this->db->select('rese_fecha,clie_nume_docu,clie_nombre,rese_valo_tota,rese_observaciones');
		$this->db->from('clientes');
		$this->db->join('reservas', 'rese_clie_id = clie_id', 'INNER');
		$this->db->order_by("name", "asc");

		$query = $this->db->get();
		var_dump($query);
		return $query->result();
	}
}

/* End of file principal.php */
/* Location: ./application/models/principal.php */