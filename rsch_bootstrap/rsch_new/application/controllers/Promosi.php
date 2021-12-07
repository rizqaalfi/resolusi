<?php
/*
    @Copyright Indra Rukmana
    @Class Name : Home(Front)
	*/
defined('BASEPATH') or exit('No direct script access allowed');

class Promosi extends CI_Controller
{

	// Main Page Home
	public function index()
	{

		$site  		= $this->mConfig->list_config();
		$promosi 	= $this->mPromosi->listPromosi();
		$infoRs 	= $this->mInfoRs->index();

		$data = array(
			'title'		=> 'Promosi - ' . $site['nameweb'],
			'site'		=> $site,
			'promosi'   => $promosi,
			'infoRs'    => $infoRs,
			'isi'		=> 'front/promosi/isi'
		);
		$this->load->view('front/layout/wrapper', $data);
	}
}
