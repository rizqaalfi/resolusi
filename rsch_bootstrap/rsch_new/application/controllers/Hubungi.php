<?php
/*
    @Copyright Indra Rukmana
    @Class Name : Home(Front)
	*/
defined('BASEPATH') or exit('No direct script access allowed');

class Hubungi extends CI_Controller
{

	// Main Page Home
	public function index()
	{

		$site  		= $this->mConfig->list_config();
		$infoRs     = $this->mInfoRs->index();

		$data = array(
			'title'		=> 'Hubungi Kami - ' . $site['nameweb'],
			'site'		=> $site,
			'infoRs'	=> $infoRs,
			'isi'		=> 'front/hubungi/isi'
		);
		$this->load->view('front/layout/wrapper', $data);
	}
}
