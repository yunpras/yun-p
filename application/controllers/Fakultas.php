<?php 

class Fakultas extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Fakultas_model');
    $this->load->library('form_validation');
  }
  public function index() 
  {
    $data['judul'] = 'Fakultas Esa Unggul';
    $data['fakultas'] =$this->Fakultas_model->getAllFakultas();
    $this->load->view('templates/header', $data);
    $this->load->view('fakultas/index');
    $this->load->view('templates/footer');
  }
  public function tambah()
  {
    $data['judul'] = 'Form Tambah Data Fakultas';
    $this->form_validation->set_rules('fakultas','Fakultas','required');
    $this->form_validation->set_rules('jurusan','Jurusan','required');
    $this->form_validation->set_rules('kaprodi','Kaprodi','required');
    $this->form_validation->set_rules('jumlah-dosen','Jumlah Dosen','required');
    $this->form_validation->set_rules('jumlah-matkul','Jumlah Matkul','required');
    $this->form_validation->set_rules('jumlah-mahasiswa','Jumlah Mahasiswa','required');
    $this->form_validation->set_rules('gedung','Gedung','required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('fakultas/tambah');
      $this->load->view('templates/footer');

    } else {
      $this->Fakultas_model->tambahDataFakultas();
      $this->session->set_flashdata('flash', 'Ditambahkan');
      redirect('fakultas');
    }
  }

  public function hapus($id)
  {
    $this->Fakultas_model->hapusDataMahasiswa($id);
    $this->session->set_flashdata('flash','Dihapus');
    redirect('fakultas');
  }
  public function detail($id)
  {
    $data['judul'] = 'Detail Fakultas';
    $data['fakultas'] = $this->Fakultas_model->getFakultasById($id);
    $this->load->view('templates/header', $data);
    $this->load->view('fakultas/detail', $data);
    $this->load->view('templates/footer');

  }

  public function ubah($id)
  {
    $data['judul'] = 'Form Ubah Data Fakultas';
    $data['fakultas'] = $this->Fakultas_model->getFakultasById($id);
    $this->form_validation->set_rules('fakultas','Fakultas','required');
    $this->form_validation->set_rules('jurusan','Jurusan','required');
    $this->form_validation->set_rules('kaprodi','Kaprodi','required');
    $this->form_validation->set_rules('jumlah-dosen','Jumlah Dosen','required');
    $this->form_validation->set_rules('jumlah-matkul','Jumlah Matkul','required');
    $this->form_validation->set_rules('jumlah-mahasiswa','Jumlah Mahasiswa','required');
    $this->form_validation->set_rules('gedung','Gedung','required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('fakultas/ubah', $data);
      $this->load->view('templates/footer');

    } else {
      $this->Fakultas_model->ubahDataFakultas();
      $this->session->set_flashdata('flash', 'Ubah');
      redirect('fakultas');
    }
  }
}