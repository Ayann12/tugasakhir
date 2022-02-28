<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Input extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_check_in();
        $this->load->model('mdb');
    }

    public function index()
    {
        $data['title'] = 'Input Penduduk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['penduduk'] = $this->db->get('penduduk')->result_array();

        $this->form_validation->set_rules('nik', 'Nik', 'required|trim|is_unique[penduduk.nik]', [
            'is_unique' => 'Nik ini sudah digunakan!!'
        ]);
        $this->form_validation->set_rules('kk', 'KK', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat', 'required');
        $this->form_validation->set_rules('tgllahir', 'Tgllahir', 'required');
        $this->form_validation->set_rules('jk', 'Jk', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('pt', 'Pt', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('notelpon', 'Notelpon', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('input/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nik' => $this->input->post('nik'),
                'kk' => $this->input->post('kk'),
                'nama' => $this->input->post('nama'),
                'tempatlahir' => $this->input->post('tempat'),
                'tgllahir' => $this->input->post('tgllahir'),
                'jenis_kelamin' => $this->input->post('jk'),
                'agama' => $this->input->post('agama'),
                'status' => $this->input->post('status'),
                'pendidikan' => $this->input->post('pt'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'no_telpon' => $this->input->post('notelpon'),
                'alamat' => $this->input->post('alamat')
            ];
            $this->db->insert('penduduk', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan!</div>');
            redirect('output');
        }
    }

    public function suratktp()
    {
        $data['title'] = 'Input Pengantar KTP';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['ktp'] = $this->db->get('suratktp')->result_array();

        $this->form_validation->set_rules('no_surat', 'No_surat', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat', 'required');
        $this->form_validation->set_rules('tgllahir', 'Tgllahir', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('tglsurat', 'Tglsurat', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('input/surat-ktp', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'no_surat' => $this->input->post('no_surat'),
                'nama' => $this->input->post('nama'),
                'tempat_lahir' => $this->input->post('tempat'),
                'tgllahir' => $this->input->post('tgllahir'),
                'jenis_kelamin' => $this->input->post('jk'),
                'agama' => $this->input->post('agama'),
                'status' => $this->input->post('status'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'alamat' => $this->input->post('alamat'),
                'tglsurat' => $this->input->post('tglsurat')
            ];
            $this->db->insert('suratktp', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan!</div>');
            redirect('output/suratktp');
        }
    }

    public function surattidakmampu()
    {
        $data['title'] = 'Input Surat Ket Tidak Mampu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['mampu'] = $this->db->get('suratmampu')->result_array();

        $this->form_validation->set_rules('no_surat', 'No_surat', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat', 'required');
        $this->form_validation->set_rules('tgllahir', 'Tgllahir', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('tglsurat', 'Tglsurat', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('input/surat-mampu', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'no_surat' => $this->input->post('no_surat'),
                'nama' => $this->input->post('nama'),
                'tempat_lahir' => $this->input->post('tempat'),
                'tgllahir' => $this->input->post('tgllahir'),
                'jenis_kelamin' => $this->input->post('jk'),
                'agama' => $this->input->post('agama'),
                'status' => $this->input->post('status'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'alamat' => $this->input->post('alamat'),
                'tglsurat' => $this->input->post('tglsurat')
            ];
            $this->db->insert('suratmampu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan!</div>');
            redirect('output/suratmampu');
        }
    }

    public function skck()
    {
        $data['title'] = 'Pengantar SKCK';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['skck'] = $this->db->get('skck')->result_array();

        $this->form_validation->set_rules('no_surat', 'No_surat', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat', 'required');
        $this->form_validation->set_rules('tgllahir', 'Tgllahir', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('nik', 'Nik', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('tglsurat', 'Tglsurat', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('input/skck', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'no_surat' => $this->input->post('no_surat'),
                'nama' => $this->input->post('nama'),
                'tempat_lahir' => $this->input->post('tempat'),
                'tgllahir' => $this->input->post('tgllahir'),
                'jenis_kelamin' => $this->input->post('jk'),
                'agama' => $this->input->post('agama'),
                'status' => $this->input->post('status'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'nik' => $this->input->post('nik'),
                'alamat' => $this->input->post('alamat'),
                'tglsurat' => $this->input->post('tglsurat')
            ];
            $this->db->insert('skck', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan!</div>');
            redirect('output/skck');
        }
    }
    public function nikah()
    {
        $data['title'] = 'Pengantar Nikah';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['nikah'] = $this->db->get('nikah')->result_array();

        $this->form_validation->set_rules('no_surat', 'No_surat', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat', 'required');
        $this->form_validation->set_rules('tgllahir', 'Tgllahir', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('negara', 'Negara', 'required');
        $this->form_validation->set_rules('bin', 'Bin', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('tglsurat', 'Tglsurat', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('input/nikah', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'no_surat' => $this->input->post('no_surat'),
                'nama' => $this->input->post('nama'),
                'tempat_lahir' => $this->input->post('tempat'),
                'tgllahir' => $this->input->post('tgllahir'),
                'jenis_kelamin' => $this->input->post('jk'),
                'agama' => $this->input->post('agama'),
                'status' => $this->input->post('status'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'negara' => $this->input->post('negara'),
                'nama_bapak' => $this->input->post('bin'),
                'alamat' => $this->input->post('alamat'),
                'tglsurat' => $this->input->post('tglsurat')
            ];
            $this->db->insert('nikah', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan!</div>');
            redirect('output/nikah');
        }
    }
}
