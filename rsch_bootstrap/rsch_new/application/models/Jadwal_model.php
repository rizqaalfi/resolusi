<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal_model extends CI_Model
{

  public function __construct()
  {
    $this->load->database();
  }

  // List all your items
  public function index()
  {
    $this->db->select('*');
    $this->db->from('jadwal');
    $this->db->join('poli', 'poli.poli_id = jadwal.poli_id', 'LEFT');
    $this->db->order_by('updated', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }

  // Add a new item
  public function createJadwal($data)
  {
    $this->db->insert('jadwal', $data);
  }

  //Update one item
  public function detailJadwal($jadwal_id)
  {
    $this->db->select('*');
    $this->db->from('jadwal');
    $this->db->where('jadwal_id', $jadwal_id);
    $this->db->order_by('jadwal_id', 'DESC');
    $query = $this->db->get();
    return $query->row_array();
  }

  //Delete one item
  public function deleteJadwal($data)
  {
    $this->db->where('jadwal_id', $data['jadwal_id']);
    $this->db->delete('jadwal', $data);
  }


  public function listJadwal()
  {
    $this->db->select('*');
    $this->db->from('jadwal');
    $this->db->join('poli', 'poli.poli_id = jadwal.poli_id', 'LEFT');
    $this->db->order_by('nama_poli', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function editJadwal($data)
  {
    $this->db->where('jadwal_id', $data['jadwal_id']);
    $this->db->update('jadwal', $data);
  }
}

/* End of file Controllername.php */
