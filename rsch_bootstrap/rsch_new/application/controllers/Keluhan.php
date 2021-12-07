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
				'isi'		=> 'front/keluhan/isi'
			);
			$this->load->view('front/layout/wrapper', $data);
		} else {
			$i = $this->input;
			$data = array(
				'name'		=> $i->post('name'),
				'email'		=> $i->post('email'),
				'email'		=> $i->post('email'),
				'messages'	=> $i->post('messages'),
				'date'		=> $i->post('date'),
			);
			$this->mKeluhans->sendMessage($data);
			$this->session->set_flashdata('sukses', 'Success');
			redirect(base_url('keluhan'));
		}
	}
}
