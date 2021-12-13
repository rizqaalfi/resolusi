<?php
/*
    @Copyright Indra Rukmana
    @Class Name : Home(Front)
	*/
defined('BASEPATH') or exit('No direct script access allowed');

class Keluhan extends CI_Controller
{

	// Main Page Home
	public function index()
	{

		$site  		= $this->mConfig->list_config();
		$infoRs     = $this->mInfoRs->index();
		$keluhans = $this->mKeluhans->listKeluhans();

		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules('name', 'Name', 'required');
		$valid->set_rules('email', 'Email', 'required');
		$valid->set_rules('messages', 'Messages', 'required');

		if ($valid->run() === FALSE) {

			$data = array(
				'title'		=> 'Keluhan - ' . $site['nameweb'],
				'site'		=> $site,
				'infoRs'    => $infoRs,
				'keluhan'	=> $keluhans,
				'isi'		=> 'front/keluhan/isi'
			);
			$this->load->view('front/layout/wrapper', $data);
		} else {
			$i = $this->input;
			$data = array(
				'name'		=> $i->post('name'),
				'email'		=> $i->post('email'),
				'messages'	=> $i->post('messages'),

			);
			$this->mKeluhans->sendMessage($data);
			$this->session->set_flashdata('sukses', 'Sukses! Pesan Anda akan ditampilkan setelah mendapat persetujuan dari pihak kami. Terimakasih telah memberikan saran dan masukan :)');
			redirect(base_url('keluhan'));
		}
	}

	public function alur()
	{
		$site  		= $this->mConfig->list_config();
		$galleries 	= $this->mGalleries->listGalleriesPub();
		$infoRs 	= $this->mInfoRs->index();


		$data = array(
			'title'		=> 'Alur pengaduan - ' . $site['nameweb'],
			'site'		=> $site,
			'infoRs'	=> $infoRs,
			'galleries'	=> $galleries,
			'isi'		=> 'front/keluhan/alur'
		);
		$this->load->view('front/layout/wrapper', $data);
	}

	public function hasil()
	{
		$site  		= $this->mConfig->list_config();
		$infoRs 	= $this->mInfoRs->index();

		$data = array(
			'title'		=> 'Hasil Penanganan Pengaduan - ' . $site['nameweb'],
			'site'		=> $site,
			'infoRs'	=> $infoRs,
			'isi'		=> 'front/keluhan/hasil'
		);
		$this->load->view('front/layout/wrapper', $data);
	}
}
