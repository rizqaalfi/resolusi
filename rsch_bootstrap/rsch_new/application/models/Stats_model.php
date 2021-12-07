<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stats_model extends CI_Model {
	
	public function __construct() {
		$this->load->database();
	}

	// Stat Admins
	public function admins() {
		$query = $this->db->get('admins');
		return $query->num_rows();	
	}

	// Stat Keluhans
	public function keluhans() {
		$query = $this->db->get('keluhans');
		return $query->num_rows();	
	}
	
	// Stat Karirs
	public function karirs() {
		$query = $this->db->get('karirs');
		return $query->num_rows();	
	}	

	// Stat Galleries
	public function galleries() {
		$query = $this->db->get('galleries');
		return $query->num_rows();	
	}	

	// Stat Galleries Publish
	public function galleriesPublish() {
		$query = $this->db->get_where('galleries',array('status' => 'publish'));
		return $query->num_rows();	
	}
	
	// Stat Karirs
	public function artikels() {
		$query = $this->db->get('artikels');
		return $query->num_rows();	
	}
	
	// Stat Kegiatans
	public function kegiatans() {
		$query = $this->db->get('kegiatans');
		return $query->num_rows();	
	}	

}