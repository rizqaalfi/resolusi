<?php
	/*
    @Copyright Indra Rukmana
    @Class Name : Galeri(Front)
	*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {
	

	public function kamar() {

		$site  		= $this->mConfig->list_config();

		
		$data = array(	'title'		=> 'Fasilitas Kamar - '.$site['nameweb'],
						'site'		=> $site,
						'isi'		=> 'front/fasilitas/kamar');
		$this->load->view('front/layout/wrapper',$data);

	}

	public function umum() {

		$site  		= $this->mConfig->list_config();

		
		$data = array(	'title'		=> 'Fasilitas Umum - '.$site['nameweb'],
						'site'		=> $site,
						'isi'		=> 'front/fasilitas/umum');
		$this->load->view('front/layout/wrapper',$data);

	}
}