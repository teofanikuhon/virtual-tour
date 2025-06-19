<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pesan extends CI_Model{
	public function insertEmail($data){
		$databaru = [
			'psn_nama' => $data['nama'],
			'psn_nohp' => $data['tlpn'],
			'psn_email' => $data['email'],
			'psn_isi' => $data['pesan']
		];

		$this->db->insert('pesan', $databaru);
	}

	public function readEmail(){
		$this->db->get('pesan');
	}

	public function deleteEmail($id){
		$this->db->where('psn_id', $id);
		$this->db->delete('pesan');
	}






}