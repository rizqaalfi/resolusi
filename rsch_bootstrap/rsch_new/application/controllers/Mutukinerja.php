<?php
	/*
    @Copyright Indra Rukmana
    @Class Name : Home(Front)
	*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Mutukinerja extends CI_Controller {

	// Main Page Home
	public function index() {

		$site  		= $this->mConfig->list_config();

		$data = array(	'title'		=> 'Mutu dan Kinerja - '.$site['nameweb'],
						'site'		=> $site,
						'isi'		=> 'front/mutukinerja/isi');
		$this->load->view('front/layout/wrapper',$data);
	}
}
