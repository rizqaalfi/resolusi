<?php
/*
    @Copyright Indra Rukmana
    @Class Name : Home(Front)
	*/
defined('BASEPATH') or exit('No direct script access allowed');

class informasi extends CI_Controller
{

	// Main Page Home
	// Main Page Artikels
	public function artikel()
	{

		$site  = $this->mConfig->list_config();
		$artikels = $this->mInformasi->listArtikels();

		$data = array(
			'title'			=> 'List Artikels - ' . $site['nameweb'],
			'artikels'		=> $artikels,
			'isi'			=> 'admin/informasi/umum/artikels/list'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Create Artikel
	public function create_artikel()
	{

		$site 	  = $this->mConfig->list_config();
		$endArtikel  = $this->mInformasi->endArtikel();

		$v = $this->form_validation;
		$v->set_rules('title', 'Title Artikel', 'required');

		if ($v->run()) {

			$config['upload_path'] 		= './assets/upload/image/';
			$config['allowed_types'] 	= 'gif|jpg|png';
			$config['max_size']			= '1000'; // KB			
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('image')) {

				$data = array(
					'title'			=> 'Create Artikel - ' . $site['nameweb'],
					'site'			=> $site,
					'error'			=> $this->upload->display_errors(),
					'isi'			=> 'admin/informasi/umum/artikels/create'
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
				$slug_artikel = url_title($this->input->post('title'), 'dash', TRUE);
				$data = array(
					'slug_artikel'	=> $slug_artikel,
					'user_id'		=> $this->session->userdata('id'),
					'title'			=> $i->post('title'),
					'content'		=> $i->post('content'),
					'date_post'		=> $i->post('date_post'),
					'status'		=> $i->post('status'),
					'keywords'		=> $i->post('keywords'),
					'image'			=> $upload_data['uploads']['file_name']
				);

				$this->mInformasi->createArtikel($data);
				$this->session->set_flashdata('sukses', 'Success');
				redirect(base_url('admin/informasi/artikel/'));
			}
		}
		// Default page
		$data = array(
			'title'		=> 'Create Artikels - ' . $site['nameweb'],
			'site'		=> $site,
			'isi'		=> 'admin/informasi/umum/artikels/create'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Edit Artikels
	public function edit_artikel($artikel_id)
	{

		$artikel		= $this->mInformasi->detailArtikel($artikel_id);
		$endArtikel	= $this->mInformasi->endArtikel();

		// Validation
		$v = $this->form_validation;
		$v->set_rules('title', 'Title Artikel', 'required');

		if ($v->run()) {
			if (!empty($_FILES['image']['name'])) {
				$config['upload_path'] 		= './assets/upload/image/';
				$config['allowed_types'] 	= 'gif|jpg|png|svg';
				$config['max_size']			= '1000'; // KB			
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('image')) {

					$data = array(
						'title'		=> 'Edit Artikel - ' . $artikel['title'],
						'artikel'		=> $artikel,
						'error'		=> $this->upload->display_errors(),
						'isi'		=> 'admin/informasi/umum/artikels/edit'
					);
					$this->load->view('admin/layout/wrapper', $data);
				} else {

					//hapus foto lama
					if ($artikel['image'] != "") {
						unlink('./assets/upload/image/' . $artikel['image']);
						unlink('./assets/upload/image/thumbs/' . $artikel['image']);
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



					$slugArtikel = $endArtikel['artikel_id'] . '-' . url_title($i->post('title'), 'dash', TRUE);
					$data = array(
						'artikel_id'		=> $artikel['artikel_id'],
						'slug_artikel'		=> $slugArtikel,
						'user_id'		=> $this->session->userdata('id'),
						'title'			=> $i->post('title'),
						'content'		=> $i->post('content'),
						'date_post'		=> $i->post('date_post'),
						'status'		=> $i->post('status'),
						'keywords'		=> $i->post('keywords'),
						'image'			=> $upload_data['uploads']['file_name']
					);
					$this->mInformasi->editArtikel($data);
					$this->session->set_flashdata('sukses', 'Biz telah diedit dan gambar telah diganti');
					redirect(base_url('admin/informasi/artikel'));
				}
			} else {
				$i = $this->input;
				$slugArtikel = $endArtikel['artikel_id'] . '-' . url_title($i->post('title'), 'dash', TRUE);
				$data = array(
					'artikel_id'		=> $artikel['artikel_id'],
					'slug_artikel'		=> $slugArtikel,
					'user_id'		=> $this->session->userdata('id'),
					'title'			=> $i->post('title'),
					'content'		=> $i->post('content'),
					'date_post'		=> $i->post('date_post'),
					'status'		=> $i->post('status'),
					'keywords'		=> $i->post('keywords'),
				);
				$this->mInformasi->editArtikel($data);
				$this->session->set_flashdata('sukses', 'Success');
				redirect(base_url('admin/informasi/artikel'));
			}
		}

		$data = array(
			'title'		=> 'Edit Artikels - ' . $artikel['title'],
			'artikel'		=> $artikel,
			'isi'		=> 'admin/informasi/umum/artikels/edit'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Delete Artikel
	public function delete_artikel($artikel_id)
	{
		$data = array('artikel_id'	=> $artikel_id);
		$this->mInformasi->deleteArtikel($data);
		$this->session->set_flashdata('sukses', 'Success');
		redirect(base_url('admin/informasi/artikel'));
	}

	// Main Page Kegiatans
	public function kegiatan()
	{

		$site  = $this->mConfig->list_config();
		$kegiatans = $this->mInformasi->listKegiatans();

		$data = array(
			'title'			=> 'List Kegiatans - ' . $site['nameweb'],
			'kegiatans'		=> $kegiatans,
			'isi'			=> 'admin/informasi/umum/kegiatans/list'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Create Kegiatan
	public function create_kegiatan()
	{

		$site 	  = $this->mConfig->list_config();
		$endKegiatan  = $this->mInformasi->endKegiatan();

		$v = $this->form_validation;
		$v->set_rules('title', 'Title Kegiatan', 'required');

		if ($v->run()) {

			$config['upload_path'] 		= './assets/upload/image/';
			$config['allowed_types'] 	= 'gif|jpg|png';
			$config['max_size']			= '1000'; // KB
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('image')) {

				$data = array(
					'title'			=> 'Create Kegiatan - ' . $site['nameweb'],
					'site'			=> $site,
					'error'			=> $this->upload->display_errors(),
					'isi'			=> 'admin/informasi/umum/kegiatans/create'
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
				$slug_kegiatan = url_title($this->input->post('title'), 'dash', TRUE);
				$data = array(
					'slug_kegiatan'	=> $slug_kegiatan,
					'user_id'		=> $this->session->userdata('id'),
					'title'			=> $i->post('title'),
					'content'		=> $i->post('content'),
					'date_post'		=> $i->post('date_post'),
					'status'		=> $i->post('status'),
					'keywords'		=> $i->post('keywords'),
					'image'			=> $upload_data['uploads']['file_name']
				);

				$this->mInformasi->createKegiatan($data);
				$this->session->set_flashdata('sukses', 'Success');
				redirect(base_url('admin/informasi/kegiatan/'));
			}
		}
		// Default page
		$data = array(
			'title'		=> 'Create Kegiatans - ' . $site['nameweb'],
			'site'		=> $site,
			'isi'		=> 'admin/informasi/umum/kegiatans/create'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Edit Kegiatans
	public function edit_kegiatan($kegiatan_id)
	{

		$kegiatan		= $this->mInformasi->detailKegiatan($kegiatan_id);
		$endKegiatan	= $this->mInformasi->endKegiatan();

		// Validation
		$v = $this->form_validation;
		$v->set_rules('title', 'Title Kegiatan', 'required');

		if ($v->run()) {
			if (!empty($_FILES['image']['name'])) {
				$config['upload_path'] 		= './assets/upload/image/';
				$config['allowed_types'] 	= 'gif|jpg|png|svg';
				$config['max_size']			= '1000'; // KB
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('image')) {

					$data = array(
						'title'		=> 'Edit Kegiatan - ' . $kegiatan['title'],
						'kegiatan'		=> $kegiatan,
						'error'		=> $this->upload->display_errors(),
						'isi'		=> 'admin/informasi/umum/kegiatans/edit'
					);
					$this->load->view('admin/layout/wrapper', $data);
				} else {
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

					unlink('./assets/upload/image/' . $kegiatan['image']);
					unlink('./assets/upload/image/thumbs/' . $kegiatan['image']);

					$slugKegiatan = $endKegiatan['kegiatan_id'] . '-' . url_title($i->post('title'), 'dash', TRUE);
					$data = array(
						'kegiatan_id'		=> $kegiatan['kegiatan_id'],
						'slug_kegiatan'		=> $slugKegiatan,
						'user_id'		=> $this->session->userdata('id'),
						'title'			=> $i->post('title'),
						'content'		=> $i->post('content'),
						'date_post'		=> $i->post('date_post'),
						'status'		=> $i->post('status'),
						'keywords'		=> $i->post('keywords'),
						'image'			=> $upload_data['uploads']['file_name']
					);
					$this->mInformasi->editKegiatan($data);
					$this->session->set_flashdata('sukses', 'Biz telah diedit dan gambar telah diganti');
					redirect(base_url('admin/informasi/kegiatan'));
				}
			} else {
				$i = $this->input;
				$slugKegiatan = $endKegiatan['kegiatan_id'] . '-' . url_title($i->post('title'), 'dash', TRUE);
				$data = array(
					'kegiatan_id'		=> $kegiatan['kegiatan_id'],
					'slug_kegiatan'		=> $slugKegiatan,
					'user_id'		=> $this->session->userdata('id'),
					'title'			=> $i->post('title'),
					'content'		=> $i->post('content'),
					'date_post'		=> $i->post('date_post'),
					'status'		=> $i->post('status'),
					'keywords'		=> $i->post('keywords'),
				);
				$this->mInformasi->editKegiatan($data);
				$this->session->set_flashdata('sukses', 'Success');
				redirect(base_url('admin/informasi/kegiatan'));
			}
		}

		$data = array(
			'title'		=> 'Edit Kegiatans - ' . $kegiatan['title'],
			'kegiatan'		=> $kegiatan,
			'isi'		=> 'admin/informasi/umum/kegiatans/edit'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Delete Kegiatan
	public function delete_kegiatan($kegiatan_id)
	{
		$data = array('kegiatan_id'	=> $kegiatan_id);
		$this->mInformasi->deleteKegiatan($data);
		$this->session->set_flashdata('sukses', 'Success');
		redirect(base_url('admin/informasi/kegiatan'));
	}

	// Main Page rekanan
	public function rekanan()
	{

		$site  = $this->mConfig->list_config();
		$rekanan = $this->mInformasi->listRekanan();

		$data = array(
			'title'			=> 'List Rekanan - ' . $site['nameweb'],
			'rekanan'	=> $rekanan,
			'isi'			=> 'admin/informasi/umum/rekanan/list'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Create Rekanan
	public function create_rekanan()
	{

		$site = $this->mConfig->list_config();

		$v = $this->form_validation;
		$v->set_rules('image_name', 'Image Name', 'required');

		if ($v->run()) {

			$config['upload_path'] 		= './assets/upload/image/rekanan/';
			$config['allowed_types'] 	= 'gif|jpg|png';
			$config['max_size']			= '1000'; // KB			
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('image')) {

				$data = array(
					'title'			=> 'Create Rekanna - ' . $site['nameweb'],
					'site'			=> $site,
					'error'			=> $this->upload->display_errors(),
					'isi'			=> 'admin/informasi/umum/rekanan/create'
				);
				$this->load->view('admin/layout/wrapper', $data);
			} else {
				$upload_data				= array('uploads' => $this->upload->data());
				$config['image_library']	= 'gd2';
				$config['source_image'] 	= './assets/upload/image/rekanan/' . $upload_data['uploads']['file_name'];
				$config['new_image'] 		= './assets/upload/image/thumbs/';
				$config['create_thumb'] 	= TRUE;
				$config['maintain_ratio'] 	= TRUE;
				$config['width'] 			= 150; // Pixel
				$config['height'] 			= 150; // Pixel
				$config['thumb_marker'] 	= '';
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$i = $this->input;
				$data = array(
					'image'			=> $upload_data['uploads']['file_name'],
					'image_name'	=> $i->post('image_name'),
					'position' 		=> $i->post('position'),
					'date'			=> $i->post('date')
				);
				$this->mInformasi->createRekanan($data);
				$this->session->set_flashdata('sukses', 'Success');
				redirect(base_url('admin/informasi/rekanan'));
			}
		}
		// Default page
		$data = array(
			'title'		=> 'Create Rekanan - ' . $site['nameweb'],
			'site'		=> $site,
			'isi'		=> 'admin/informasi/umum/rekanan/create'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Edit Rekanan
	public function edit_rekanan($rekanan_id)
	{

		$rekanan	= $this->mInformasi->detailRekanan($rekanan_id);
		$endRekanan	= $this->mInformasi->endRekanan();

		// Validation
		$v = $this->form_validation;
		$v->set_rules('image_name', 'Image Name', 'required');

		if ($v->run()) {
			if (!empty($_FILES['image']['name'])) {
				$config['upload_path'] 		= './assets/upload/image/rekanan/';
				$config['allowed_types'] 	= 'gif|jpg|png|svg';
				$config['max_size']			= '1000'; // KB			
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('image')) {

					$data = array(
						'title'		=> 'Edit Rekanan - ' . $rekanan['image_name'],
						'rekanan'	=> $rekanan,
						'error'		=> $this->upload->display_errors(),
						'isi'		=> 'admin/informasi/umum/rekanan/edit'
					);
					$this->load->view('admin/layout/wrapper', $data);
				} else {

					//hapus foto lama
					if ($rekanan['image'] != "") {
						unlink('./assets/upload/image/rekanan/' . $rekanan['image']);
						unlink('./assets/upload/image/thumbs/' . $rekanan['image']);
					}


					$upload_data				= array('uploads' => $this->upload->data());
					$config['image_library']	= 'gd2';
					$config['source_image'] 	= './assets/upload/image/rekanan/' . $upload_data['uploads']['file_name'];
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


					$data = array(
						'rekanan_id'	=> $rekanan['rekanan_id'],
						'image'			=> $upload_data['uploads']['file_name'],
						'image_name'	=> $i->post('image_name'),
						'position'		=> $i->post('position'),
						'date'			=> $i->post('date'),
					);
					$this->mInformasi->editRekanan($data);
					$this->session->set_flashdata('sukses', 'Success');
					redirect(base_url('admin/informasi/rekanan'));
				}
			} else {
				$i = $this->input;
				$data = array(
					'rekanan_id'	=> $rekanan['rekanan_id'],
					'image_name'	=> $i->post('image_name'),
					'position'		=> $i->post('position'),
					'date'			=> $i->post('date'),
				);
				$this->mInformasi->editRekanan($data);
				$this->session->set_flashdata('sukses', 'Success');
				redirect(base_url('admin/informasi/rekanan'));
			}
		}

		$data = array(
			'title'		=> 'Edit Rekanan - ' . $rekanan['image_name'],
			'rekanan'	=> $rekanan,
			'isi'		=> 'admin/informasi/umum/rekanan/edit'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Delete Rekanan
	public function delete_rekanan($rekanan_id)
	{
		$data = array('rekanan_id'	=> $rekanan_id);
		$this->mInformasi->deleteRekanan($data);
		$this->session->set_flashdata('sukses', 'Success');
		redirect(base_url('admin/informasi/rekanan'));
	}

	// Main Page Fasilitas
	public function fasilitas()
	{

		$site  = $this->mConfig->list_config();
		$fasilitas = $this->mInformasi->listFasilitas();


		$data = array(
			'title'			=> 'List Fasilitas - ' . $site['nameweb'],
			'fasilitas'		=> $fasilitas,
			'isi'			=> 'admin/informasi/umum/fasilitas/list'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Create fasilitas
	public function create_fasilitas()
	{

		$site = $this->mConfig->list_config();

		$v = $this->form_validation;
		$v->set_rules('image_name', 'Image Name', 'required');

		if ($v->run()) {

			$config['upload_path'] 		= './assets/upload/image/';
			$config['allowed_types'] 	= 'gif|jpg|png';
			$config['max_size']			= '1000'; // KB			
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('image')) {

				$data = array(
					'title'			=> 'Create Fasilitas - ' . $site['nameweb'],
					'site'			=> $site,
					'error'			=> $this->upload->display_errors(),
					'isi'			=> 'admin/informasi/umum/fasilitas/create'
				);
				$this->load->view('admin/layout/wrapper', $data);
			} else {
				$upload_data				= array('uploads' => $this->upload->data());
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
				$data = array(
					'judul'         => $i->post('judul'),
					'image'			=> $upload_data['uploads']['file_name'],
					'image_name'	=> $i->post('image_name'),
					'deskripsi' 	=> $i->post('deskripsi'),
					'date'			=> $i->post('date')

				);
				$this->mInformasi->createFasilitas($data);
				$this->session->set_flashdata('sukses', 'Success');
				redirect(base_url('admin/informasi/fasilitas'));
			}
		}
		// Default page
		$data = array(
			'title'		=> 'Create Fasilitas - ' . $site['nameweb'],
			'site'		=> $site,
			'isi'		=> 'admin/informasi/umum/fasilitas/create'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Edit fasilitas
	public function edit_fasilitas($fasilitas_id)
	{

		$fasilitas	= $this->mInformasi->detailfasilitas($fasilitas_id);
		$endfasilitas	= $this->mInformasi->endfasilitas();

		// Validation
		$v = $this->form_validation;
		$v->set_rules('image_name', 'Image Name', 'required');

		if ($v->run()) {
			if (!empty($_FILES['image']['name'])) {
				$config['upload_path'] 		= './assets/upload/image/';
				$config['allowed_types'] 	= 'gif|jpg|png|svg';
				$config['max_size']			= '1000'; // KB			
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('image')) {

					$data = array(
						'title'		=> 'Edit fasilitas - ' . $fasilitas['fasilitas_name'],
						'fasilitas'	=> $fasilitas,
						'error'		=> $this->upload->display_errors(),
						'isi'		=> 'admin/informasi/umum/fasilitas/edit'
					);
					$this->load->view('admin/layout/wrapper', $data);
				} else {

					//hapus foto lama
					if ($fasilitas['image'] != "") {
						unlink('./assets/upload/image/' . $fasilitas['image']);
						unlink('./assets/upload/image/thumbs/' . $fasilitas['image']);
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


					$data = array(
						'fasilitas_id'	=> $fasilitas['fasilitas_id'],
						'judul'	=> $i->post('judul'),
						'image'			=> $upload_data['uploads']['file_name'],
						'image_name'	=> $i->post('image_name'),
						'deskripsi' => $i->post('deskripsi'),
						'date'			=> $i->post('date'),
					);
					$this->mInformasi->editfasilitas($data);
					$this->session->set_flashdata('sukses', 'Success');
					redirect(base_url('admin/informasi/fasilitas'));
				}
			} else {
				$i = $this->input;
				$data = array(
					'fasilitas_id'	=> $fasilitas['fasilitas_id'],
					'judul'	=> $i->post('judul'),
					'image_name'	=> $i->post('image_name'),
					'deskripsi' => $i->post('deskripsi'),
					'date'			=> $i->post('date'),
				);
				$this->mInformasi->editfasilitas($data);
				$this->session->set_flashdata('sukses', 'Success');
				redirect(base_url('admin/informasi/fasilitas'));
			}
		}

		$data = array(
			'title'		=> 'Edit fasilitas - ' . $fasilitas['image_name'],
			'fasilitas'	=> $fasilitas,
			'isi'		=> 'admin/informasi/umum/fasilitas/edit'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Delete fasilitas
	public function delete_fasilitas($fasilitas_id)
	{
		$data = array('fasilitas_id'	=> $fasilitas_id);
		$this->mInformasi->deleteFasilitas($data);
		$this->session->set_flashdata('sukses', 'Success');
		redirect(base_url('admin/informasi/fasilitas'));
	}

	// Main Page alur
	public function alur()
	{

		$site  = $this->mConfig->list_config();
		$alur = $this->mInformasi->listLayanan();

		$data = array(
			'title'			=> 'List Alur - ' . $site['nameweb'],
			'alur'	=> $alur,
			'isi'			=> 'admin/informasi/layanan/alur/list'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Edit Alur
	public function edit_alur($layanan_id)
	{

		$alur	= $this->mInformasi->detailLayanan($layanan_id);
		$endalur	= $this->mInformasi->endLayanan();

		// Validation
		$v = $this->form_validation;
		$v->set_rules('nama_alur', 'Image Name', 'required');

		if ($v->run()) {
			if (!empty($_FILES['image']['name'])) {
				$config['upload_path'] 		= './assets/upload/image/';
				$config['allowed_types'] 	= 'gif|jpg|png|svg';
				$config['max_size']			= '1000'; // KB			
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('image')) {

					$data = array(
						'title'		=> 'Edit Alur - ' . $alur['nama_alur'],
						'alur'	=> $alur,
						'error'		=> $this->upload->display_errors(),
						'isi'		=> 'admin/informasi/layanan/alur/edit'
					);
					$this->load->view('admin/layout/wrapper', $data);
				} else {

					//hapus foto lama
					if ($alur['image'] != "") {
						unlink('./assets/upload/image/' . $alur['image']);
						unlink('./assets/upload/image/thumbs/' . $alur['image']);
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



					$data = array(
						'layanan_id'	=> $alur['layanan_id'],
						'image'			=> $upload_data['uploads']['file_name'],
						'nama_alur'	=> $i->post('nama_alur')
					);
					$this->mInformasi->editLayanan($data);
					$this->session->set_flashdata('sukses', 'Success');
					redirect(base_url('admin/informasi/alur'));
				}
			} else {
				$i = $this->input;
				$data = array(
					'layanan_id'	=> $alur['layanan_id'],
					'nama_alur'	=> $i->post('nama_alur'),
				);
				$this->mInformasi->editLayanan($data);
				$this->session->set_flashdata('sukses', 'Success');
				redirect(base_url('admin/informasi/alur'));
			}
		}

		$data = array(
			'title'		=> 'Edit Alur - ' . $alur['nama_alur'],
			'alur'	=> $alur,
			'isi'		=> 'admin/informasi/layanan/alur/edit'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Main Page hak
	public function hak()
	{

		$site  = $this->mConfig->list_config();
		$hak = $this->mInformasi->listLayanan();

		$data = array(
			'title'			=> 'List Hak dan Kewajiban - ' . $site['nameweb'],
			'hak'	=> $hak,
			'isi'			=> 'admin/informasi/layanan/hak/list'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Edit Hak
	public function edit_hak($layanan_id)
	{

		$hak	= $this->mInformasi->detailLayanan($layanan_id);
		$endhak	= $this->mInformasi->endLayanan();

		// Validation
		$v = $this->form_validation;
		$v->set_rules('hak', 'Hak', 'required');

		if ($v->run() === FALSE) {

			$data = array(
				'title'    => 'Edit Hak dan Kewajiban',
				'hak'    => $hak,
				'isi'    => 'admin/informasi/layanan/hak/edit'
			);
			$this->load->view('admin/layout/wrapper', $data);
		} else {

			$i = $this->input;
			if ($i->post('hak') == true) {

				$data = array(
					'layanan_id'    => $hak['layanan_id'],
					'hak'    => $i->post('hak'),

				);
			}

			$data = array(
				'layanan_id'    => $hak['layanan_id'],
				'hak'    => $i->post('hak'),
			);
			$this->mInformasi->editLayanan($data);
			$this->session->set_flashdata('sukses', 'Success');

			redirect(base_url('admin/informasi/hak'));
		}
	}

	// Main Page Tatib
	public function tatib()
	{

		$site  = $this->mConfig->list_config();
		$tatib = $this->mInformasi->listLayanan();

		$data = array(
			'title'			=> 'List Tata Tertib - ' . $site['nameweb'],
			'tatib'	=> $tatib,
			'isi'			=> 'admin/informasi/layanan/tatib/list'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Edit Tatib
	public function edit_tatib($layanan_id)
	{

		$tatib	= $this->mInformasi->detailLayanan($layanan_id);
		$endtatib	= $this->mInformasi->endLayanan();

		// Validation
		$v = $this->form_validation;
		$v->set_rules('tatib', 'tatib', 'required');

		if ($v->run() === FALSE) {

			$data = array(
				'title'    => 'Edit tatib dan Kewajiban',
				'tatib'    => $tatib,
				'isi'    => 'admin/informasi/layanan/tatib/edit'
			);
			$this->load->view('admin/layout/wrapper', $data);
		} else {

			$i = $this->input;
			if ($i->post('tatib') == true) {

				$data = array(
					'layanan_id'    => $tatib['layanan_id'],
					'tatib'    => $i->post('tatib'),

				);
			}

			$data = array(
				'layanan_id'    => $tatib['layanan_id'],
				'tatib'    => $i->post('tatib'),
			);
			$this->mInformasi->editLayanan($data);
			$this->session->set_flashdata('sukses', 'Success');

			redirect(base_url('admin/informasi/tatib'));
		}
	}
}
