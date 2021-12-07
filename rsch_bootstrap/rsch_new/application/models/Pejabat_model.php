<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pejabat_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    // List all your items
    public function index()
    {
        $this->db->select('*');
        $this->db->from('pejabat');
        $this->db->order_by('pejabat_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    // Add a new item
    public function createPejabat($data)
    {
        $this->db->insert('pejabat', $data);
    }

    //Update one item
    public function detailPejabat($pejabat_id)
    {
        $this->db->select('*');
        $this->db->from('pejabat');
        $this->db->where('pejabat_id', $pejabat_id);
        $this->db->order_by('pejabat_id', 'DESC');
        $query = $this->db->get();
        return $query->row_array();
    }

    //Delete one item
    public function deletePejabat($data)
    {
        $this->db->where('pejabat_id', $data['pejabat_id']);
        $this->db->delete('pejabat', $data);
    }

    public function listPejabat()
    {
        $this->db->select('*');
        $this->db->from('pejabat');
        $this->db->order_by('pejabat_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function editPejabat($data)
    {
        $this->db->where('pejabat_id', $data['pejabat_id']);
        $this->db->update('pejabat', $data);
    }
}

/* End of file Controllername.php */
