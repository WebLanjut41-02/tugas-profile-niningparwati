<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_PWL1 extends CI_Controller {

	public function __construct()
{
	parent::__construct();
	
	$this->load->helper('url');
}

	public function index()
	{
		$home = $this->load->view('home');
	}

	public function foto(){
		$this->load->view('foto');
	}

	public function portofolio(){
		$this->load->view('portofolio');
	}

	public function komen(){
		$this->load->view('komen');
	}

	public function komentar(){
		$komentar = $this->input->post('komentar');
		$data['input'] = $komentar;
		$this->load->view('komen', $data);
	}
}

/* End of file c_PWL1.php */
/* Location: ./application/controllers/c_PWL1.php */