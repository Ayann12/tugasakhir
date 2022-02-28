<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelayanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_check_in();
    }

    public function index()
    {
        $data['title'] = 'Menu Pelayanan';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['pelayanan'] = $this->db->get('pelayanan')->result_array();

        $this->form_validation->set_rules('icon', 'Icon', 'required');
        $this->form_validation->set_rules('kode_warna', 'Kode_warna', 'required');
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('ket', 'Ket', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pelayanan/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'icon' => $this->input->post('icon'),
                'kode_warna' => $this->input->post('kode_warna'),
                'judul' => $this->input->post('judul'),
                'ket' => $this->input->post('ket')
            ];
            $this->db->insert('pelayanan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
            redirect('pelayanan');
        }
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pelayanan');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
        redirect('pelayanan');
    }

    public function edit($id)
    {
        $data['title'] = 'Info Edit';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['layanan'] = $this->db->get_where('pelayanan', ['id' => $id])->row_array();

        $this->form_validation->set_rules('icon', 'Icon', 'required');
        $this->form_validation->set_rules('kode_warna', 'Kode_warna', 'required');
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('ket', 'Ket', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pelayanan/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'icon' => $this->input->post('icon'),
                'kode_warna' => $this->input->post('kode_warna'),
                'judul' => $this->input->post('judul'),
                'ket' => $this->input->post('ket')
            ];
            $this->db->where('id', $id);
            $this->db->update('pelayanan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah</div>');
            redirect('pelayanan');
        }
    }

    public function caption()
    {
        $data['title'] = 'Caption';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['kata'] = $this->db->get('caption')->result_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('caption', 'Caption', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pelayanan/caption', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'jabatan' => $this->input->post('jabatan'),
                'caption' => $this->input->post('caption'),
            ];
            $this->db->insert('caption', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
            redirect('pelayanan/caption');
        }
    }

    public function deletecaption($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('caption');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
        redirect('pelayanan/caption');
    }

    public function editcaption($id)
    {
        $data['title'] = 'Info Edit';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['kata'] = $this->db->get_where('caption', ['id' => $id])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pelayanan/editcaption', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'jabatan' => $this->input->post('jabatan'),
                'caption' => $this->input->post('caption'),
            ];
            $this->db->where('id', $id);
            $this->db->update('caption', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah</div>');
            redirect('pelayanan/caption');
        }
    }

    public function youtuber()
    {
        $data['title'] = 'Youtuber';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['you'] = $this->db->get('youtuber')->result_array();

        $this->form_validation->set_rules('link', 'Link', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pelayanan/youtuber', $data);
            $this->load->view('templates/footer');
        } else {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/youtube/';


            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                $image = $image['file_name'];
                $link = $this->input->post('link', TRUE);

                $data = [
                    'link' => $link,
                    'image' => $image
                ];
                $this->db->insert('youtuber', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil tambah data!</div>');
                redirect('pelayanan/youtuber');
            } else {
                $link = $this->input->post('link', TRUE);
                $data = [
                    'link' => $link
                ];

                $this->db->insert('youtuber', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil tambah data!</div>');
                redirect('pelayanan/youtuber');
            }
        }
    }

    public function deleteyou($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('youtuber');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
        redirect('pelayanan/youtuber');
    }

    public function edityou($id)
    {
        $data['title'] = 'Edit Youtuber';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['you'] = $this->db->get_where('youtuber', ['id' => $id])->row_array();

        $this->form_validation->set_rules('link', 'Link', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pelayanan/edityou', $data);
            $this->load->view('templates/footer');
        } else {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/youtube/';


            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                $image = $image['file_name'];
                $link = $this->input->post('link', TRUE);

                $data = [
                    'link' => $link,
                    'image' => $image
                ];
                $this->db->where('id', $id);
                $this->db->update('youtuber', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mengubah data!</div>');
                redirect('pelayanan/youtuber');
            } else {
                $link = $this->input->post('link', TRUE);
                $data = [
                    'link' => $link,
                ];
                $this->db->where('id', $id);
                $this->db->update('youtuber', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mengubah data!</div>');
                redirect('pelayanan/youtuber');
            }
        }
    }
}
