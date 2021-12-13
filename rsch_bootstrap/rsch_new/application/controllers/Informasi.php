<?php
/*
    @Copyright Indra Rukmana
    @Class Name : Download(Front)
	*/
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi extends CI_Controller
{
	//rekanan


	//Artikel
	public function artikel()
	{

		$site  		= $this->mConfig->list_config();
		$lastArtikels = $this->mInformasi->listLastArtikelsPub();
		$infoRs = $this->mInfoRs->index();

		$rekanan = $this->mInformasi->listRekananAs();
		$rekanan2 = $this->mInformasi->listRekananNon();
		$rekanan3 = $this->mInformasi->listRekananRs();

		$kegiatans = $this->mInformasi->listLastKegiatansPub();
		$fasilitas = $this->mInformasi->listFasilitas();


		// Pagination
		$this->load->library('pagination');
		$config['base_url'] 		= base_url() . 'informasi/artikel/';
		$config['total_rows'] 		= count($this->mInformasi->totalArtikels());
		$config['use_page_numbers'] = TRUE;
		$config['num_links'] 		= 5;
		$config['uri_segment'] 		= 3;
		$config['per_page'] 		= 10;
		$config['first_url'] 		= base_url() . 'informasi/';
		$this->pagination->initialize($config);
		$page 		= ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) * $config['per_page'] : 0;
		$artikels 	= $this->mInformasi->perPageArtikels($config['per_page'], $page);
		// End Pagination

		$data = array(
			'title'		=> 'Informasi Kesehatan - ' . $site['nameweb'],
			'site'		=> $site,
			'artikels'	=> $artikels,
			'lastArtikels' => $lastArtikels,
			'infoRs'    => $infoRs,
			'rekanan'	=> $rekanan,
			'rekanan2'	=> $rekanan2,
			'rekanan3'	=> $rekanan3,
			'kegiatans' => $kegiatans,
			'fasilitas' => $fasilitas,
			'pagin' 	=> $this->pagination->create_links(),
			'isi'		=> 'front/informasi/info'
		);


		$this->load->view('front/layout/wrapper', $data);
	}

	// detil artikel
	public function detil_artikel($slugArtikel)
	{

		$site  		= $this->mConfig->list_config();
		$artikel 		= $this->mInformasi->readArtikel($slugArtikel);
		$infoRs = $this->mInfoRs->index();

		$data = array(
			'title'		=> $artikel['title'] . ' - ' . $site['nameweb'],
			'site'		=> $site,
			'artikel'   => $artikel,
			'infoRs'   => $infoRs,
			'isi'		=> 'front/informasi/read_artikel'
		);
		$this->load->view('front/layout/wrapper', $data);
	}

	//kegiatan
	public function kegiatan()
	{

		$site  		= $this->mConfig->list_config();
		$infoRs     = $this->mInfoRs->index();

		$lastKegiatans = $this->mInformasi->listLastKegiatansPub();
		$lastArtikels = $this->mInformasi->listLastArtikelsPub(); //tambagan artikel
		// Pagination
		$this->load->library('pagination');
		$config['base_url'] 		= base_url() . 'informasi/kegiatan/';
		$config['total_rows'] 		= count($this->mInformasi->totalKegiatans());

		$config['use_page_numbers'] = TRUE;
		$config['num_links'] 		= 5;
		$config['uri_segment'] 		= 3;
		$config['per_page'] 		= 10;
		$config['first_url'] 		= base_url() . 'informasi/';
		$this->pagination->initialize($config);
		$page 		= ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) * $config['per_page'] : 0;
		$kegiatans 	= $this->mInformasi->perPageKegiatans($config['per_page'], $page);
		$artikels 	= $this->mInformasi->perPageArtikels($config['per_page'], $page);
		// End Pagination

		$data = array(
			'title'		=> 'Kegiatan - ' . $site['nameweb'],
			'site'		=> $site,
			'kegiatans'	=> $kegiatans,
			'lastKegiatans' => $lastKegiatans,
			'artikels'	=> $artikels,
			'infoRs'	=> $infoRs,
			'pagin' 	=> $this->pagination->create_links(),
			'isi'		=> 'front/informasi/kegiatan'
		);


		$this->load->view('front/layout/wrapper', $data);
	}

	// detil Kegiatan
	public function detil_kegiatan($slugKegiatan)
	{

		$site  		= $this->mConfig->list_config();
		$kegiatan 	= $this->mInformasi->readKegiatan($slugKegiatan);
		$infoRs     = $this->mInfoRs->index();

		$data = array(
			'title'		=> $kegiatan['title'] . ' - ' . $site['nameweb'],
			'site'		=> $site,
			'kegiatan'	=> $kegiatan,
			'infoRs'	=> $infoRs,
			'isi'		=> 'front/informasi/read_kegiatan'
		);
		$this->load->view('front/layout/wrapper', $data);
	}

	// fasilitas
	public function fasilitas()
	{

		$site		= $this->mConfig->list_config();
		$fasilitas = $this->mInformasi->listFasilitas();
		$infoRs = $this->mInfoRs->index();

		$data = array(
			'title'		=> 'Informasi Layanan - ' . $site['nameweb'],
			'fasilitas' => $fasilitas,
			'infoRs'    => $infoRs,
			'isi'		=> 'front/informasi/fasilitas'
		);
		$this->load->view('front/layout/wrapper', $data);
	}

	// Layanan (alur)
	public function layanan()
	{

		$site		= $this->mConfig->list_config();
		$layanan = $this->mInformasi->listLayanan();
		$infoRs = $this->mInfoRs->index();

		$data = array(
			'title'		=> 'Informasi Layanan - ' . $site['nameweb'],
			'layanan'   => $layanan,
			'infoRs'    => $infoRs,
			'isi'		=> 'front/informasi/layanan'
		);
		$this->load->view('front/layout/wrapper', $data);
	}

	// hak dan kewajiban
	public function layanan_hak()
	{

		$site		= $this->mConfig->list_config();
		$hak        = $this->mInformasi->listLayanan();
		$infoRs     = $this->mInfoRs->index();

		$data = array(
			'title'		=> 'Informasi Layanan - ' . $site['nameweb'],
			'hak'       => $hak,
			'infoRs'    => $infoRs,
			'isi'		=> 'front/informasi/hakpasien'
		);
		$this->load->view('front/layout/wrapper', $data);
	}

	//Tata Tertib
	public function tatatertib()
	{

		$site   = $this->mConfig->list_config();
		$tatib  = $this->mInformasi->listLayanan();
		$infoRs = $this->mInfoRs->index();

		$data = array(
			'title'		=> 'Tata Tertib Pasien - ' . $site['nameweb'],
			'tatib'	    => $tatib,
			'infoRs'	=> $infoRs,
			'isi'		=> 'front/informasi/tatatertib'
		);
		$this->load->view('front/layout/wrapper', $data);
	}
}
