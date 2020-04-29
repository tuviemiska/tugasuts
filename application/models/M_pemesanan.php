<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pemesanan extends CI_Model {

	public function getPemesanan()
	{
		$this->db->select('*, (durasi*harga) AS totalharga');
		return $this->db->get('pemesanan')->result();
	}

	public function hapusPemesanan($idadmin)
	{
		$this->db->where('idadmin', $idadmin);
		$this->db->delete('pemesanan');
	}
}