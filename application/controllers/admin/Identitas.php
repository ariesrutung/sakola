<?php
class Identitas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->load->model('Identitas_model');
        if ($this->session->userdata('id_user') == FALSE) {
            redirect(base_url("admin/auth/login"));
        }
    }

    public function index()
    {
        $judul = [
            'title' => 'Identitas Sekolah',
            'sub_title' => ''
        ];

        $data['identitas'] = $this->Identitas_model->get_data();

        $this->load->view('backend/template/header', $judul);
        $this->load->view('backend/identitas/index', $data);
        $this->load->view('backend/template/footer');
    }

    public function edit_data_identitas($id)
    {

        // Periksa apakah $id sudah diatur
        if (!isset($id)) {
            // Tangani kasus ketika $id tidak diatur, misalnya, redirect ke halaman error
            redirect(base_url("admin/error_page"));
        }


        $this->form_validation->set_rules('npsn', 'NPSN', 'required|numeric');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('bentuk_pendidikan', 'Bentuk Pendidikan', 'required');
        $this->form_validation->set_rules('status_kepemilikan', 'Status Kepemilikan', 'required');
        $this->form_validation->set_rules('sk_pendirian', 'SK Pendirian Sekolah', 'required');
        $this->form_validation->set_rules('tgl_sk_pendirian', 'Tanggal SK Pendirian', 'required');
        $this->form_validation->set_rules('sk_izin_operasional', 'SK Izin Operasional', 'required');
        $this->form_validation->set_rules('tgl_sk_izin_operasional', 'Tanggal SK Izin Operasional', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('rt_rw', 'RT/RW', 'required');
        $this->form_validation->set_rules('dusun', 'Dusun', 'required');
        $this->form_validation->set_rules('desa_kelurahan', 'Desa/Kelurahan', 'required');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
        $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required');
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required');
        $this->form_validation->set_rules('kode_pos', 'Kode POS', 'required|numeric');
        $this->form_validation->set_rules('lintang', 'Lintang', 'required');
        $this->form_validation->set_rules('bujur', 'Bujur', 'required');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Edit Identitas Sekolah',
                'sub_title' => ''
            ];


            $data['identitas'] = $this->db->get_where('identitas', ['id' => $id])->row_array();

            $this->load->view('backend/template/header', $judul);
            $this->load->view('backend/identitas/edit_data', $data);
            $this->load->view('backend/template/footer');
        } else {

            $npsn = $this->input->post("npsn", TRUE);
            $status = $this->input->post("status", TRUE);
            $bentuk_pendidikan = $this->input->post("bentuk_pendidikan", TRUE);
            $status_kepemilikan = $this->input->post("status_kepemilikan", TRUE);
            $sk_pendirian = $this->input->post("sk_pendirian", TRUE);
            $tgl_sk_pendirian = $this->input->post("tgl_sk_pendirian", TRUE);
            $sk_izin_operasional = $this->input->post("sk_izin_operasional", TRUE);
            $tgl_sk_izin_operasional = $this->input->post("tgl_sk_izin_operasional", TRUE);
            $alamat = $this->input->post("alamat", TRUE);
            $rt_rw = $this->input->post("rt_rw", TRUE);
            $dusun = $this->input->post("dusun", TRUE);
            $desa_kelurahan = $this->input->post("desa_kelurahan", TRUE);
            $kecamatan = $this->input->post("kecamatan", TRUE);
            $kabupaten = $this->input->post("kabupaten", TRUE);
            $provinsi = $this->input->post("provinsi", TRUE);
            $kode_pos = $this->input->post("kode_pos", TRUE);
            $lintang = $this->input->post("lintang", TRUE);
            $bujur = $this->input->post("bujur", TRUE);

            $update = [
                'npsn' => $npsn,
                'status' => $status,
                'bentuk_pendidikan' => $bentuk_pendidikan,
                'status_kepemilikan' => $status_kepemilikan,
                'sk_pendirian' => $sk_pendirian,
                'tgl_sk_pendirian' => $tgl_sk_pendirian,
                'sk_izin_operasional' => $sk_izin_operasional,
                'tgl_sk_izin_operasional' => $tgl_sk_izin_operasional,
                'alamat' => $alamat,
                'rt_rw' => $rt_rw,
                'dusun' => $dusun,
                'desa_kelurahan' => $desa_kelurahan,
                'kecamatan' => $kecamatan,
                'kabupaten' => $kabupaten,
                'provinsi' => $provinsi,
                'kode_pos' => $kode_pos,
                'lintang' => $lintang,
                'bujur' => $bujur,
            ];

            $this->db->where('id', $id);
            $this->db->update('identitas', $update);

            $this->session->set_flashdata('success', 'Berhasil Diupdate!');
            redirect(base_url("admin/identitas"));
        }
    }
}
