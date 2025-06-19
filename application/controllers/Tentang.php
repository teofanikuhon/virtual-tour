<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if (!$this->session->has_userdata('user')) {
			redirect(base_url('autentikasi/index'));
		}
	}

	// Method Utama
	public function index(){
		// Data Judul
		$data['judul'] = 'Tentang';
		// Data Menu Aktif
		$data['menu1'] = '';
		$data['menu2'] = '';
		$data['menu3'] = '';
		$data['menu4'] = 'class="active"';
		// Data User
		$data['user'] = $this->Model_user->getAllUserById($this->session->user);
		
		$this->load->view('static/header', $data);
		$this->load->view('tentang/index');
		$this->load->view('static/footer');
	}


}