<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaduan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_check_in();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['pengaduan'] = $this->db->get('pengaduan')->result_array();

        $data['title'] = 'Pengaduan Masyarakat';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pengaduan/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id_pengaduan)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Detail Pengaduan Masyarakat';
        $data['ngaduan'] = $this->db->get_where('pengaduan', ['id_pengaduan' => $id_pengaduan])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pengaduan/detail', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id_pengaduan)
    {
        $this->db->where('id_pengaduan', $id_pengaduan);
        $this->db->delete('pengaduan');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
        redirect('pengaduan');
    }
}
