<?php
	/*
    @Copyright Indra Rukmana
    @Class Name : Keluhans
	*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Keluhans extends CI_Controller {
	
	// Inbox Keluhans
	public function inbox() {

		$site  = $this->mConfig->list_config();
		$keluhans = $this->mKeluhans->listKeluhans();
		
		$data = array(	'title'		=> 'Keluhan Masuk - '.$site['nameweb'],
						'keluhans'	=> $keluhans,
						'isi'		=> 'admin/keluhans/list');
		$this->load->view('admin/layout/wrapper',$data);
	}

	// Delete Message
	public function delete($message_id) {
		$data = array('message_id'	=> $message_id);
		$this->mKeluhans->deleteMessage($data);		
		$this->session->set_flashdata('sukses','Success');
		redirect(base_url('admin/keluhans/inbox'));
	}	

	// Edit Saran dan Aduan
	public function edit_message($message_id)
	{

		$message	= $this->mKeluhans->detailMessage($message_id);

		// Validation
		$v = $this->form_validation;
		$v->set_rules('reply', 'Saran dan Aduan', 'required');

		if ($v->run() === FALSE) {

			$data = array(
				'title'    => 'Edit Saran dan Aduan',
				'message'    => $message,
				'isi'    => 'admin/keluhans/edit_list'
			);
			$this->load->view('admin/layout/wrapper', $data);
		} else {

			$i = $this->input;
			if ($i->post('reply') == true) {

				$data = array(
					'message_id'    => $message['message_id'],
					'messages'    => $i->post('messages'),
					'reply'    => $i->post('reply'),
					'status'    => $i->post('status'),

				);
			}

			$data = array(
				'message_id'    => $message['message_id'],
				'messages'    => $i->post('messages'),
				'reply'    => $i->post('reply'),
				'status'    => $i->post('status'),
			);
			$this->mKeluhans->editMessage($data);
			$this->session->set_flashdata('sukses', 'Success');

			redirect(base_url('admin/keluhans/inbox'));
		}
	}

	// Config Hasil
	public function hasil()
	{

		$site = $this->mConfig->list_config();

		$this->form_validation->set_rules('penanganan', 'Hasil Penanganan Pengaduan', 'required');

		if ($this->form_validation->run() === FALSE) {

			$data = array(
				'title'	=> 'Hasil Penanganan - ' . $site['nameweb'],
				'site'	=> $site,
				'isi'	=> 'admin/keluhans/hasil'
			);
			$this->load->view('admin/layout/wrapper', $data);
		} else {

			$i = $this->input;
			$data = array(
				'config_id'	=> $i->post('config_id'),
				'penanganan' => $i->post('penanganan'),
			);
			$this->mConfig->edit_config($data);
			$this->session->set_flashdata('sukses', 'Configuration has updated');
			redirect(base_url('admin/keluhans/hasil'));
		}
	}
}