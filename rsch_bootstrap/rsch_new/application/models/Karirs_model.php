<?php
/*
    @Copyright Indra Rukmana
    @Class Name : Karirs Model
	*/
defined('BASEPATH') or exit('No direct script access allowed');

class Karirs_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    // Listing Karirs
    public function listKarirs()
    {
        $this->db->select('*');
        $this->db->from('karirs');
        $this->db->join('admins', 'admins.admin_id = karirs.user_id', 'LEFT');
        $this->db->order_by('karir_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    // Listing Karirs Publish
    public function listKarirsPub()
    {
        $this->db->select('*');
        $this->db->from('karirs');
        $this->db->where(array('status' => 'publish'));
        $this->db->join('admins', 'admins.admin_id = karirs.user_id', 'LEFT');
        $this->db->order_by('karir_id', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    // Last Karirs Publish
    public function listLastKarirsPub()
    {
        $this->db->select('*');
        $this->db->from('karirs');
        $this->db->where(array('status' => 'publish'));
        $this->db->join('admins', 'admins.admin_id = karirs.user_id', 'LEFT');
        $this->db->order_by('karir_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    // Create Karir
    public function createKarir($data)
    {
        $this->db->insert('karirs', $data);
    }

    // Detail Karir
    public function detailKarir($karir_id)
    {
        $this->db->select('*');
        $this->db->from('karirs');
        $this->db->where('karir_id', $karir_id);
        $this->db->order_by('karir_id', 'DESC');
        $query = $this->db->get();
        return $query->row_array();
    }

    // Read Karir
    public function readKarir($slugKarir)
    {
        $this->db->select('*');
        $this->db->from('karirs');
        $this->db->where(array('status' => 'publish'));
        $this->db->where('slug_karir', $slugKarir);
        $query = $this->db->get();
        return $query->row_array();
    }

    // Edit Karir
    public function editKarir($data)
    {
        $this->db->where('karir_id', $data['karir_id']);
        $this->db->update('karirs', $data);
    }

    // Delete Karir
    public function deleteKarir($data)
    {
        $this->db->where('karir_id', $data['karir_id']);
        $this->db->delete('karirs', $data);
    }

    // End Karir
    public function endkarir()
    {
        $this->db->select('*');
        $this->db->from('karirs');
        $this->db->order_by('karir_id', 'DESC');
        $query = $this->db->get();
        return $query->row_array();
    }

    // Per Page Karirs
    public function perPageKarirs($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('karirs');
        $this->db->where(array('status' => 'publish'));
        $this->db->order_by('karir_id', 'ASC');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result_array();
    }

    // Total Karirs
    public function totalkarirs()
    {
        $this->db->select('*');
        $this->db->from('karirs');
        $this->db->where(array('status' => 'publish'));
        $this->db->order_by('karir_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    // Pencarian Karir
    public function cariKarir($perPage, $uri, $ringkasan)
    {
        $this->db->select('*');
        $this->db->from('karirs');
        if (!empty($ringkasan)) {
            $this->db->like('title', $ringkasan);
        }
        $this->db->order_by('karir_id', 'asc');
        $getData = $this->db->get('', $perPage, $uri);

        if ($getData->num_rows() > 0)
            return $getData->result_array();
        else
            return null;
    }

    // Karir Terkait
    public function blogTerkait($category_id)
    {
        $this->db->select('*');
        $data = array();
        $this->db->where('karirs.category_id', $category_id);
        $this->db->order_by('karirs.karir_id', 'ASC');
        $Q = $this->db->get('karirs');
        if ($Q->num_rows() > 0) {
            foreach ($Q->result_array() as $row) {
                $data[] = $row;
            }
        }
        $Q->free_result();
        return $data;
    }


    // content
    public function listContent()
    {
        $this->db->select('*');
        $this->db->from('content_karir');
        $this->db->order_by('id_ck', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function listKey()
    {
        $this->db->select('*');
        $this->db->from('karirs');
        $this->db->order_by('karir_id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }



    public function createContent($data)
    {
        $this->db->insert('content_karir', $data);
    }


    public function detailContent($karir_id)
    {
        $this->db->select('*');
        $this->db->from('content_karir');
        $this->db->where('id_ck', $karir_id);
        $this->db->order_by('id_ck', 'DESC');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function updateContent($data)
    {
        $this->db->where('id_ck', $data['id_ck']);
        $this->db->update('content_karir', $data);
    }

    // Delete Karir
    public function deleteContent($data)
    {
        $this->db->where('id_ck', $data['id_ck']);
        $this->db->delete('content_karir', $data);
    }
}
