<?php

defined('BASEPATH') or exit('No direct script access allowed');

class profil_model extends CI_Model
{

  public function __construct()
  {
    $this->load->database();
  }

  // for page sejarah  
  // List all your items
  public function index_sejarah()
  {
    $this->db->select('*');
    $this->db->from('sejarah');
    $this->db->order_by('sejarah_id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }

  //Update one item
  public function detailsejarah($sejarah_id)
  {
    $this->db->select('*');
    $this->db->from('sejarah');
    $this->db->where('sejarah_id', $sejarah_id);
    $this->db->order_by('sejarah_id', 'DESC');
    $query = $this->db->get();
    return $query->row_array();
  }

  public function editsejarah($data)
  {
    $this->db->where('sejarah_id', $data['sejarah_id']);
    $this->db->update('sejarah', $data);
  }
  //end sejarah

  //for page tentang
  public function index_tentang()
  {
    $this->db->select('*');
    $this->db->from('tentang');
    $this->db->order_by('tentang_id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }

  // Add a new item
  public function create_tentang($data)
  {
    $this->db->insert('tentang', $data);
  }

  //Update one item
  public function detail_tentang($tentang_id)
  {
    $this->db->select('*');
    $this->db->from('tentang');
    $this->db->where('tentang_id', $tentang_id);
    $this->db->order_by('tentang_id', 'DESC');
    $query = $this->db->get();
    return $query->row_array();
  }

  //Delete one item
  public function delete_tentang($data)
  {
    $this->db->where('tentang_id', $data['tentang_id']);
    $this->db->delete('tentang', $data);
  }


  public function list_tentang()
  {
    $this->db->select('*');
    $this->db->from('tentang');
    $this->db->order_by('tentang_id', 'ASC');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function edit_tentang($data)
  {
    $this->db->where('tentang_id', $data['tentang_id']);
    $this->db->update('tentang', $data);
  }
  //end tentang

  // page sambutan
  public function list_sambutan() {
    $this->db->select('*');
    $this->db->from('sambutan');                       
    $this->db->order_by('sambutan_id','ASC');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function create_sambutan($data) {
    $this->db->insert('sambutan',$data);
  }

  public function detail_sambutan($sambutan_id) {
    $this->db->select('*');
    $this->db->from('sambutan');
    $this->db->where('sambutan_id',$sambutan_id);
    $this->db->order_by('sambutan_id','DESC');
    $query = $this->db->get();
    return $query->row_array();
  } 

  public function edit_sambutan($data) {
    $this->db->where('sambutan_id',$data['sambutan_id']);
    $this->db->update('sambutan',$data);
  }            

  public function delete_sambutan($data) {
    $this->db->where('sambutan_id',$data['sambutan_id']);
    $this->db->delete('sambutan',$data);
  }
  //end sambutan
  
  // page strutur
  public function list_struktur() {
    $this->db->select('*');
    $this->db->from('struktur');                       
    $this->db->order_by('struktur_id','ASC');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function create_struktur($data) {
    $this->db->insert('struktur',$data);
  }

  public function detail_struktur($struktur_id) {
    $this->db->select('*');
    $this->db->from('struktur');
    $this->db->where('struktur_id',$struktur_id);
    $this->db->order_by('struktur_id','DESC');
    $query = $this->db->get();
    return $query->row_array();
  } 

  public function edit_struktur($data) {
    $this->db->where('struktur_id',$data['struktur_id']);
    $this->db->update('struktur',$data);
  }            

  public function delete_struktur($data) {
    $this->db->where('struktur_id',$data['struktur_id']);
    $this->db->delete('struktur',$data);
  }
  // end struktur
  
  //pejabat
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
  //end pejabat
}

/* End of file Controllername.php */
