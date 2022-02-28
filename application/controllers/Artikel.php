<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_check_in();
    }
    public function index()
    {
        $data['title'] = 'Artikel';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['berita'] = $this->db->get('artikel')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('artikel/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambahberita()
    {
        $data['title'] = 'Upload Berita';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['berita'] = $this->db->get('artikel')->result_array();

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('artikel/tambahberita', $data);
            $this->load->view('templates/footer');
        } else {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/artikel/';


            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                $image = $image['file_name'];
                $judul = $this->input->post('judul', TRUE);
                $deskripsi = $this->input->post('deskripsi', TRUE);

                $data = [
                    'judul' => $judul,
                    'deskripsi' => $deskripsi,
                    'image' => $image
                ];
                $this->db->insert('artikel', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Upload Berita!</div>');
                redirect('artikel');
            } else {
                $judul = $this->input->post('judul', TRUE);
                $deskripsi = $this->input->post('deskripsi', TRUE);
                $data = [
                    'judul' => $judul,
                    'deskripsi' => $deskripsi,
                ];

                $this->db->insert('artikel', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Upload Berita!</div>');
                redirect('artikel');
            }
        }
    }

    public function deleteberita($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('artikel');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
        redirect('artikel');
    }

    public function editberita($id)
    {
        $data['title'] = 'Edit Berita';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['berita'] = $this->db->get_where('artikel', ['id' => $id])->row_array();

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('artikel/editberita', $data);
            $this->load->view('templates/footer');
        } else {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/artikel/';


            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                $image = $image['file_name'];
                $judul = $this->input->post('judul', TRUE);
                $deskripsi = $this->input->post('deskripsi', TRUE);

                $data = [
                    'judul' => $judul,
                    'deskripsi' => $deskripsi,
                    'image' => $image
                ];
                $this->db->where('id', $id);
                $this->db->update('artikel', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mengubah data!</div>');
                redirect('artikel');
            } else {
                $judul = $this->input->post('judul', TRUE);
                $deskripsi = $this->input->post('deskripsi', TRUE);
                $data = [
                    'judul' => $judul,
                    'deskripsi' => $deskripsi,
                ];
                $this->db->where('id', $id);
                $this->db->update('artikel', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mengubah data!</div>');
                redirect('artikel');
            }
        }
    }
}
