<?php

	class Autentikasi extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->library('form_validation');
		}


		public function index(){
			if ($this->session->has_userdata('user')) {
				redirect(base_url('admin/index'));
			}

			$this->form_validation->set_rules('nip', 'NIP', 'required|trim|min_length[5]');
			$this->form_validation->set_rules('sandi', 'Sandi', 'required|trim|min_length[5]');

			if($this->form_validation->run() == false) {
				$this->load->view('masuk');
			} else {
				$nip = $this->input->post('nip');
				$sandi = $this->input->post('sandi');

				$user = $this->db->get_where('users', ['user_name' => $nip])->row_array();

				if($user){
					if(password_verify($sandi, $user['user_kata_sandi'])){
						$this->session->set_userdata('user', $user['user_name']);
						$this->session->set_userdata('status', $user['user_status']);
						$this->session->set_flashdata('pesan', '<div class="callout callout-success"><h4><b>Berhasil !</b></h4> Anda Berhasil masuk Aplikasi LPeg.</div>');
						redirect(base_url('admin/index'));
					} else {
						$this->session->set_flashdata('pesan', '<div class="callout callout-danger"><h4><b>Gagal !</b></h4> Kata sandi Salah</div>');
						redirect(base_url('autentikasi/index'));
					}
				} else {
					$this->session->set_flashdata('pesan', '<div class="callout callout-danger"><h4><b>Gagal !</b></h4> Nama Pengguna Salah atau belum terdaftar</div>');
					redirect(base_url('autentikasi/index'));
				}
			}
		}

		public function keluar(){
			if (!$this->session->has_userdata('user')) {
				redirect(base_url('autentikasi/index'));
			}

			$this->session->unset_userdata('user');
			$this->session->unset_userdata('status');
			$this->session->set_flashdata('pesan', '<div class="callout callout-success"><h4><b>Berhasil !</b></h4> Anda telah berhasil keluar</div>');
			redirect(base_url('autentikasi/index'));
		}
	}