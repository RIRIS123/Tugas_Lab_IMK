<?php 

class Mahasiswa_model extends CI_model {
    public function getAllMahasiswa()
    {
        return $this->db->get('data')->result_array();
    }

    public function tambahDataMahasiswa()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nim" => $this->input->post('nim', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "alamat" => $this->input->post('alamat', true),
        ];

        $this->db->insert('data', $data);
    }

    public function hapusDataMahasiswa($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('data', ['id' => $id]);
    }

    public function getMahasiswaById($id)
    {
        return $this->db->get_where('data', ['id' => $id])->row_array();
    }

    public function ubahDataMahasiswa()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nim" => $this->input->post('nim', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "alamat" => $this->input->post('alamat', true),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('data', $data);
    }

    public function cariDataMahasiswa()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('nim', $keyword);
        $this->db->or_like('jenis_kelamin', $keyword);
        $this->db->or_like('alamat', $keyword);
        return $this->db->get('data')->result_array();
    }
}