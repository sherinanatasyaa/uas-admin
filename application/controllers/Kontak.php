<?php

class Kontak extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kontak_Model');
        $this->load->model('Profile_Model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'Daftar Kontak';
        $data['kontak'] = $this->Kontak_Model->get_all_kontak();
        $data['profile'] = $this->Profile_Model->get_all_profile();
        if ($this->input->post('keyword')) {
            $data ['kontak'] = $this->Kontak_Model->caridatakontak();
        }

        $this->load->view('template/header', $data);
        $this->load->view('kontak/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Kontak';

        $this->form_validation->set_rules('kontak_id', 'ID Kontak', 'required');
        $this->form_validation->set_rules('profile_id', 'ID Pegawai', 'required');
        $this->form_validation->set_rules('no_telp', 'Nomor Telp', 'required');
        $this->form_validation->set_rules('instagram', 'Username Instagram', 'required');
        $this->form_validation->set_rules('email', 'Alamat Email', 'required');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('kontak/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->Kontak_Model->tambahdatakontak();
            $this->session->set_flashdata('flash', 'ditambahkan');
            
            redirect('kontak');
        }
    }

    public function hapus($kontak_id)
    {
        $this->Kontak_Model->hapusdatakontak($kontak_id);
        $this->session->set_flashdata('flash', 'dihapus');

        redirect('kontak');
    }

    public function detail($kontak_id)
    {
        $data['judul'] = "Detail Data Kontak";
        $data['kontak'] = $this->db->get_where('kontak', ['kontak_id' => $kontak_id])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('kontak/detail', $data);
        $this->load->view('template/footer');
    }

    public function edit($kontak_id)
    {
        $data['judul'] = 'Form Edit Data Kontak';
        $data['kontak'] = $this->Kontak_Model->get_kontak_id($kontak_id);

        $this->form_validation->set_rules('kontak_id', 'ID Kontak', 'required');
        $this->form_validation->set_rules('profile_id', 'ID Pegawai', 'required');
        $this->form_validation->set_rules('no_telp', 'Nomor Telp', 'required');
        $this->form_validation->set_rules('instagram', 'Username Instagram', 'required');
        $this->form_validation->set_rules('email', 'Alamat Email', 'required');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('kontak/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->Kontak_Model->editdatakontak();
            $this->session->set_flashdata('flash', 'diedit');

            redirect('kontak');
        }
    }
}