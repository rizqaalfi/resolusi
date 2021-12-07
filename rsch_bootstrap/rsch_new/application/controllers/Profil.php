<?php
/*
    @Copyright Indra Rukmana
    @Class Name : Home(Front)
	*/
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

	// Main Page Home
	public function tentang()
	{
		$site  		= $this->mConfig->list_config();
		$tentang  	= $this->mProfil->index_tentang();
		$infoRs 	= $this->mInfoRs->index();

		$data = array(
			'title'		=> 'Tentang RS - ' . $site['nameweb'],
			'site'		=> $site,
			'tentang'	=> $tentang,
			'infoRs'	=> $infoRs,
			'isi'		=> 'front/profil/tentang'
		);
		$this->load->view('front/layout/wrapper', $data);
	}
	public function tentang_nilai()
	{
		$site  		= $this->mConfig->list_config();
		$tentang  	= $this->mProfil->index_tentang();
		$infoRs 	= $this->mInfoRs->index();

		$data = array(
			'title'		=> 'Tentang RS - ' . $site['nameweb'],
			'site'		=> $site,
			'tentang'	=> $tentang,
			'infoRs'	=> $infoRs,
			'isi'		=> 'front/profil/tentang_nilai'
		);
		$this->load->view('front/layout/wrapper', $data);
	}



	public function sambutan()
	{
		$site      	= $this->mConfig->list_config();
		$sambutan 	= $this->mProfil->list_sambutan();
		$infoRs 	= $this->mInfoRs->index();

		$data = array(
			'title'		=> 'Sambutan - ' . $site['nameweb'],
			'sambutan'	=> $sambutan,
			'infoRs'	=> $infoRs,
			'site'		=> $site,
			'isi'		=> 'front/profil/sambutan'
		);
		$this->load->view('front/layout/wrapper', $data);
	}


	public function sejarah()
	{

		$site  		= $this->mConfig->list_config();
		$sejarah 	= $this->mProfil->index_sejarah();
		$infoRs 	= $this->mInfoRs->index();

		$data = array(
			'title'		=> 'Sejarah - ' . $site['nameweb'],
			'site'		=> $site,
			'sejarah'	=> $sejarah,
			'infoRs'	=> $infoRs,
			'isi'		=> 'front/profil/sejarah'
		);
		$this->load->view('front/layout/wrapper', $data);
	}


	public function pejabat()
	{

		$site  		= $this->mConfig->list_config();
		$pejabat    = $this->mProfil->listPejabat();
		$infoRs 	= $this->mInfoRs->index();

		$data = array(
			'title'		=> 'Daftar Pejabat - ' . $site['nameweb'],
			'site'		=> $site,
			'pejabat'   => $pejabat,
			'infoRs'   	=> $infoRs,
			'isi'		=> 'front/profil/pejabat'
		);
		$this->load->view('front/layout/wrapper', $data);
	}


	public function struktur()
	{

		$site  		= $this->mConfig->list_config();
		$struktur 	= $this->mProfil->list_struktur();
		$infoRs 	= $this->mInfoRs->index();

		$data = array(
			'title'		=> 'Struktur Organisasi - ' . $site['nameweb'],
			'site'		=> $site,
			'struktur' 	=> $struktur,
			'infoRs' 	=> $infoRs,
			'isi'		=> 'front/profil/struktur'
		);
		$this->load->view('front/layout/wrapper', $data);
	}
}
