<?php
class Admin extends CI_Controller{
  function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
  }

  function index(){
    $this->load->model('Relawan_model');
    $this->load->model('Gambarmodel');
    $data['tb_staf'] = $this->Relawan_model->view();
    $data['sum_jumlah'] = $this->Gambarmodel->get_sum();
    $this->load->view('admin/v_dashboard', $data);
  }

  function hitung(){
    $this->load->model('Relawan_model');
    $this->load->model('Gambarmodel');
    $data['tb_staf'] = $this->Relawan_model->view();
    $data['sum_jumlah'] = $this->Gambarmodel->get_sum();
    $this->load->view('admin/hitung', $data);
  }
  public function hasil2(){
    $this->load->view('admin/hasil3');
  }


   function pengajuan(){
      $this->load->model('Laporan_model');
      $data['tb_laporan'] = $this->Laporan_model->view();
      $this->load->view('admin/v_pengajuan', $data);
    }

    function donasi2(){
      $this->load->model('Gambarmodel');
      $data['gambar'] = $this->Gambarmodel->view();
       $data['sum_jumlah'] = $this->Gambarmodel->get_sum();
      $this->load->view('admin/v_donasi', $data);
    }

    function addrelawan(){
      $this->load->model('relawan_model');
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
        $this->relawan_model->save(); // Panggil fungsi save() yang ada di PegawaiModel.php
        redirect('admin');
      }
    $this->load->view('admin/v_addrelawan2');
    }


   public function hapus($id){
    $this->load->model('gambarmodel');
    $this->gambarmodel->delete($id); // Panggil fungsi delete() yang ada di PegawaiModel.php
    redirect('admin/donasi2');
  }

  public function valid($id){
    $this->load->model('gambarmodel');
    $this->gambarmodel->validasi($id); // Panggil fungsi delete() yang ada di PegawaiModel.php
    redirect('admin/donasi2');
  }


   public function hapuslaporan($id){
    $this->load->model('laporan_model');
    $this->laporan_model->delete($id); // Panggil fungsi delete() yang ada di PegawaiModel.php
    redirect('admin/pengajuan');
  }

  public function kirim($id){
    $this->load->model('laporan_model');
    $this->laporan_model->validasi($id); // Panggil fungsi delete() yang ada di PegawaiModel.php
    redirect('admin/pengajuan');
  }

  public function hapusrelawan($id){
    $this->load->model('relawan_model');
    $this->relawan_model->delete($id); // Panggil fungsi delete() yang ada di PegawaiModel.php
    redirect('admin/index');
  }


  public function ubah($id){
     $this->load->model('relawan_model');
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
        $this->relawan_model->edit($id); // Panggil fungsi edit() yang ada di SiswaModel.php
        redirect('admin/index');
      }

      function hitung(){
      $this->load->model('Laporan_model');
      $data['tb_laporan'] = $this->Laporan_model->view();
      $this->load->view('admin/hitung', $data);
    }
    


    $data['tb_staf'] = $this->relawan_model->view_by($id);
    $this->load->view('admin/v_ubahrelawan', $data);
  }

// function update(){
//   $id = $this->input->post('id');
//   $nama = $this->input->post('nama');
//   $alamat = $this->input->post('alamat');
//   $no_hp = $this->input->post('no_hp');
//   $username = $this->input->post('username');
//   $password = $this->input->post('password');
//   $level = $this->input->post('level');
 
//   $data = array(
//     'nama' => $nama,
//     'alamat' => $alamat,
//     'no_hp' => $no_hp,
//     'username' => $username,
//     'password' => $password,
//     'level' => $level
//   );
 
//   $where = array(
//     'id' => $id
//   );
 
//   $this->relawan_model->update_data($where,$data,'tb_staf');
//   redirect('admin/index');
// }

  
}


  