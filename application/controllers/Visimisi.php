<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Visimisi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_check_in();
    }
    public function index()
    {
        $data['title'] = 'Visi Misi Desa';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['visimisi'] = $this->db->get('visimis')->result_array();

        $this->form_validation->set_rules('visi', 'Visi', 'required');
        $this->form_validation->set_rules('misi', 'Misi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('visimisi/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'visi' => $this->input->post('visi'),
                'misi' => $this->input->post('misi')
            ];
            $this->db->insert('visimis', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil ditambahkan</div>');
            redirect('visimisi');
        }
    }
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('visimis');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
        redirect('visimisi');
    }
    public function edit($id)
    {
        $data['title'] = 'Visimisi Edit';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['id'] = $this->db->get_where('visimis', ['id' => $id])->row_array();

        $this->form_validation->set_rules('visi', 'Visi', 'required');
        $this->form_validation->set_rules('misi', 'Misi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('visimisi/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $visi = $this->input->post('visi');
            $misi = $this->input->post('misi');
            $id = $this->input->post('id');


            $this->db->set('visi', $visi);
            $this->db->set('misi', $misi);
            $this->db->where('id', $id);
            $this->db->update('visimis');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah</div>');
            redirect('visimisi');
        }
    }
}
