<?php

defined('BASEPATH') or exit('No direct script access allowed');

class InfoRs_model extends CI_Model
{

    public function index()
    {
        $this->db->select('*');
        $this->db->from('infoRs');
        $this->db->order_by('info_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function detail($info_id)
    {
        $this->db->select('*');
        $this->db->from('infoRs');
        $this->db->where('info_id', $info_id);
        $this->db->order_by('info_id', 'DESC');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function edit($data)
    {
        $this->db->where('info_id', $data['info_id']);
        $this->db->update('infoRs', $data);
    }
}
