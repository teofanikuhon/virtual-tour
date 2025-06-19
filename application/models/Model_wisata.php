<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_wisata extends CI_Model{
	// Method Masukan Data Wisata
	public function insertWisata(){
		$data = [
			'wst_nama'		=> htmlspecialchars($this->input->post('nama', true)),
			'wst_gambar'	=> $this->upload->data('file_name'),
			'wst_deskripsi'	=> htmlspecialchars($this->input->post('deskripsi', true)),
			'wst_alamat'	=> htmlspecialchars($this->input->post('alamat', true)),
			'wst_maps'		=> $this->input->post('maps', true),
			'wst_kategori'	=> htmlspecialchars($this->input->post('kategori', true)),
		];

		$this->db->insert('wisata', $data);
	}

	// Method Ambil Data Wisata
	public function readWisata($ktgr, $nama){
		if(!empty($ktgr)){
			$this->db->where('wst_kategori', $ktgr);
		}

		if(!empty($nama)){
			$this->db->like('wst_nama', $nama);
			$this->db->or_like('wst_alamat', $nama);
			$this->db->or_like('wst_deskripsi', $nama);
		}
		$this->db->order_by('wst_id', 'desc');
		$query = $this->db->get('wisata');
		return $query->result_array();
	}

	public function readGbrWst(){
		$this->db->order_by('wst_id', 'desc');
		$query = $this->db->get('wisata', 9);
		return $query->result_array();
	}

	// public function searchWisata($ktgr, $nama){
	// 	$this->db->where('wst_kategori', $ktgr);

	// 	$query = $this->db->get('wisata');
	// 	return $query;
	// }

	// Method Ubah Data Wisata
	public function updateWisata($id){
		
		$data = [
			'wst_nama'		=> htmlspecialchars($this->input->post('nama', true)),
			'wst_deskripsi'	=> htmlspecialchars($this->input->post('deskripsi', true)),
			'wst_alamat'	=> htmlspecialchars($this->input->post('alamat', true)),
			'wst_maps'		=> htmlspecialchars($this->input->post('maps', true)),
			'wst_kategori'	=> htmlspecialchars($this->input->post('kategori', true)),
		];
		if(!empty($_FILES['gambar'])){
			$this->db->set('wst_gambar', $this->upload->data('file_name'));
		}
		$this->db->where('wst_id', $id);
		$this->db->update('wisata', $data);
	}

	// Method Hapus Data Wisata
	public function deleteWisata($id){
		$query = $this->db->get_where('wisata', array('wst_id' => $id));
		$gambar = $query->result_array();	
		unlink(FCPATH . 'assets/img/upload/' . $gambar[0]['wst_gambar']);
		$this->db->where('wst_id', $id);
		$this->db->delete('wisata');
	}








}
