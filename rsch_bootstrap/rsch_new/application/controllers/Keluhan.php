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

	// Survey Kepuasan Pasien Rawat Jalan
	public function surveyRj()
	{

		$site  		= $this->mConfig->list_config();
		$infoRs     = $this->mInfoRs->index();

		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules('responden_name', 'Responden Name', 'required');
		$valid->set_rules('age', 'Age', 'required');
		$valid->set_rules('phone', 'Phone', 'required');
		$valid->set_rules('gender', 'Gender', 'required');
		$valid->set_rules('relation', 'Relation', 'required');
		$valid->set_rules('education', 'Education', 'required');
		$valid->set_rules('address', 'Address', 'required');
		$valid->set_rules('patient_name', 'Patient Name', 'required');
		$valid->set_rules('poli', 'Poli', 'required');
		$valid->set_rules('date_px', 'Date Px', 'required');
		$valid->set_rules('question1', 'Question1', 'required');
		$valid->set_rules('question2', 'Question2', 'required');
		$valid->set_rules('question3', 'Question3', 'required');
		$valid->set_rules('question4', 'Question4', 'required');
		$valid->set_rules('question5', 'Question5', 'required');
		$valid->set_rules('question6', 'Question6', 'required');
		$valid->set_rules('question7', 'Question7', 'required');
		$valid->set_rules('question8', 'Question8', 'required');
		$valid->set_rules('question9', 'Question9', 'required');

		if ($valid->run() === FALSE) {

			$data = array(
				'title'		=> 'Survey RJ - ' . $site['nameweb'],
				'site'		=> $site,
				'infoRs'    => $infoRs,
				'isi'		=> 'front/keluhan/surveyRj/isi'
			);
			$this->load->view('front/layout/wrapper', $data);
		} else {
			$i = $this->input;
			$data = array(
				'responden_name'	=> $i->post('responden_name'),
				'age'				=> $i->post('age'),
				'phone'				=> $i->post('phone'),
				'gender'			=> $i->post('gender'),
				'relation'			=> $i->post('relation'),
				'education'			=> $i->post('education'),
				'address'			=> $i->post('address'),
				'date'				=> $i->post('date'),
				'patient_name'		=> $i->post('patient_name'),
				'gender_px'			=> $i->post('gender_px'),
				'age_px'			=> $i->post('age_px'),
				'poli'				=> $i->post('poli'),
				'date_px'			=> $i->post('date_px'),
				'question1'			=> $i->post('question1'),
				'question2'			=> $i->post('question2'),
				'question3'			=> $i->post('question3'),
				'question4'			=> $i->post('question4'),
				'question5'			=> $i->post('question5'),
				'question6'			=> $i->post('question6'),
				'question7'			=> $i->post('question7'),
				'question8'			=> $i->post('question8'),
				'question9'			=> $i->post('question9'),
				'question10'		=> $i->post('question10'),
				'question11'		=> $i->post('question11'),
				'suggestion'		=> $i->post('suggestion'),

			);
			$this->mKeluhans->sendSurveyRj($data);
			$this->session->set_flashdata('sukses', 'Success');
			redirect(base_url('keluhan/surveyRj'));
		}
	}


	// Survey Kepuasan Pasien Rawat Jalan
	public function surveyRi()
	{

		$site  		= $this->mConfig->list_config();
		$infoRs     = $this->mInfoRs->index();

		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules('email', 'Email', 'required');
		$valid->set_rules('responden_name', 'Responden Name', 'required');
		$valid->set_rules('age', 'Age', 'required');
		$valid->set_rules('gender', 'Gender', 'required');
		$valid->set_rules('relation', 'Relation', 'required');
		$valid->set_rules('education', 'Education', 'required');
		$valid->set_rules('address', 'Address', 'required');
		$valid->set_rules('phone', 'Phone', 'required');
		$valid->set_rules('patient_name', 'Patient Name', 'required');
		$valid->set_rules('gender_px', 'Gender Px', 'required');
		$valid->set_rules('age_px', 'Age Px', 'required');
		$valid->set_rules('doctor_name', 'Doctor Name', 'required');
		$valid->set_rules('question1', 'Question1', 'required');
		$valid->set_rules('question2', 'Question2', 'required');
		$valid->set_rules('question3', 'Question3', 'required');
		$valid->set_rules('question4', 'Question4', 'required');
		$valid->set_rules('question8', 'Question8', 'required');
		$valid->set_rules('question9', 'Question9', 'required');
		$valid->set_rules('question10', 'Question10', 'required');
		$valid->set_rules('question11', 'Question11', 'required');
		$valid->set_rules('question12', 'Question12', 'required');
		$valid->set_rules('question13', 'Question13', 'required');
		$valid->set_rules('question14', 'Question14', 'required');
		$valid->set_rules('question15', 'Question15', 'required');
		$valid->set_rules('question16', 'Question16', 'required');
		$valid->set_rules('question17', 'Question17', 'required');
		$valid->set_rules('question18', 'Question18', 'required');
		$valid->set_rules('question19', 'Question19', 'required');
		$valid->set_rules('question20', 'Question20', 'required');
		$valid->set_rules('question21', 'Question21', 'required');
		$valid->set_rules('question22', 'Question22', 'required');
		$valid->set_rules('question23', 'Question23', 'required');
		$valid->set_rules('question24', 'Question24', 'required');
		$valid->set_rules('question25', 'Question25', 'required');
		$valid->set_rules('question26', 'Question26', 'required');
		$valid->set_rules('question27', 'Question27', 'required');

		if ($valid->run() === FALSE) {

			$data = array(
				'title'		=> 'Survey RI - ' . $site['nameweb'],
				'site'		=> $site,
				'infoRs'    => $infoRs,
				'isi'		=> 'front/keluhan/surveyRi/isi'
			);
			$this->load->view('front/layout/wrapper', $data);
		} else {
			$i = $this->input;
			$data = array(
				'email'				=> $i->post('email'),
				'responden_name'	=> $i->post('responden_name'),
				'age'				=> $i->post('age'),
				'gender'			=> $i->post('gender'),
				'relation'			=> $i->post('relation'),
				'education'			=> $i->post('education'),
				'address'			=> $i->post('address'),
				'phone'				=> $i->post('phone'),
				'date'				=> $i->post('date'),
				'patient_name'		=> $i->post('patient_name'),
				'gender_px'			=> $i->post('gender_px'),
				'age_px'			=> $i->post('age_px'),
				'treatment_room'	=> $i->post('treatment_room'),
				'doctor_name'		=> $i->post('doctor_name'),
				'question1'			=> $i->post('question1'),
				'question2'			=> $i->post('question2'),
				'question3'			=> $i->post('question3'),
				'question4'			=> $i->post('question4'),
				'question5'			=> $i->post('question5'),
				'question6'			=> $i->post('question6'),
				'question7'			=> $i->post('question7'),
				'question8'			=> $i->post('question8'),
				'question9'			=> $i->post('question9'),
				'question10'		=> $i->post('question10'),
				'question11'		=> $i->post('question11'),
				'question12'		=> $i->post('question12'),
				'question13'		=> $i->post('question13'),
				'question14'		=> $i->post('question14'),
				'question15'		=> $i->post('question15'),
				'question16'		=> $i->post('question16'),
				'question17'		=> $i->post('question17'),
				'question18'		=> $i->post('question18'),
				'question19'		=> $i->post('question19'),
				'question20'		=> $i->post('question20'),
				'question21'		=> $i->post('question21'),
				'question22'		=> $i->post('question22'),
				'question23'		=> $i->post('question23'),
				'question24'		=> $i->post('question24'),
				'question25'		=> $i->post('question25'),
				'question26'		=> $i->post('question26'),
				'question27'		=> $i->post('question27'),
				'question28'		=> $i->post('question28'),
				'question29'		=> $i->post('question29'),
				'question30'		=> $i->post('question30'),
				'question31'		=> $i->post('question31'),
				'question32'		=> $i->post('question32'),
				'question33'		=> $i->post('question33'),
				'question34'		=> $i->post('question34'),
				'question35'		=> $i->post('question35'),
				'question36'		=> $i->post('question36'),
				'question37'		=> $i->post('question37'),
				'suggestion1'		=> $i->post('suggestion1'),
				'suggestion2'		=> $i->post('suggestion2'),
			);
			$this->mKeluhans->sendSurveyRi($data);
			$this->session->set_flashdata('sukses', 'Success');
			redirect(base_url('keluhan/surveyRi'));
		}
	}
}
