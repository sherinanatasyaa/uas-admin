<?php

class Pekerjaan_Model extends CI_model {
    public function get_all_pekerjaan()
    {
        return $this->db->get('pekerjaan')->result_array();
    }

    public function tambahdatapekerjaan()
    {
        $data = [
            "pkj_id" => $this->input->post('pkj_id'),
            "profile_id" => $this->input->post('profile_id'),
            "jabatan" => $this->input->post('jabatan'),
            "waktu" => $this->input->post('waktu'),
        ];

        $this->db->insert('pekerjaan', $data);
    }

    public function hapusdatapekerjaan($pkj_id)
    {
        $this->db->where('pkj_id', $pkj_id);
        $this->db->delete('pekerjaan');
    }

    public function get_pekerjaan_id($pkj_id)
    {
        return $this->db->get_where('pekerjaan', ['pkj_id'=> $pkj_id])->row_array();
    }

    public function editdatapekerjaan()
    {
        $data = [
            "pkj_id" => $this->input->post('pkj_id'),
            "profile_id" => $this->input->post('profile_id'),
            "jabatan" => $this->input->post('jabatan'),
            "waktu" => $this->input->post('waktu'),
        ];

        $this->db->where('pkj_id', $this->input->post('pkj_id'));
        $this->db->update('pekerjaan', $data);
    }

    public function caridatapekerjaan()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('pkj_id', $keyword);
        $this->db->or_like('profile_id', $keyword);
        $this->db->or_like('jabatan', $keyword);
        return $this->db->get('pekerjaan')->result_array();
    }
}