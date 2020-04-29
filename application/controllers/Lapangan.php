<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapangan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_lapangan');
	}

	public function index()
	{
		$data['lapangan'] = $this->M_lapangan->getLapangan();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/lapangan', $data);
		$this->load->view('template/footer');
	}
}	