<?php

class Pendidikan_Model extends CI_model {
    public function get_all_pendidikan()
    {
        return $this->db->get('pendidikan')->result_array();
    }

    public function tambahdatapendidikan()
    {
        $data = [
            "pend_id" => $this->input->post('pend_id'),
            "profile_id" => $this->input->post('profile_id'),
            "jenjang" => $this->input->post('jenjang'),
            "nama_sekolah" => $this->input->post('nama_sekolah'),
        ];

        $this->db->insert('pendidikan', $data);
    }

    public function hapusdatapendidikan($pend_id)
    {
        $this->db->where('pend_id', $pend_id);
        $this->db->delete('pendidikan');
    }

    public function get_pendidikan_id($pend_id)
    {
        return $this->db->get_where('pendidikan', ['pend_id'=> $pend_id])->row_array();
    }

    public function editdatapendidikan()
    {
        $data = [
            "pend_id" => $this->input->post('pend_id'),
            "profile_id" => $this->input->post('profile_id'),
            "jenjang" => $this->input->post('jenjang'),
            "nama_sekolah" => $this->input->post('nama_sekolah'),
        ];

        $this->db->where('pend_id', $this->input->post('pend_id'));
        $this->db->update('pendidikan', $data);
    }

    public function caridatapendidikan()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('pend_id', $keyword);
        $this->db->or_like('profile_id', $keyword);
        $this->db->or_like('jenjang', $keyword);
        $this->db->or_like('nama_sekolah', $keyword);
        return $this->db->get('pendidikan')->result_array();
    }
}