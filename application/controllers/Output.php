<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Output extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_check_in();
    }

    public function index()
    {
        $data['title'] = 'Data Penduduk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['penduduk'] = $this->db->get('penduduk')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('output/index', $data);
        $this->load->view('templates/footer');
    }

    public function delete($nik)
    {
        $this->db->where('nik', $nik);
        $this->db->delete('penduduk');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
        redirect('output');
    }

    public function edit($nik)
    {
        $data['title'] = 'Edit Penduduk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['penduduk'] = $this->db->get_where('penduduk', ['nik' => $nik])->row_array();

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
            $this->load->view('output/edit', $data);
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
            $this->db->where('nik', $nik);
            $this->db->update('penduduk', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
            redirect('output');
        }
    }

    public function detail()
    {
        $data['title'] = 'Detail Penduduk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['penduduk'] = $this->db->get('penduduk')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('output/detail', $data);
        $this->load->view('templates/footer');
    }

    public function suratktp()
    {
        $data['title'] = 'Surat Ktp';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['suratktp'] = $this->db->get('suratktp')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('output/surat-ktp', $data);
        $this->load->view('templates/footer');
    }

    public function ktpdelete($id_surat)
    {
        $this->db->where('id_surat', $id_surat);
        $this->db->delete('suratktp');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
        redirect('output/suratktp');
    }

    public function ktpedit($id_surat)
    {
        $data['title'] = 'Edit Data Surat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['ktp'] = $this->db->get_where('suratktp', ['id_surat' => $id_surat])->row_array();

        $this->form_validation->set_rules('no_surat', 'No_surat', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat', 'required');
        $this->form_validation->set_rules('tgllahir', 'Tgllahir', 'required');
        $this->form_validation->set_rules('jk', 'Jk', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('tglsurat', 'Tglsurat', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('output/edit-ktp', $data);
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
            $this->db->where('id_surat', $id_surat);
            $this->db->update('suratktp', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
            redirect('output/suratktp');
        }
    }

    public function ktpprint($id_surat)
    {
        $data['title'] = 'Print Pengantar Ktp';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['ktp'] = $this->db->get_where('suratktp', ['id_surat' => $id_surat])->row_array();

        $this->load->view('surat/print_suratktp', $data);
    }

    public function surattakmampu()
    {
        $data['title'] = 'Surat Tidak Mampu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['mampu'] = $this->db->get('suratmampu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('output/surat-mampu', $data);
        $this->load->view('templates/footer');
    }

    public function mampudelete($id_surat)
    {
        $this->db->where('id_surat', $id_surat);
        $this->db->delete('suratmampu');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
        redirect('output/surattakmampu');
    }

    public function editmampu($id_surat)
    {
        $data['title'] = 'Edit Data Surat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['mampu'] = $this->db->get_where('suratmampu', ['id_surat' => $id_surat])->row_array();

        $this->form_validation->set_rules('no_surat', 'No_surat', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat', 'required');
        $this->form_validation->set_rules('tgllahir', 'Tgllahir', 'required');
        $this->form_validation->set_rules('jk', 'Jk', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('tglsurat', 'Tglsurat', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('output/edit-mampu', $data);
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
            $this->db->where('id_surat', $id_surat);
            $this->db->update('suratmampu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
            redirect('output/surattakmampu');
        }
    }
    public function mampuprint($id_surat)
    {
        $data['title'] = 'Print SKTM';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['mampu'] = $this->db->get_where('suratmampu', ['id_surat' => $id_surat])->row_array();

        $this->load->view('surat/print_suratmampu', $data);
    }

    public function skck()
    {
        $data['title'] = 'Surat Pengantar SKCK';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['skck'] = $this->db->get('skck')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('output/skck', $data);
        $this->load->view('templates/footer');
    }

    public function skckdelete($id_surat)
    {
        $this->db->where('id_surat', $id_surat);
        $this->db->delete('skck');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
        redirect('output/skck');
    }

    public function editskck($id_surat)
    {
        $data['title'] = 'Edit Data Surat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['skck'] = $this->db->get_where('skck', ['id_surat' => $id_surat])->row_array();

        $this->form_validation->set_rules('no_surat', 'No_surat', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat', 'required');
        $this->form_validation->set_rules('tgllahir', 'Tgllahir', 'required');
        $this->form_validation->set_rules('jk', 'Jk', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('nik', 'Nik', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('tglsurat', 'Tglsurat', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('output/edit-skck', $data);
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
            $this->db->where('id_surat', $id_surat);
            $this->db->update('skck', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
            redirect('output/skck');
        }
    }
    public function skckprint($id_surat)
    {
        $data['title'] = 'Print SKCK';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['skck'] = $this->db->get_where('skck', ['id_surat' => $id_surat])->row_array();

        $this->load->view('surat/print_skck', $data);
    }

    public function nikah()
    {
        $data['title'] = 'Surat Pengantar Nikah';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['nikah'] = $this->db->get('nikah')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('output/nikah', $data);
        $this->load->view('templates/footer');
    }

    public function nikahdelete($id_surat)
    {
        $this->db->where('id_surat', $id_surat);
        $this->db->delete('nikah');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
        redirect('output/nikah');
    }

    public function editnikah($id_surat)
    {
        $data['title'] = 'Edit Data Surat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['nikah'] = $this->db->get_where('nikah', ['id_surat' => $id_surat])->row_array();

        $this->form_validation->set_rules('no_surat', 'No_surat', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat', 'required');
        $this->form_validation->set_rules('tgllahir', 'Tgllahir', 'required');
        $this->form_validation->set_rules('jk', 'Jk', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('negara', 'Negara', 'required');
        $this->form_validation->set_rules('bin', 'Bin', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('tglsurat', 'Tglsurat', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('output/edit-nikah', $data);
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
            $this->db->where('id_surat', $id_surat);
            $this->db->update('nikah', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
            redirect('output/nikah');
        }
    }
    public function nikahprint($id_surat)
    {
        $data['title'] = 'Print Nikah';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['nikah'] = $this->db->get_where('nikah', ['id_surat' => $id_surat])->row_array();

        $this->load->view('surat/print_nikah', $data);
    }
}
