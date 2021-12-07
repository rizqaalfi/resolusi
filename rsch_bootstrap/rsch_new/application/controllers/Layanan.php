<?php
/*
    @Copyright Indra Rukmana
    @Class Name : Produk(Front)
	*/
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{

	public function penunjang()
	{

		$site  	   = $this->mConfig->list_config();
		$penunjang = $this->mLayanan->penunjang();
		$infoRs    = $this->mInfoRs->index();

		$data = array(
			'title'		=> 'Pelayanan Penunjang - ' . $site['nameweb'],
			'site'		=> $site,
			'penunjang' => $penunjang,
			'infoRs'    => $infoRs,
			'isi'		=> 'front/layanan/penunjang'
		);
		$this->load->view('front/layout/wrapper', $data);
	}


	public function igd()
	{

		$site  		= $this->mConfig->list_config();
		$igd        = $this->mLayanan->igd();
		$infoRs     = $this->mInfoRs->index();

		$data = array(
			'title'		=> 'Instalasi Gawat Darurat - ' . $site['nameweb'],
			'site'		=> $site,
			'igd'       => $igd,
			'infoRs'    => $infoRs,
			'isi'		=> 'front/layanan/igd'
		);
		$this->load->view('front/layout/wrapper', $data);
	}

	public function rawatjalan()
	{

		$site  		= $this->mConfig->list_config();
		$galleries  = $this->mGalleries->listGalleryPubDokter();
		$date	    = $this->mLayanan->jadwal();
		$jadwal 	= $this->mLayanan->listJadwal();
		$info 		= $this->mLayanan->info();
		$infoRs 	= $this->mInfoRs->index();

		$data = array(
			'title'		=> 'Rawat jalan - ' . $site['nameweb'],
			'site'		=> $site,
			'info'    	=> $info,
			'galleries'	=> $galleries,
			'poli'  	=> $this->mLayanan->poli(),
			'jadwal'    => $jadwal,
			'date' 		=> $date,
			'infoRs' 	=> $infoRs,
			'isi'		=> 'front/layanan/rawatjalan'
		);
		$this->load->view('front/layout/wrapper', $data);
	}

	public function dokter()
	{

		$site  		= $this->mConfig->list_config();
		$galleries 	= $this->mGalleries->listGalleryPubDokter();
		$infoRs 	= $this->mInfoRs->index();

		$data = array(
			'title'		=> 'Daftar Dokter - ' . $site['nameweb'],
			'site'		=> $site,
			'galleries'	=> $galleries,
			'infoRs'	=> $infoRs,
			'countGalleries' => $this->mStats->galleriesPublish(),
			'isi'		=> 'front/layanan/rawatjalan_dokter'
		);
		$this->load->view('front/layout/wrapper', $data);
	}

	public function jadwal()
	{

		$site  	= $this->mConfig->list_config();
		$jadwal = $this->mLayanan->listJadwal();
		$date	= $this->mLayanan->jadwal();
		$infoRs = $this->mInfoRs->index();

		$data = array(
			'title'		=> 'Jadwal Dokter - ' . $site['nameweb'],
			'site'		=> $site,
			'jadwal'	=> $jadwal,
			'date'		=> $date,
			'infoRs'	=> $infoRs,
			'isi'		=> 'front/layanan/rawatjalan_jadwal'
		);
		$this->load->view('front/layout/wrapper', $data);
	}

	public function rawatinap()
	{

		$site  		= $this->mConfig->list_config();
		$rawatinap = $this->mLayanan->info_ri();
		$ruang = $this->mLayanan->listGbr();
		$infoRs = $this->mInfoRs->index();

		$data = array(
			'title'		=> 'Rawat Inap - ' . $site['nameweb'],
			'site'		=> $site,
			'rawatinap' => $rawatinap,
			'ruang' 	=> $ruang,
			'infoRs' 	=> $infoRs,
			'isi'		=> 'front/layanan/rawatinap'
		);
		$this->load->view('front/layout/wrapper', $data);
	}

	public function ok()
	{

		$site		= $this->mConfig->list_config();
		$operasi	= $this->mLayanan->ok();
		$infoRs 	= $this->mInfoRs->index();

		$data = array(
			'title'		=> 'Kamar Operasi - ' . $site['nameweb'],
			'site'		=> $site,
			'operasi'   => $operasi,
			'infoRs'    => $infoRs,
			'isi'		=> 'front/layanan/ok'
		);
		$this->load->view('front/layout/wrapper', $data);
	}

	public function icu()
	{

		$site  	= $this->mConfig->list_config();
		$icu 	= $this->mLayanan->icu();
		$infoRs = $this->mInfoRs->index();

		$data = array(
			'title'		=> 'ICU - ' . $site['nameweb'],
			'site'		=> $site,
			'icu'    	=> $icu,
			'infoRs'    => $infoRs,
			'isi'		=> 'front/layanan/icu'
		);
		$this->load->view('front/layout/wrapper', $data);
	}

	public function lab()
	{

		$site  		= $this->mConfig->list_config();
		$penunjang 	= $this->mLayanan->penunjang();
		$infoRs 	= $this->mInfoRs->index();

		$data = array(
			'title'		=> 'Laboratorium - ' . $site['nameweb'],
			'site'		=> $site,
			'penunjang' => $penunjang,
			'infoRs' 	=> $infoRs,
			'isi'		=> 'front/layanan/penunjang'
		);
		$this->load->view('front/layout/wrapper', $data);
	}

	public function patologi()
	{

		$site  		= $this->mConfig->list_config();
		$penunjang 	= $this->mLayanan->penunjang();
		$infoRs 	= $this->mInfoRs->index();

		$data = array(
			'title'		=> 'Laboratorium - ' . $site['nameweb'],
			'site'		=> $site,
			'penunjang' => $penunjang,
			'infoRs' 	=> $infoRs,
			'isi'		=> 'front/layanan/penunjang_patologi'
		);
		$this->load->view('front/layout/wrapper', $data);
	}

	public function biomolekuler()
	{

		$site  		= $this->mConfig->list_config();
		$penunjang 	= $this->mLayanan->penunjang();
		$infoRs 	= $this->mInfoRs->index();

		$data = array(
			'title'		=> 'Laboratorium - ' . $site['nameweb'],
			'site'		=> $site,
			'penunjang' => $penunjang,
			'infoRs' 	=> $infoRs,
			'isi'		=> 'front/layanan/penunjang_biomolekuler'
		);
		$this->load->view('front/layout/wrapper', $data);
	}

	public function radiologi()
	{

		$site  		= $this->mConfig->list_config();
		$penunjang 	= $this->mLayanan->penunjang();
		$infoRs 	= $this->mInfoRs->index();

		$data = array(
			'title'		=> 'Radiologi - ' . $site['nameweb'],
			'site'		=> $site,
			'penunjang' => $penunjang,
			'infoRs' 	=> $infoRs,
			'isi'		=> 'front/layanan/penunjang_radiologi'
		);
		$this->load->view('front/layout/wrapper', $data);
	}

	public function farmasi()
	{

		$site  		= $this->mConfig->list_config();
		$penunjang 	= $this->mLayanan->penunjang();
		$infoRs 	= $this->mInfoRs->index();

		$data = array(
			'title'		=> 'Farmasi - ' . $site['nameweb'],
			'site'		=> $site,
			'penunjang' => $penunjang,
			'infoRs' 	=> $infoRs,
			'isi'		=> 'front/layanan/penunjang_farmasi'
		);
		$this->load->view('front/layout/wrapper', $data);
	}

	public function homecare()
	{

		$site  		= $this->mConfig->list_config();
		$penunjang 	= $this->mLayanan->penunjang();
		$infoRs 	= $this->mInfoRs->index();

		$data = array(
			'title'		=> 'Home Care - ' . $site['nameweb'],
			'site'		=> $site,
			'penunjang' => $penunjang,
			'infoRs' 	=> $infoRs,
			'isi'		=> 'front/layanan/penunjang_homecare'
		);
		$this->load->view('front/layout/wrapper', $data);
	}

	public function medical()
	{

		$site  		= $this->mConfig->list_config();
		$medical 	= $this->mLayanan->medical();
		$infoRs 	= $this->mInfoRs->index();

		$data = array(
			'title'		=> 'Medical Check Up - ' . $site['nameweb'],
			'site'		=> $site,
			'medical'   => $medical,
			'infoRs'    => $infoRs,
			'isi'		=> 'front/layanan/medical'
		);
		$this->load->view('front/layout/wrapper', $data);
	}

	public function psikologi()
	{

		$site  		= $this->mConfig->list_config();
		$psikologi 	= $this->mLayanan->psikologi();
		$infoRs 	= $this->mInfoRs->index();

		$data = array(
			'title'		=> 'Psikologi - ' . $site['nameweb'],
			'site'		=> $site,
			'psikologi' => $psikologi,
			'infoRs' 	=> $infoRs,
			'isi'		=> 'front/layanan/psikologi'
		);
		$this->load->view('front/layout/wrapper', $data);
	}

	// Mutu & Kinerja
	public function mutu()
	{

		$site  		= $this->mConfig->list_config();
		$mutu       = $this->mLayanan->mutu();
		$infoRs 	= $this->mInfoRs->index();

		$data = array(
			'title'		=> 'Mutu & Kinerja - ' . $site['nameweb'],
			'site'		=> $site,
			'mutu'      => $mutu,
			'infoRs'    => $infoRs,
			'isi'		=> 'front/layanan/mutu'
		);
		$this->load->view('front/layout/wrapper', $data);
	}

	// Laser dan Estitika
	public function laser()
	{

		$site  		= $this->mConfig->list_config();
		$laser 		= $this->mLayanan->laser();
		$infoRs 	= $this->mInfoRs->index();

		$data = array(
			'title'		=> 'Laser dan Estetika - ' . $site['nameweb'],
			'site'		=> $site,
			'laser'    	=> $laser,
			'infoRs'    => $infoRs,
			'isi'		=> 'front/layanan/laser'
		);
		$this->load->view('front/layout/wrapper', $data);
	}
}
