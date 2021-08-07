<?php

class Kontak_Model extends CI_model {
    public function get_all_kontak()
    {
        return $this->db->get('kontak')->result_array();
    }

    public function tambahdatakontak()
    {
        $data = [
            "kontak_id" => $this->input->post('kontak_id'),
            "profile_id" => $this->input->post('profile_id'),
            "no_telp" => $this->input->post('no_telp'),
            "instagram" => $this->input->post('instagram'),
            "email" => $this->input->post('email'),
        ];

        $this->db->insert('kontak', $data);
    }

    public function hapusdatakontak($kontak_id)
    {
        $this->db->where('kontak_id', $kontak_id);
        $this->db->delete('kontak');
    }

    public function get_kontak_id($kontak_id)
    {
        return $this->db->get_where('kontak', ['kontak_id'=> $kontak_id])->row_array();
    }

    public function editdatakontak()
    {
        $data = [
            "kontak_id" => $this->input->post('kontak_id'),
            "profile_id" => $this->input->post('profile_id'),
            "no_telp" => $this->input->post('no_telp'),
            "instagram" => $this->input->post('instagram'),
            "email" => $this->input->post('email'),
        ];

        $this->db->where('kontak_id', $this->input->post('kontak_id'));
        $this->db->update('kontak', $data);
    }

    public function caridatakontak()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('kontak_id', $keyword);
        $this->db->or_like('profile_id', $keyword);
        return $this->db->get('kontak')->result_array();
    }
}