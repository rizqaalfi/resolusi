<?php
/*
    @Copyright Indra Rukmana
    @Class Name : Kegiatans Model
	*/
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatans_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    // Listing Kegiatans
    public function listKegiatans()
    {
        $this->db->select('*');
        $this->db->from('kegiatans');
        $this->db->join('admins', 'admins.admin_id = kegiatans.user_id', 'LEFT');
        $this->db->order_by('kegiatan_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    // Listing Kegiatans Publish
    public function listKegiatansPub()
    {
        $this->db->select('*');
        $this->db->from('kegiatans');
        $this->db->where(array('status' => 'publish'));
        $this->db->join('admins', 'admins.admin_id = kegiatans.user_id', 'LEFT');
        $this->db->order_by('kegiatan_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    // Last Kegiatans Publish
    public function listLastKegiatansPub()
    {
        $this->db->select('*');
        $this->db->from('kegiatans');
        $this->db->where(array('status' => 'publish'));
        $this->db->join('admins', 'admins.admin_id = kegiatans.user_id', 'LEFT');
        $this->db->order_by('kegiatan_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    // Create Kegiatan
    public function createKegiatan($data)
    {
        $this->db->insert('kegiatans', $data);
    }

    // Detail Kegiatan
    public function detailKegiatan($kegiatan_id)
    {
        $this->db->select('*');
        $this->db->from('kegiatans');
        $this->db->where('kegiatan_id', $kegiatan_id);
        $this->db->order_by('kegiatan_id', 'DESC');
        $query = $this->db->get();
        return $query->row_array();
    }

    // Read Kegiatan
    public function readKegiatan($slugKegiatan)
    {
        $this->db->select('*');
        $this->db->from('kegiatans');
        $this->db->where(array('status' => 'publish'));
        $this->db->where('slug_kegiatan', $slugKegiatan);
        $query = $this->db->get();
        return $query->row_array();
    }

    // Edit Kegiatan
    public function editKegiatan($data)
    {
        $this->db->where('kegiatan_id', $data['kegiatan_id']);
        $this->db->update('kegiatans', $data);
    }

    // Delete Kegiatan
    public function deleteKegiatan($data)
    {
        $this->db->where('kegiatan_id', $data['kegiatan_id']);
        $this->db->delete('kegiatans', $data);
    }

    // End Kegiatan
    public function endkegiatan()
    {
        $this->db->select('*');
        $this->db->from('kegiatans');
        $this->db->order_by('kegiatan_id', 'DESC');
        $query = $this->db->get();
        return $query->row_array();
    }

    // Per Page Kegiatans
    public function perPageKegiatans($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('kegiatans');
        $this->db->where(array('status' => 'publish'));
        $this->db->order_by('kegiatan_id', 'ASC');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result_array();
    }

    // Total Kegiatans
    public function totalkegiatans()
    {
        $this->db->select('*');
        $this->db->from('kegiatans');
        $this->db->where(array('status' => 'publish'));
        $this->db->order_by('kegiatan_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    // Pencarian Kegiatan
    public function cariKegiatan($perPage, $uri, $ringkasan)
    {
        $this->db->select('*');
        $this->db->from('kegiatans');
        if (!empty($ringkasan)) {
            $this->db->like('title', $ringkasan);
        }
        $this->db->order_by('kegiatan_id', 'asc');
        $getData = $this->db->get('', $perPage, $uri);

        if ($getData->num_rows() > 0)
            return $getData->result_array();
        else
            return null;
    }

    // Kegiatan Terkait
    public function blogTerkait($category_id)
    {
        $this->db->select('*');
        $data = array();
        $this->db->where('kegiatans.category_id', $category_id);
        $this->db->order_by('kegiatans.kegiatan_id', 'ASC');
        $Q = $this->db->get('kegiatans');
        if ($Q->num_rows() > 0) {
            foreach ($Q->result_array() as $row) {
                $data[] = $row;
            }
        }
        $Q->free_result();
        return $data;
    }
}
