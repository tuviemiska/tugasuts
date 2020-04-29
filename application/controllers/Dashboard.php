<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pemesanan');
		$this->load->model('M_lapangan');
	}

	public function index()
	{
		$data['pemesanan'] = $this->M_pemesanan->getPemesanan();
		$data['lapangan'] = $this->M_lapangan->getLapangan();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('template/footer');
	}

	public function tambah()
	{
		$data = array(
			'nama_pemesan' => $this->input->post('nama_pemesan'),
			'lapangan' => $this->input->post('lapangan'),
			'durasi' => $this->input->post('durasi'),
			'harga' => $this->input->post('harga'),
		);


		$this->db->insert('pemesanan', $data);
		$this->session->set_flashdata('info', 'Tambah Data Pemesan Berhasil !');
		redirect('dashboard', 'refresh');
	}

	public function edit()
	{
		$data = array(
			'idadmin' => $this->input->post('idadmin'),
			'nama_pemesan' => $this->input->post('nama_pemesan'),
			'lapangan' => $this->input->post('lapangan'),
			'durasi' => $this->input->post('durasi'),
			'harga' => $this->input->post('harga'),
		);


		$this->db->where('idadmin', $this->input->post('idadmin'));
		$this->db->update('pemesanan', $data);
		$this->session->set_flashdata('info', 'Edit Data Pemesan Berhasil !');
		redirect('dashboard', 'refresh');
	}

	public function hapus($idadmin)
	{
		$this->M_pemesanan->hapusPemesanan($idadmin);
		$this->session->set_flashdata('info', 'Hapus Data Pemesan Berhasil !');
		redirect('dashboard', 'refresh');

	}
}
