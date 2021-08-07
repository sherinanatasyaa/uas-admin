<?php

class Profile extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profile_Model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Pegawai';
        $data['profile'] = $this->Profile_Model->get_all_profile();
        if ($this->input->post('keyword')) {
            $data ['profile'] = $this->Profile_Model->caridataprofile();
        }
        $this->load->view('template/header', $data);
        $this->load->view('profile/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Pegawai';
        
        $this->form_validation->set_rules('profile_id', 'ID Pegawai', 'required');
        $this->form_validation->set_rules('nama', 'Nama Pegawai', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Pegawai', 'required');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('profile/tambah');
            $this->load->view('template/footer');
        } else {
            $this->Profile_Model->tambahdataprofile();
            $this->session->set_flashdata('flash', 'ditambahkan');

            redirect('profile');
        }
    }

    public function hapus($profile_id)
    {
        $this->Profile_Model->hapusdataprofile($profile_id);
        $this->session->set_flashdata('flash', 'dihapus');

        redirect('profile');
    }

    public function detail($profile_id)
    {
        $data['judul'] = 'Detail Data Pegawai';
        $data['profile'] = $this->Profile_Model->get_profile_id($profile_id);

        $this->load->view('template/header', $data);
        $this->load->view('profile/detail', $data);
        $this->load->view('template/footer');
    }

    public function edit($profile_id)
    {
        $data['judul'] = 'Form Edit Data Pegawai';
        $data['profile'] = $this->Profile_Model->get_profile_id($profile_id);
        $data['jk'] = ['Perempuan', 'Laki-Laki'];

        $this->form_validation->set_rules('profile_id', 'ID Pegawai', 'required');
        $this->form_validation->set_rules('nama', 'Nama Pegawai', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Pegawai', 'required');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('profile/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->Profile_Model->editdataprofile();
            $this->session->set_flashdata('flash', 'diedit');

            redirect('profile');
        }
    }
}