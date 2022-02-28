<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_check_in();
    }
    public function index()
    {
        $data['title'] = 'Sejarah Desa';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['profile'] = $this->db->get('profile')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('profile/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['profile'] = $this->db->get('profile')->result_array();

        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('profile/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/sejarah/';


            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                $image = $image['file_name'];
                $deskripsi = $this->input->post('deskripsi', TRUE);

                $data = [
                    'deskripsi' => $deskripsi,
                    'image' => $image
                ];
                $this->db->insert('profile', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Upload Berita!</div>');
                redirect('profile');
            } else {
                $deskripsi = $this->input->post('deskripsi', TRUE);
                $data = [
                    'deskripsi' => $deskripsi
                ];

                $this->db->insert('profile', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Tambah data!</div>');
                redirect('profile');
            }
        }
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('profile');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
        redirect('profile');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Data';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['profile'] = $this->db->get_where('profile', ['id' => $id])->row_array();

        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('profile/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/sejarah/';


            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                $image = $image['file_name'];
                $deskripsi = $this->input->post('deskripsi', TRUE);

                $data = [
                    'deskripsi' => $deskripsi,
                    'image' => $image
                ];
                $this->db->update('profile', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mengubah data!</div>');
                redirect('profile');
            } else {
                $deskripsi = $this->input->post('deskripsi', TRUE);
                $data = [
                    'deskripsi' => $deskripsi
                ];

                $this->db->update('profile', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mengubah data!</div>');
                redirect('profile');
            }
        }
    }

    public function struktur()
    {
        $data['title'] = 'Struktur Desa';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['struktur'] = $this->db->get('struktur')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('profile/struktur', $data);
        $this->load->view('templates/footer');
    }

    public function tambahstruk()
    {
        $data['title'] = 'Tambah Data';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['struktur'] = $this->db->get('struktur')->result_array();

        $this->form_validation->set_rules('periode', 'Periode', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('profile/tambahstruk', $data);
            $this->load->view('templates/footer');
        } else {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/struktur/';


            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                $image = $image['file_name'];
                $periode = $this->input->post('periode', TRUE);

                $data = [
                    'periode' => $periode,
                    'image' => $image
                ];
                $this->db->insert('struktur', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Tambah data!</div>');
                redirect('profile/struktur');
            } else {
                $periode = $this->input->post('periode', TRUE);
                $data = [
                    'periode' => $periode
                ];

                $this->db->insert('struktur', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil tambah data!</div>');
                redirect('profile/struktur');
            }
        }
    }

    public function deletestruk($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('struktur');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
        redirect('profile/struktur');
    }

    public function editstruk($id)
    {
        $data['title'] = 'Edit Struktur';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['struktur'] = $this->db->get_where('struktur', ['id' => $id])->row_array();

        $this->form_validation->set_rules('periode', 'Periode', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('profile/editstruk', $data);
            $this->load->view('templates/footer');
        } else {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/struktur/';


            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                $image = $image['file_name'];
                $periode = $this->input->post('periode', TRUE);

                $data = [
                    'periode' => $periode,
                    'image' => $image
                ];
                $this->db->update('struktur', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mengubah data!</div>');
                redirect('profile/struktur');
            } else {
                $periode = $this->input->post('periode', TRUE);
                $data = [
                    'periode' => $periode
                ];

                $this->db->update('struktur', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mengubah data!</div>');
                redirect('profile/struktur');
            }
        }
    }


    public function info()
    {
        $data['title'] = 'Info Desa';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['alamat'] = $this->db->get('alamat')->result_array();

        $this->form_validation->set_rules('icon', 'Icon', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('profile/info', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'icon' => $this->input->post('icon'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat')
            ];
            $this->db->insert('alamat', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
            redirect('profile/info');
        }
    }

    public function deleteinfo($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('alamat');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
        redirect('profile/info');
    }

    public function editinfo($id)
    {
        $data['title'] = 'Info Edit';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['icon'] = $this->db->get_where('alamat', ['id' => $id])->row_array();

        $this->form_validation->set_rules('icon', 'Icon', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('profile/editinfo', $data);
            $this->load->view('templates/footer');
        } else {
            $icon = $this->input->post('icon');
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $id = $this->input->post('id');


            $this->db->set('icon', $icon);
            $this->db->set('nama', $nama);
            $this->db->set('alamat', $alamat);
            $this->db->where('id', $id);
            $this->db->update('alamat');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah</div>');
            redirect('profile/info');
        }
    }
}
