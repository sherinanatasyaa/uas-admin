<?php

class Pendidikan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pendidikan_Model');
        $this->load->model('Profile_Model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'Daftar Pendidikan';
        $data['pendidikan'] = $this->Pendidikan_Model->get_all_pendidikan();
        $data['profile'] = $this->Profile_Model->get_all_profile();
        if ($this->input->post('keyword')) {
            $data ['pendidikan'] = $this->Pendidikan_Model->caridatapendidikan();
        }

        $this->load->view('template/header', $data);
        $this->load->view('pendidikan/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Pendidikan';

        $this->form_validation->set_rules('pend_id', 'ID Pendidikan', 'required');
        $this->form_validation->set_rules('profile_id', 'ID Pegawai', 'required');
        $this->form_validation->set_rules('jenjang', 'Jenjang', 'required');
        $this->form_validation->set_rules('nama_sekolah', 'Nama Sekolah', 'required');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('pendidikan/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->Pendidikan_Model->tambahdatapendidikan();
            $this->session->set_flashdata('flash', 'ditambahkan');
            
            redirect('pendidikan');
        }
    }

    public function hapus($pend_id)
    {
        $this->Pendidikan_Model->hapusdatapendidikan($pend_id);
        $this->session->set_flashdata('flash', 'dihapus');

        redirect('pendidikan');
    }

    public function detail($pend_id)
    {
        $data['judul'] = "Detail Data Pendidikan";
        $data['pendidikan'] = $this->db->get_where('pendidikan', ['pend_id' => $pend_id])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('pendidikan/detail', $data);
        $this->load->view('template/footer');
    }

    public function edit($pend_id)
    {
        $data['judul'] = 'Form Edit Data Pendidikan';
        $data['pendidikan'] = $this->Pendidikan_Model->get_pendidikan_id($pend_id);
        $data['jenjang'] = ['SD', 'SMP', 'SMA', 'D3', 'S1'];

        $this->form_validation->set_rules('pend_id', 'ID Pendidikan', 'required');
        $this->form_validation->set_rules('profile_id', 'ID Pegawai', 'required');
        $this->form_validation->set_rules('jenjang', 'Jenjang', 'required');
        $this->form_validation->set_rules('nama_sekolah', 'Nama Sekolah', 'required');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('pendidikan/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->Pendidikan_Model->editdatapendidikan();
            $this->session->set_flashdata('flash', 'diedit');

            redirect('pendidikan');
        }
    }
}