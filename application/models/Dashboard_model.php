<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    public function user()
    {
        return $this->db->get("user")->result_array();
    }

    public function get_5_pengajuan_terbaru()
    {
        $this->db->select('*');
        $this->db->from('pengajuan_surat');
        $this->db->order_by('tanggal', 'desc');
        $this->db->limit(5);
        $query = $this->db->get();
        return $query->result();
    }
    public function get_5_penduduk_terbaru()
    {
        $this->db->select('*');
        $this->db->from('penduduk');
        $this->db->order_by('tgl_lhr', 'desc');
        $this->db->limit(5);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_jk_data()
    {
        $query = $this->db->select('jeniskelamin, COUNT(*) as total')
            ->from('biodata')
            ->where_in('jeniskelamin', ['Laki-Laki', 'Perempuan'])
            ->group_by('jeniskelamin')
            ->get();

        return $query->result();
    }

    public function get_suku_data()
    {
        $query = $this->db->select('suku, COUNT(*) as total')
            ->from('biodata')
            ->where_in('suku', ['Papua', 'Non Papua'])
            ->group_by('suku')
            ->get();

        return $query->result();
    }

    public function get_jurusan_data()
    {
        $query = $this->db->select('jurusansmta.namajurusan as jurusan, COUNT(*) as total')
            ->from('biodata')
            ->join('jurusansmta', 'jurusansmta.idjurusansmta = biodata.jurusansmta', 'left')
            ->where('biodata.jurusansmta IS NOT NULL', null, false) // Additional condition to filter out null values
            ->group_by('jurusansmta.namajurusan')
            ->get();

        return $query->result();
    }

    public function get_jenissmta_data()
    {
        $query = $this->db->select('jenissmta.namajenissmta as jenissmta, COUNT(*) as total')
            ->from('biodata')
            ->join('jenissmta', 'jenissmta.idjenissmta = biodata.jenissmta', 'left')
            ->where('biodata.jenissmta IS NOT NULL', null, false) // Additional condition to filter out null values
            ->group_by('jenissmta.namajenissmta')
            ->get();

        return $query->result();
    }

    public function get_pilihanprodi_data()
    {
        $query = $this->db->select('prodi.namaprodi as prodi, COUNT(*) as total')
            ->from('biodata')
            ->join('prodi', 'prodi.idprodi = biodata.prodipilihan1', 'left')
            ->where('biodata.prodipilihan1 IS NOT NULL', null, false)
            ->group_by('prodi.namaprodi')
            ->get();

        return $query->result();
    }
}
