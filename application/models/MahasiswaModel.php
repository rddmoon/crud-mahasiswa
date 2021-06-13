<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MahasiswaModel extends CI_Model {
  public function view(){
    return $this->db->get('mahasiswa')->result();
  }

  public function view_by($nrp){
    $this->db->where('nrp', $nrp);
    return $this->db->get('mahasiswa')->row();
  }

  public function validation($mode){
    $this->load->library('form_validation');

    if($mode == "save")
      $this->form_validation->set_rules('input_nrp', 'nrp', 'required|numeric|max_length[14]');

    $this->form_validation->set_rules('input_nama', 'Nama', 'required|max_length[50]');
    $this->form_validation->set_rules('input_jeniskelamin', 'Jenis Kelamin', 'required');
    $this->form_validation->set_rules('input_telepon', 'Telepon', 'required|numeric|max_length[15]');
    $this->form_validation->set_rules('input_alamat', 'Alamat', 'required');
    $this->form_validation->set_rules('input_jurusan', 'jurusan', 'required');

    if($this->form_validation->run())
      return TRUE;
    else
      return FALSE;
  }


  public function save(){
    $data = array(
      "nrp" => $this->input->post('input_nrp'),
      "nama" => $this->input->post('input_nama'),
      "jenis_kelamin" => $this->input->post('input_jeniskelamin'),
      "telepon" => $this->input->post('input_telepon'),
      "alamat" => $this->input->post('input_alamat'),
      "jurusan" => $this->input->post('input_jurusan')
    );

    $this->db->insert('mahasiswa', $data);
  }

  public function edit($nrp){
    $data = array(
      "nama" => $this->input->post('input_nama'),
      "jenis_kelamin" => $this->input->post('input_jeniskelamin'),
      "telepon" => $this->input->post('input_telepon'),
      "alamat" => $this->input->post('input_alamat'),
      "jurusan" => $this->input->post('input_jurusan')
    );

    $this->db->where('nrp', $nrp);
    $this->db->update('mahasiswa', $data);
  }

  public function delete($nrp){
    $this->db->where('nrp', $nrp);
    $this->db->delete('mahasiswa');
  }
}
