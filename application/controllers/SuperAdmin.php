<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuperAdmin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if (!$this->session->has_userdata('user')) {
			redirect(base_url('autentikasi/index'));
		}
	}

	public function index(){
		// Data Judul
		$data['judul'] = 'Kelola Pengguna';
		// Data Menu Aktif
		$data['menu1'] = '';
		$data['menu2'] = '';
		$data['menu3'] = 'class="active"';
		$data['menu4'] = '';
		// Data User
		$data['user'] = $this->Model_user->getAllUserById($this->session->user);
		$data['users'] = $this->Model_user->getAllUsers();

		$this->load->view('static/header', $data);
		$this->load->view('admin/index');
		$this->load->view('static/footer');
	}

	public function tambah(){
		if( empty($this->db->get_where('users',  array('user_name' => $this->input->post('name')))->result_array()) ){
			$this->Model_user->insertUser();
			$this->session->set_flashdata('pesan', '<div class="callout callout-success"><h4><b>Berhasil !</b></h4> Data User telah dihapus.</div>');
			redirect(base_url('superadmin/index'));
		} else {
			$this->session->set_flashdata('pesan', '<div class="callout callout-danger"><h4><b>Gagal !</b></h4> Username "<u>'.$this->input->post("name").'</u>" sudah tepakai, pilih usename yang lain.</div>');
			redirect(base_url('superadmin/index'));
		}
	}

	public function hapus($id){
		$this->Model_user->deleteUser($id);
		$this->session->set_flashdata('pesan', '<div class="callout callout-success"><h4><b>Berhasil !</b></h4> Data User telah dihapus.</div>');
		redirect(base_url('superadmin/index'));
	}




}