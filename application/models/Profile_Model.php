<?php

class Profile_Model extends CI_model {
    public function get_all_profile()
    {
        return $this->db->get('profile')->result_array();
    }

    public function tambahdataprofile()
    {
        $data = [
            "profile_id" => $this->input->post('profile_id'),
            "nama" => $this->input->post('nama'),
            "tgl_lahir" => $this->input->post('tgl_lahir'),
            "jk" => $this->input->post('jk'),
            "alamat" => $this->input->post('alamat'),
        ];

        $this->db->insert('profile', $data);
    }

    public function hapusdataprofile($profile_id)
    {
        $this->db->where('profile_id', $profile_id);
        $this->db->delete('profile');
    }

    public function get_profile_id($profile_id)
    {
        return $this->db->get_where('profile', ['profile_id'=> $profile_id])->row_array();
    }

    public function editdataprofile()
    {
        $data = [
            "profile_id" => $this->input->post('profile_id'),
            "nama" => $this->input->post('nama'),
            "tgl_lahir" => $this->input->post('tgl_lahir'),
            "jk" => $this->input->post('jk'),
            "alamat" => $this->input->post('alamat'),
        ];

        $this->db->where('profile_id', $this->input->post('profile_id'));
        $this->db->update('profile', $data);
    }

    public function caridataprofile()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('profile_id', $keyword);
        $this->db->or_like('nama', $keyword);
        return $this->db->get('profile')->result_array();
    }
}