<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Visimisi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->helper(array('form', 'url', 'Cookie', 'String'));
        $this->load->library('form_validation');
    }

    public function index()
    {
        $judul = [
            'title' => 'Visi & Misi',
            'sub_title' => 'What makes our school stand out is a clear vision to offer a good value education.'
        ];
        $data['budaya'] = $this->db->get_where('profil', ['kategori' => 'budaya'])->row_array();
        $data['tujuan'] = $this->db->get_where('profil', ['kategori' => 'maksud_dan_tujuan'])->row_array();
        $data['visi'] = $this->db->get_where('profil', ['kategori' => 'visi'])->row_array();
        $data['misi'] = $this->db->get_where('profil', ['kategori' => 'misi'])->row_array();
        $this->load->view('frontend/new_ui/header', $judul);
        $this->load->view('frontend/new_ui/visimisi', $data);
        $this->load->view('frontend/new_ui/footer', $data);
    }
}
