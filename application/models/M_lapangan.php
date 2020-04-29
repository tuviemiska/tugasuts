<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lapangan extends CI_Model {

	public function getLapangan()
	{
		return $this->db->get('lapangan')->result();
		
	}
}