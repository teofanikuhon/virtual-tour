<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if (!$this->session->has_userdata('user')) {
			redirect(base_url('autentikasi/index'));
		}
	}

	// Method Utama
	public function index(){
		// Judul
		$data['judul'] = 'Halaman Data Wisata';
		// Menu
		$data['menu1'] = '';
		$data['menu2'] = 'class="active"';
		$data['menu3'] = '';
		$data['menu4'] = '';
		// Data User
		$data['user'] = $this->Model_user->getAllUserById($this->session->user);
		// Data Wisata
		$data['wisata'] = $this->Model_wisata->readWisata('', '');
		// tampilan
		$this->load->view('static/header', $data);
		$this->load->view('wisata/index', $data);
		$this->load->view('static/footer');
	}


	// Method Tambah Data Wisata
	public function tambah(){
		$nama = $this->input->post('kategori').'_'.time();
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['max_size']      = 10048;
        $config['upload_path']   = './assets/tour/img/upload/';
        $config['file_name']	 = $nama;
        $this->upload->initialize($config);

        if ( $this->upload->do_upload('gambar') == TRUE ) {
	    	$this->Model_wisata->insertWisata();
			$this->session->set_flashdata('pesan', '<div class="callout callout-success"><h4><b>Berhasil !</b></h4> Data Tempat Wisata berhasil ditambahkan.</div>');
			redirect(base_url('wisata/index'));
		} else {
			$this->session->set_flashdata('pesan', '<div class="callout callout-danger"><h4><b>Gagal !</b></h4> Ekstensi file tidak diijikan atau Ukuran file terlalu besar.</div>');
			redirect(base_url('wisata/index'));
		}
	}

	// Method Edit Data Wisata
	public function edit($id){
		// var_dump($_FILES['gambar']);die;
		// if(empty($_FILES['gambar']['name'])){
		// 	$this->Model_wisata->updateWisata($id);
		// 	if($this->db->affected_rows() > 0){
		// 		$this->session->set_flashdata('pesan', '<div class="callout callout-success"><h4><b>Berhasil !</b></h4> Data Tempat Wisata berhasil diubah.</div>');
		// 		redirect(base_url('wisata/index'));
		// 	} else {
		// 		$this->session->set_flashdata('pesan', '<div class="callout callout-danger"><h4><b>Gagal !</b></h4> Data Tempat Wisata tidak dapat diubah, coba lagi.</div>');
		// 		redirect(base_url('wisata/index'));
		// 	}
		// } else {
		// 	echo "ada gambar";die;
			$nama = $this->input->post('kategori').'_'.time();
	        $config['allowed_types'] = 'jpeg|jpg|png';
	        $config['max_size']      = '5048';
	        $config['upload_path']   = './assets/tour/img/upload/';
	        $config['file_name']	 = $nama;
	        $this->upload->initialize($config);
	        
	        if ( $this->upload->do_upload('gambar') == TRUE ) {
		        $query = $this->db->get_where('wisata', array('wst_id' => $id));
				$gambar = $query->result_array()[0]['wst_gambar'];
				unlink(FCPATH . 'assets/img/upload/' . $gambar);
				$this->Model_wisata->updateWisata($id);
				$this->session->set_flashdata('pesan', '<div class="callout callout-success"><h4><b>Berhasil !</b></h4> Data Tempat Wisata berhasil diubah.</div>');
				redirect(base_url('wisata/index'));
			} else {
				$this->session->set_flashdata('pesan', '<div class="callout callout-danger"><h4><b>Gagal !</b></h4> Ekstensi file tidak diijikan atau Ukuran file terlalu besar.</div>');
				redirect(base_url('wisata/index'));
			}			
		// }
	}


	// Method Hapus Data Wisata
	public function hapus($id){
		$this->Model_wisata->deleteWisata($id);
		$this->session->set_flashdata('pesan', '<div class="callout callout-success"><h4><b>Berhasil !</b></h4> Data Tempat Wisata telah dihapus.</div>');
		redirect(base_url('wisata/index'));
	}





}