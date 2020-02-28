<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan_model extends CI_Model {
	// Fungsi untuk menampilkan semua data pegawai
	public function view(){
		return $this->db->get('tb_laporan')->result();
	}


	public function savelaporan(){
		$data = array(
			"nama_posko" => $this->input->post('input_posko'),
			"sandang" => $this->input->post('input_sandang'),
			"pangan" => $this->input->post('input_pangan'),
			"papan" => $this->input->post('input_papan'),
			"keterangan" => $this->input->post('input_keterangan'),
			"id_relawan" => $this->input->post('input_relawan')
		);
		
		$this->db->insert('tb_laporan', $data); // Untuk mengeksekusi perintah insert data
	}


	public function historilaporan(){

		$this->db->select('nama_posko, sandang, pangan, papan, keterangan, id_relawan, status');
		$this->db->from('tb_laporan');
		$this->db->where('id_relawan',$this->session->userdata('ses_id'));
		$query = $this->db->get();
    	return $query->result();
	}


	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('tb_laporan'); // Untuk mengeksekusi perintah delete data
	}

	public function validasi($id){
	$this->db->set('status', 'dikirim');
	$this->db->where('id', $id);
	$this->db->update('tb_laporan');
	}
	
	
}
