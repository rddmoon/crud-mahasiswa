<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

  public function __construct(){
    parent::__construct();

    $this->load->model('MahasiswaModel');
  }

  public function index(){
    $data['mahasiswa'] = $this->MahasiswaModel->view();
    $this->load->view('mahasiswa/index', $data);
  }

  public function tambah(){
    if($this->input->post('submit')){
      if($this->MahasiswaModel->validation("save")){
        $this->MahasiswaModel->save();
        redirect('mahasiswa');
      }
    }

    $this->load->view('mahasiswa/form_tambah');
  }

  public function ubah($nim){
    if($this->input->post('submit')){
      if($this->MahasiswaModel->validation("update")){
        $this->MahasiswaModel->edit($nim);
        redirect('mahasiswa');
      }
    }

    $data['mahasiswa'] = $this->MahasiswaModel->view_by($nim);
    $this->load->view('mahasiswa/form_ubah', $data);
  }

  public function hapus($nim){
    $this->MahasiswaModel->delete($nim);
    redirect('mahasiswa');
  }
}
