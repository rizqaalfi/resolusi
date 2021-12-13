<?php
/*
    @Copyright Indra Rukmana
    @Class Name : Karirs
	*/
defined('BASEPATH') or exit('No direct script access allowed');

class Karirs extends CI_Controller
{

	// Main Page Karirs
	public function index()
	{

		$site  = $this->mConfig->list_config();
		$karirs = $this->mKarirs->listKarirs();


		$data = array(
			'title'		=> 'List Karirs - ' . $site['nameweb'],
			'karirs'		=> $karirs,
			'isi'		=> 'admin/karirs/list'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	/* 
	Function Create
*/

	// Create Karir
	public function create()
	{

		$site 	  = $this->mConfig->list_config();
		$endKarir  = $this->mKarirs->endKarir();

		$v = $this->form_validation;
		$v->set_rules('title', 'Title Karir', 'required');
		$v->set_rules('keywords', 'keywords', 'required');

		if ($v->run()) {

			$config['upload_path'] 		= './assets/upload/image/';
			$config['allowed_types'] 	= 'gif|jpg|png';
			$config['max_size']			= '1000'; // KB			
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('image')) {

				$data = array(
					'title'			=> 'Create Karir - ' . $site['nameweb'],
					'site'			=> $site,
					'error'			=> $this->upload->display_errors(),
					'isi'			=> 'admin/karirs/create'
				);
				$this->load->view('admin/layout/wrapper', $data);
			} else {
				$upload_data				= array('uploads' => $this->upload->data());
				// Image Editor
				$config['image_library']	= 'gd2';
				$config['source_image'] 	= './assets/upload/image/' . $upload_data['uploads']['file_name'];
				$config['new_image'] 		= './assets/upload/image/thumbs/';
				$config['create_thumb'] 	= TRUE;
				$config['maintain_ratio'] 	= TRUE;
				$config['width'] 			= 150; // Pixel
				$config['height'] 			= 150; // Pixel
				$config['thumb_marker'] 	= '';
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$i = $this->input;
				$slug_karir = url_title($this->input->post('title'), 'dash', TRUE);
				$data = array(
					'slug_karir'	=> $slug_karir,
					'user_id'		=> $this->session->userdata('id'),
					'title'			=> $i->post('title'),
					'date_post'		=> $i->post('date_post'),
					'status'		=> $i->post('status'),
					'keywords'		=> $i->post('keywords'),
					'deadline'		=> $i->post('deadline'),
					'apply'			=> $i->post('apply'),
					'content'		=> $i->post('content'),
					'image'			=> $upload_data['uploads']['file_name']
				);

				$this->mKarirs->createKarir($data);
				$this->session->set_flashdata('sukses', 'Success');
				redirect(base_url('admin/karirs/'));
			}
		}
		// Default page
		$data = array(
			'title'		=> 'Create Karirs - ' . $site['nameweb'],
			'site'		=> $site,
			'isi'		=> 'admin/karirs/create'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	/* 
	Function Edit 
*/

	// Edit Karirs
	public function edit($karir_id)
	{

		$karir		= $this->mKarirs->detailKarir($karir_id);
		$endKarir	= $this->mKarirs->endKarir();

		// Validation
		$v = $this->form_validation;
		$v->set_rules('title', 'Title Karir', 'required');
		$v->set_rules('keywords', 'keywords', 'required');

		if ($v->run()) {
			if (!empty($_FILES['image']['name'])) {
				$config['upload_path'] 		= './assets/upload/image/';
				$config['allowed_types'] 	= 'gif|jpg|png|svg';
				$config['max_size']			= '1000'; // KB			
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('image')) {

					$data = array(
						'title'		=> 'Edit Karir - ' . $karir['title'],
						'karir'		=> $karir,
						'error'		=> $this->upload->display_errors(),
						'isi'		=> 'admin/karirs/edit'
					);
					$this->load->view('admin/layout/wrapper', $data);
				} else {

					//hapus foto lama
					if ($karir['image'] != "") {
						unlink('./assets/upload/image/' . $karir['image']);
						unlink('./assets/upload/image/thumbs/' . $karir['image']);
					}

					$upload_data				= array('uploads' => $this->upload->data());
					$config['image_library']	= 'gd2';
					$config['source_image'] 	= './assets/upload/image/' . $upload_data['uploads']['file_name'];
					$config['new_image'] 		= './assets/upload/image/thumbs/';
					$config['create_thumb'] 	= TRUE;
					$config['quality'] 			= "100%";
					$config['maintain_ratio'] 	= FALSE;
					$config['width'] 			= 360; // Pixel
					$config['height'] 			= 200; // Pixel
					$config['x_axis'] 			= 0;
					$config['y_axis'] 			= 0;
					$config['thumb_marker'] 	= '';
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();

					$i = $this->input;


					$slugKarir = $endKarir['karir_id'] . '-' . url_title($i->post('title'), 'dash', TRUE);
					$data = array(
						'karir_id'		=> $karir['karir_id'],
						'slug_karir'		=> $slugKarir,
						'user_id'		=> $this->session->userdata('id'),
						'title'			=> $i->post('title'),
						'date_post'		=> $i->post('date_post'),
						'status'		=> $i->post('status'),
						'keywords'		=> $i->post('keywords'),
						'deadline'		=> $i->post('deadline'),
						'apply'			=> $i->post('apply'),
						'content'		=> $i->post('content'),
						'image'			=> $upload_data['uploads']['file_name']
					);
					$this->edit_model->edit_biz($data);
					$this->session->set_flashdata('sukses', 'Biz telah diedit dan gambar telah diganti');
					redirect(base_url('admin/biz'));
				}
			} else {
				$i = $this->input;
				$slugKarir = $endKarir['karir_id'] . '-' . url_title($i->post('title'), 'dash', TRUE);
				$data = array(
					'karir_id'		=> $karir['karir_id'],
					'slug_karir'	=> $slugKarir,
					'user_id'		=> $this->session->userdata('id'),
					'title'			=> $i->post('title'),
					'content'		=> $i->post('content'),
					'date_post'		=> $i->post('date_post'),
					'status'		=> $i->post('status'),
					'keywords'		=> $i->post('keywords'),
					'deadline'		=> $i->post('deadline'),
					'apply'			=> $i->post('apply'),
					'content'		=> $i->post('content'),
				);
				$this->mKarirs->editKarir($data);
				$this->session->set_flashdata('sukses', 'Success');
				redirect(base_url('admin/karirs'));
			}
		}

		$data = array(
			'title'		=> 'Edit Karirs - ' . $karir['title'],
			'karir'		=> $karir,
			'isi'		=> 'admin/karirs/edit'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	/* 
	Function Delete
*/

	// Delete Karir
	public function delete_karir($karir_id)
	{
		$karir		= $this->mKarirs->detailKarir($karir_id);

		//hapus foto lama
		if ($karir['image'] != "") {
			unlink('./assets/upload/image/' . $karir['image']);
			unlink('./assets/upload/image/thumbs/' . $karir['image']);
		}

		$data = array('karir_id'	=> $karir_id);
		$this->mKarirs->deleteKarir($data);
		$this->session->set_flashdata('sukses', 'Success');
		redirect(base_url('admin/karirs'));
	}
}
