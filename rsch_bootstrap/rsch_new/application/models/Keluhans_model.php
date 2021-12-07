<?php
	/*
    @Copyright Indra Rukmana
    @Class Name : Keluhans Model
	*/
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Keluhans_model extends CI_Model {

        public function __construct() {
            $this->load->database();
        }

        // Listing Keluhans
        public function listKeluhans() {
            $this->db->select('*');
            $this->db->from('keluhans');
            $this->db->order_by('message_id','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

        // Send Message
        public function sendMessage($data) {
            $this->db->insert('keluhans',$data);
        }        

        // Detail Message
        public function detailMessage($message_id) {
            $this->db->select('*');
            $this->db->from('keluhans');
            $this->db->where('message_id',$message_id);
            $this->db->order_by('message_id','DESC');
            $query = $this->db->get();
            return $query->row_array();
        } 

        // Delete Message
        public function deleteMessage($data) {
            $this->db->where('message_id',$data['message_id']);
            $this->db->delete('keluhans',$data);
        }               

    }
