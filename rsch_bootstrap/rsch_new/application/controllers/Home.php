<?php
/*
    @Copyright Indra Rukmana
    @Class Name : Home(Front)
	*/
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	// Main Page Home
	public function index()
	{

		$site  		= $this->mConfig->list_config();
		$galleries  = $this->mGalleries->listGalleriesPub();
		$karirs  	= $this->mKarirs->listKarirsPub();
		$artikels	= $this->mInformasi->listArtikelsPub();
		$kegiatans	= $this->mInformasi->listKegiatansPub();
		$infoRs 	= $this->mInfoRs->index();

		$data = array(
			'title'		=> 'Home - ' . $site['nameweb'],
			'site'		=> $site,
			'galleries'	=> $galleries,
			'karirs'	=> $karirs,
			'artikels'	=> $artikels,
			'kegiatans'	=> $kegiatans,
			'infoRs'	=> $infoRs,
			'isi'		=> 'front/home/list'
		);
		$this->load->view('front/layout/wrapper', $data);
	}
}
