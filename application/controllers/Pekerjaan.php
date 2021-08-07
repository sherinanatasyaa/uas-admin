<?php

class Pekerjaan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pekerjaan_Model');
        $this->load->model('Profile_Model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'Daftar Pekerjaan';
        $data['pekerjaan'] = $this->Pekerjaan_Model->get_all_pekerjaan();
        $data['profile'] = $this->Profile_Model->get_all_profile();
        if ($this->input->post('keyword')) {
            $data ['pekerjaan'] = $this->Pekerjaan_Model->caridatapekerjaan();
        }

        $this->load->view('template/header', $data);
        $this->load->view('pekerjaan/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Pekerjaan';

        $this->form_validation->set_rules('pkj_id', 'ID Pekerjaan', 'required');
        $this->form_validation->set_rules('profile_id', 'ID Pegawai', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('waktu', 'Waktu Dedikasi', 'required');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('pekerjaan/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->Pekerjaan_Model->tambahdatapekerjaan();
            $this->session->set_flashdata('flash', 'ditambahkan');
            
            redirect('pekerjaan');
        }
    }

    public function hapus($pkj_id)
    {
        $this->Pekerjaan_Model->hapusdatapekerjaan($pkj_id);
        $this->session->set_flashdata('flash', 'dihapus');

        redirect('pekerjaan');
    }

    public function detail($pkj_id)
    {
        $data['judul'] = "Detail Data Pekerjaan";
        $data['pekerjaan'] = $this->db->get_where('pekerjaan', ['pkj_id' => $pkj_id])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('pekerjaan/detail', $data);
        $this->load->view('template/footer');
    }

    public function edit($pkj_id)
    {
        $data['judul'] = 'Form Edit Data Pekerjaan';
        $data['pekerjaan'] = $this->Pekerjaan_Model->get_pekerjaan_id($pkj_id);
        $data['jabatan'] = ['SPV', 'ADMIN', 'KORLAP', 'SALES'];

        $this->form_validation->set_rules('pkj_id', 'ID Pekerjaan', 'required');
        $this->form_validation->set_rules('profile_id', 'ID Pegawai', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('waktu', 'Waktu Dedikasi', 'required');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('pekerjaan/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->Pekerjaan_Model->editdatapekerjaan();
            $this->session->set_flashdata('flash', 'diedit');

            redirect('pekerjaan');
        }
    }
}