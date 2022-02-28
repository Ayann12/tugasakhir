<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data['artikel'] = $this->db->get('artikel')->result_array();
        $data['visimisi'] = $this->db->get('visimis')->result_array();
        $data['profile'] = $this->db->get('profile')->result_array();
        $data['struktur'] = $this->db->get('struktur')->result_array();
        $data['alamat'] = $this->db->get('alamat')->result_array();
        $data['pelayanan'] = $this->db->get('pelayanan')->result_array();
        $data['caption'] = $this->db->get('caption')->result_array();
        $data['you'] = $this->db->get('youtuber')->result_array();
        $data['pengaduan'] = $this->db->get('pengaduan')->result_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('home/index', $data);
        } else {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/pengaduan/';


            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                $image = $image['file_name'];
                $nama = $this->input->post('nama', TRUE);
                $email = $this->input->post('email', TRUE);
                $judul = $this->input->post('judul', TRUE);
                $isi = $this->input->post('isi', TRUE);

                $data = [
                    'nama' => $nama,
                    'email' => $email,
                    'judul' => $judul,
                    'isi' => $isi,
                    'image' => $image
                ];
                $this->db->insert('pengaduan', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Mengirim Pengaduan!, Kami ucapkan terimakasih!!</div>');
                redirect('home');
            } else {
                $nama = $this->input->post('nama', TRUE);
                $email = $this->input->post('email', TRUE);
                $judul = $this->input->post('judul', TRUE);
                $message = $this->input->post('message', TRUE);
                $data = [
                    'nama' => $nama,
                    'email' => $email,
                    'judul' => $judul,
                    'isi' => $message
                ];
                $this->db->insert('pengaduan', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Mengirim Pengaduan!, Kami ucapkan terimakasih!!</div>');
                redirect('home');
            }
        }
    }

    public function detail($id)
    {
        $data['title'] = 'Berita detail';
        $data['artikel'] = $this->db->get_where('artikel', ['id' => $id])->row_array();
        $this->load->view('home/detail', $data);
    }
}
