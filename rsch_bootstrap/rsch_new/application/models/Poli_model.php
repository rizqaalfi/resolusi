<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Poli_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    // List all your items
    public function index()
    {
        $this->db->select('*');
        $this->db->from('poli');
        $this->db->order_by('poli_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    // Add a new item
    public function createPoli($data)
    {
        $this->db->insert('poli', $data);
    }

    //Update one item
    public function detailPoli($poli_id)
    {
        $this->db->select('*');
        $this->db->from('poli');
        $this->db->where('poli_id', $poli_id);
        $this->db->order_by('poli_id', 'DESC');
        $query = $this->db->get();
        return $query->row_array();
    }

    //Delete one item
    public function deletePoli($data)
    {
        $this->db->where('poli_id', $data['poli_id']);
        $this->db->delete('poli', $data);
    }

    public function listPoli()
    {
        $this->db->select('*');
        $this->db->from('poli');
        $this->db->order_by('poli_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function editPoli($data)
    {
        $this->db->where('poli_id', $data['poli_id']);
        $this->db->update('poli', $data);
    }
}

/* End of file Controllername.php */
