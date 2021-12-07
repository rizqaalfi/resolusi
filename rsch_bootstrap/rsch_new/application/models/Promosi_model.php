<?php
/*
    @Copyright Indra Rukmana
    @Class Name : Karirs Model
	*/
defined('BASEPATH') or exit('No direct script access allowed');

class Promosi_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    // Listing Karirs
    public function listPromosi()
    {
        $this->db->select('*');
        $this->db->from('promosi');
        $this->db->order_by('promosi_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    // Create Karir
    public function createPromosi($data)
    {
        $this->db->insert('promosi', $data);
    }

    // Detail Karir
    public function detailPromosi($promosi_id)
    {
        $this->db->select('*');
        $this->db->from('promosi');
        $this->db->where('promosi_id', $promosi_id);
        $this->db->order_by('promosi_id', 'DESC');
        $query = $this->db->get();
        return $query->row_array();
    }

    // Edit Karir
    public function editPromosi($data)
    {
        $this->db->where('promosi_id', $data['promosi_id']);
        $this->db->update('promosi', $data);
    }

    // Delete Karir
    public function deletePromosi($data)
    {
        $this->db->where('promosi_id', $data['promosi_id']);
        $this->db->delete('promosi', $data);
    }

    // End Karir
    public function endPromosi()
    {
        $this->db->select('*');
        $this->db->from('promosi');
        $this->db->order_by('promosi_id', 'DESC');
        $query = $this->db->get();
        return $query->row_array();
    }
}
