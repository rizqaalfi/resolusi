<?php
/*
    @Copyright Indra Rukmana
    @Class Name : Keluhans
	*/
defined('BASEPATH') or exit('No direct script access allowed');

class Keluhans extends CI_Controller
{

	// Inbox Keluhans
	public function inbox()
	{

		$site  = $this->mConfig->list_config();
		$keluhans = $this->mKeluhans->listKeluhans();

		$data = array(
			'title'		=> 'Keluhan Masuk - ' . $site['nameweb'],
			'keluhans'	=> $keluhans,
			'isi'		=> 'admin/keluhans/list'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Delete Message
	public function delete($message_id)
	{
		$data = array('message_id'	=> $message_id);
		$this->mKeluhans->deleteMessage($data);
		$this->session->set_flashdata('sukses', 'Success');
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


	// Survey Kepuasan Pasien Rawat Jalan
	public function surveyRj()
	{
		$site  = $this->mConfig->list_config();
		$surveyRj = $this->mKeluhans->surveyRj();

		$data = array(
			'title'        => 'Survey Kepuasan RJ - ' . $site['nameweb'],
			'surveyRj'        => $surveyRj,
			'isi'        => 'admin/keluhans/surveyRj/list'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	public function detail_surveyRj($respon_id)
	{
		$surveyRj  = $this->mKeluhans->detailSurveyRj($respon_id);
		$site    = $this->mConfig->list_config();

		$data = array(
			'title'    => 'Detail Survey - ' . $surveyRj['responden_name'],
			'surveyRj'    => $surveyRj,
			'isi'    => 'admin/keluhans/surveyRj/detail'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	public function delete_surveyRj($respon_id)
	{
		$data = array('respon_id'	=> $respon_id);
		$this->mKeluhans->deleteSurveyRj($data);
		$this->session->set_flashdata('sukses', 'Success');
		redirect(base_url('admin/keluhans/surveyRj/list'));
	}

	public function chartSurveyRj()
	{
		$site  = $this->mConfig->list_config();
		$chartSurveyRj = $this->mKeluhans->surveyRj();

		$data = array(
			'title'        => 'Survey Kepuasan RJ - ' . $site['nameweb'],
			'chartSurveyRj'    => $chartSurveyRj,
			'isi'        => 'admin/keluhans/surveyRj/chart'
		);
		$data['chartBar']  = $this->mKeluhans->chartSurveyRj();
		$data['chartBar2'] = $this->mKeluhans->chartSurveyRj2();
		$data['chartBar3'] = $this->mKeluhans->chartSurveyRj3();
		$data['chartBar4'] = $this->mKeluhans->chartSurveyRj4();
		$data['chartBar5'] = $this->mKeluhans->chartSurveyRj5();
		$data['chartBar6'] = $this->mKeluhans->chartSurveyRj6();
		$data['chartBar7'] = $this->mKeluhans->chartSurveyRj7();
		$data['chartBar8'] = $this->mKeluhans->chartSurveyRj8();
		$data['chartBar9'] = $this->mKeluhans->chartSurveyRj9();
		$data['chartBar10'] = $this->mKeluhans->chartSurveyRj10();
		$data['chartBar11'] = $this->mKeluhans->chartSurveyRj11();
		$this->load->view('admin/layout/wrapper', $data);
	}


	// Survey Kepuasan Pasien Rawat Inap
	public function surveyRi()
	{
		$site  = $this->mConfig->list_config();
		$surveyRi = $this->mKeluhans->surveyRi();

		$data = array(
			'title'        => 'Survey Kepuasan RI - ' . $site['nameweb'],
			'surveyRi'        => $surveyRi,
			'isi'        => 'admin/keluhans/surveyRi/list'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	public function detail_surveyRi($respon_id)
	{
		$surveyRi  = $this->mKeluhans->detailSurveyRi($respon_id);
		$site    = $this->mConfig->list_config();

		$data = array(
			'title'    => 'Detail Survey - ' . $surveyRi['responden_name'],
			'surveyRi'    => $surveyRi,
			'isi'    => 'admin/keluhans/surveyRi/detail'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	public function delete_surveyRi($respon_id)
	{
		$data = array('respon_id'	=> $respon_id);
		$this->mKeluhans->deleteSurveyRi($data);
		$this->session->set_flashdata('sukses', 'Success');
		redirect(base_url('admin/keluhans/surveyRi/list'));
	}

	public function chartSurveyRi()
	{
		$site  = $this->mConfig->list_config();
		$chartSurveyRi = $this->mKeluhans->surveyRi();

		$data = array(
			'title'        => 'Survey Kepuasan RI - ' . $site['nameweb'],
			'chartSurveyRi'    => $chartSurveyRi,
			'isi'        => 'admin/keluhans/surveyRi/chart'
		);
		$data['chartBar']  = $this->mKeluhans->chartSurveyRi();
		$data['chartBar2'] = $this->mKeluhans->chartSurveyRi2();
		$data['chartBar3'] = $this->mKeluhans->chartSurveyRi3();
		$data['chartBar4'] = $this->mKeluhans->chartSurveyRi4();
		$data['chartBar5'] = $this->mKeluhans->chartSurveyRi5();
		$data['chartBar6'] = $this->mKeluhans->chartSurveyRi6();
		$data['chartBar7'] = $this->mKeluhans->chartSurveyRi7();
		$data['chartBar8'] = $this->mKeluhans->chartSurveyRi8();
		$data['chartBar9'] = $this->mKeluhans->chartSurveyRi9();
		$data['chartBar10'] = $this->mKeluhans->chartSurveyRi10();
		$data['chartBar11'] = $this->mKeluhans->chartSurveyRi11();
		$data['chartBar12'] = $this->mKeluhans->chartSurveyRi12();
		$data['chartBar13'] = $this->mKeluhans->chartSurveyRi13();
		$data['chartBar14'] = $this->mKeluhans->chartSurveyRi14();
		$data['chartBar15'] = $this->mKeluhans->chartSurveyRi15();
		$data['chartBar16'] = $this->mKeluhans->chartSurveyRi16();
		$data['chartBar17'] = $this->mKeluhans->chartSurveyRi17();
		$data['chartBar18'] = $this->mKeluhans->chartSurveyRi18();
		$data['chartBar19'] = $this->mKeluhans->chartSurveyRi19();
		$data['chartBar20'] = $this->mKeluhans->chartSurveyRi20();
		$data['chartBar21'] = $this->mKeluhans->chartSurveyRi21();
		$data['chartBar22'] = $this->mKeluhans->chartSurveyRi22();
		$data['chartBar23'] = $this->mKeluhans->chartSurveyRi23();
		$data['chartBar24'] = $this->mKeluhans->chartSurveyRi24();
		$data['chartBar25'] = $this->mKeluhans->chartSurveyRi25();
		$data['chartBar26'] = $this->mKeluhans->chartSurveyRi26();
		$data['chartBar27'] = $this->mKeluhans->chartSurveyRi27();
		$data['chartBar28'] = $this->mKeluhans->chartSurveyRi28();
		$data['chartBar29'] = $this->mKeluhans->chartSurveyRi29();
		$data['chartBar30'] = $this->mKeluhans->chartSurveyRi30();
		$data['chartBar31'] = $this->mKeluhans->chartSurveyRi31();
		$data['chartBar32'] = $this->mKeluhans->chartSurveyRi32();
		$data['chartBar33'] = $this->mKeluhans->chartSurveyRi33();
		$data['chartBar34'] = $this->mKeluhans->chartSurveyRi34();
		$data['chartBar35'] = $this->mKeluhans->chartSurveyRi35();
		$data['chartBar36'] = $this->mKeluhans->chartSurveyRi36();
		$data['chartBar37'] = $this->mKeluhans->chartSurveyRi37();
		$this->load->view('admin/layout/wrapper', $data);
	}
}
