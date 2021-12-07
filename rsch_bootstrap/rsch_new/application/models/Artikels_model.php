<?php
	/*
    @Copyright Indra Rukmana
    @Class Name : Artikels Model
	*/
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Artikels_model extends CI_Model {

        public function __construct() {
            $this->load->database();
        }

        // Listing Artikels
        public function listArtikels() {
            $this->db->select('*');
            $this->db->from('artikels');
            $this->db->join('admins','admins.admin_id = artikels.user_id','LEFT');            
            $this->db->order_by('artikel_id','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

        // Listing Artikels Publish
        public function listArtikelsPub() {
            $this->db->select('*');
            $this->db->from('artikels');
            $this->db->where(array('status' => 'publish'));
            $this->db->join('admins','admins.admin_id = artikels.user_id','LEFT');            
            $this->db->order_by('artikel_id','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

        // Last Artikels Publish
        public function listLastArtikelsPub() {
            $this->db->select('*');
            $this->db->from('artikels');
            $this->db->where(array('status' => 'publish'));
            $this->db->join('admins','admins.admin_id = artikels.user_id','LEFT');            
            $this->db->order_by('artikel_id','DESC');
            $query = $this->db->get();
            return $query->result_array();
        }                

        // Create Artikel
        public function createArtikel($data) {
            $this->db->insert('artikels',$data);
        }

        // Detail Artikel
        public function detailArtikel($artikel_id) {
            $this->db->select('*');
            $this->db->from('artikels');
            $this->db->where('artikel_id',$artikel_id);
            $this->db->order_by('artikel_id','DESC');
            $query = $this->db->get();
            return $query->row_array();
        }

        // Read Artikel
        public function readArtikel($slugArtikel) {
            $this->db->select('*');
            $this->db->from('artikels');
            $this->db->where(array('status' => 'publish'));            
            $this->db->where('slug_artikel',$slugArtikel);
            $query = $this->db->get();
            return $query->row_array();
        }         

        // Edit Artikel
        public function editArtikel($data) {
            $this->db->where('artikel_id',$data['artikel_id']);
            $this->db->update('artikels',$data);
        }           

        // Delete Artikel
        public function deleteArtikel($data) {
            $this->db->where('artikel_id',$data['artikel_id']);
            $this->db->delete('artikels',$data);
        }

        // End Artikel
        public function endartikel() {
            $this->db->select('*');
            $this->db->from('artikels');
            $this->db->order_by('artikel_id','DESC');
            $query = $this->db->get();
            return $query->row_array();
        }

        // Per Page Artikels
        public function perPageArtikels($limit,$start) {
            $this->db->select('*');
            $this->db->from('artikels');
            $this->db->where(array('status' => 'publish'));            
            $this->db->order_by('artikel_id','ASC');
            $this->db->limit($limit,$start);
            $query = $this->db->get();
            return $query->result_array();
        }

        // Total Artikels
        public function totalartikels() {
            $this->db->select('*');
            $this->db->from('artikels');
            $this->db->where(array('status' => 'publish'));            
            $this->db->order_by('artikel_id','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }   

        // Pencarian Artikel
        public function cariArtikel($perPage, $uri, $ringkasan) {
            $this->db->select('*');
            $this->db->from('artikels');                          
            if (!empty($ringkasan)) {
                $this->db->like('title', $ringkasan);
            }
            $this->db->order_by('artikel_id','asc');
            $getData = $this->db->get('', $perPage, $uri);

            if ($getData->num_rows() > 0)
                return $getData->result_array();
            else
                return null;
        }

        // Artikel Terkait
        public function blogTerkait($category_id){
            $this->db->select('*');
            $data = array();
            $this->db->where('artikels.category_id',$category_id);
            $this->db->order_by('artikels.artikel_id','ASC');
            $Q = $this->db->get('artikels');
                if ($Q->num_rows() > 0){
                    foreach ($Q->result_array() as $row){
            $data[] = $row;
                    }
                }
            $Q->free_result();
            return $data;
        }                                                                                      

    }
