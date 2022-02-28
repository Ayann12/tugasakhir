<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mdb extends CI_Model
{
    public function cari_judul($nik)
    {
        $this->db->like('nik', $nik);
        $query = $this->db->get('penduduk');
        return $query->result();
    }
}
