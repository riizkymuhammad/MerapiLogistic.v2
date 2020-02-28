<?php
class Relawan extends CI_Controller{
  function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
  }

  function index(){
    $this->load->view('Relawan/v_pengajuan');
  }

  function histori(){
   $this->load->model('Laporan_model');
    $data['tb_laporan'] = $this->Laporan_model->historilaporan();
    $this->load->view('Relawan/v_histori', $data);
  }

   function addlaporan(){
     $data = array(
      "nama_posko" => $this->input->post('nama_posko'),
      "sandang" => $this->input->post('sandang'),
      "pangan" => $this->input->post('pangan'),
      "papan" => $this->input->post('papan'),
      "keterangan" => $this->input->post('keterangan'),
      "id_relawan" => $this->input->post('id_relawan')
      );
      
     $this->db->insert('tb_laporan', $data);
     redirect('relawan/histori','refresh');
    } 
    

  }