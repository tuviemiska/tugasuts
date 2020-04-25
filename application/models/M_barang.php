<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model {

	public function getBarang()
	{
		return $this->db->get('barang')->result();
	}
}