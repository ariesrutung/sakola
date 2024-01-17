<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Identitas_model extends CI_Model
{
    public function simpan_data($data)
    {
        $this->db->insert('identitas', $data);
    }

    public function get_data()
    {
        return $this->db->get('identitas')->result();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('identitas', array('id' => $id))->row_array();
    }

    public function update_data($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('identitas', $data);
    }
}
