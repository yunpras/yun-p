<?php 

class Fakultas_model extends CI_Model {
  public function getAllFakultas()
  {
    return $query = $this->db->get('tbl_fakultas')->result_array();
  }

  public function tambahDataFakultas()
  {
    $data = [
      "fakultas" =>$this->input->post('fakultas', true),
      "jurusan" =>$this->input->post('jurusan', true),
      "kaprodi" =>$this->input->post('kaprodi', true),
      "jml_dosen" =>$this->input->post('jumlah-dosen', true),
      "jml_matkul" =>$this->input->post('jumlah-matkul', true),
      "jml_mahasiswa" =>$this->input->post('jumlah-mahasiswa', true),
      "gedung" =>$this->input->post('gedung', true)
    ];

    $this->db->insert('tbl_fakultas', $data);
  }

  public function hapusDataMahasiswa($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('tbl_fakultas');
  }

  public function getFakultasById($id)
  {
    return $this->db->get_where('tbl_fakultas', ['id' => $id])->row_array();
  }

  public function ubahDataFakultas()
  {
    $data = [
      "fakultas" =>$this->input->post('fakultas', true),
      "jurusan" =>$this->input->post('jurusan', true),
      "kaprodi" =>$this->input->post('kaprodi', true),
      "jml_dosen" =>$this->input->post('jumlah-dosen', true),
      "jml_matkul" =>$this->input->post('jumlah-matkul', true),
      "jml_mahasiswa" =>$this->input->post('jumlah-mahasiswa', true),
      "gedung" =>$this->input->post('gedung', true)
    ];
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('tbl_fakultas', $data);
  }
}