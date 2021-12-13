<?php
/*
    @Copyright Indra Rukmana
    @Class Name : Home(Front)
	*/
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

	// Main Page Home
	//page tentang 
	public function tentang_vismis()
	{

		$site  		= $this->mConfig->list_config();
		$tentang  		= $this->mProfil->index_tentang();

		$data = array(
			'title'		=> 'Tentang RS - ' . $site['nameweb'],
			'site'		=> $site,
			'tentang'		=> $tentang,
			'isi'		=> 'admin/profil/tentang/visi-misi/list'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}


	public function edit_vismis($tentang_id)
	{
		$tentang = $this->mProfil->detail_tentang($tentang_id);
		$site    = $this->mConfig->list_config();

		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules('visi', 'Visi', 'required');

		if ($valid->run() === FALSE) {

			$data = array(
				'title'    => 'Edit tentang',
				'tentang'    => $tentang,
				'isi'    => 'admin/profil/tentang/visi-misi/edit'
			);
			$this->load->view('admin/layout/wrapper', $data);
		} else {

			$i = $this->input;
			if ($i->post('visi') == true) {

				$data = array(
					'tentang_id'    => $tentang['tentang_id'],
					'visi'    => $i->post('visi'),

				);
			}

			$data = array(
				'tentang_id'    => $tentang['tentang_id'],
				'visi'    => $i->post('visi'),
			);
			$this->mProfil->edit_tentang($data);
			$this->session->set_flashdata('sukses', 'Success');

			redirect(base_url('admin/profil/tentang_vismis'));
		}
	}

	public function tentang_nilai()
	{

		$site  		= $this->mConfig->list_config();
		$tentang  		= $this->mProfil->index_tentang();

		$data = array(
			'title'		=> 'Tentang RS - ' . $site['nameweb'],
			'site'		=> $site,
			'tentang'		=> $tentang,
			'isi'		=> 'admin/profil/tentang/nilai/list'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	public function edit_nilai($tentang_id)
	{
		$tentang = $this->mProfil->detail_tentang($tentang_id);
		$site    = $this->mConfig->list_config();

		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules('nilai', 'nilai', 'required');

		if ($valid->run() === FALSE) {

			$data = array(
				'title'    => 'Edit tentang',
				'tentang'    => $tentang,
				'isi'    => 'admin/profil/tentang/nilai/edit'
			);
			$this->load->view('admin/layout/wrapper', $data);
		} else {

			$i = $this->input;
			if ($i->post('nilai') == true) {

				$data = array(
					'tentang_id'    => $tentang['tentang_id'],
					'nilai'    => $i->post('nilai'),

				);
			}

			$data = array(
				'tentang_id'    => $tentang['tentang_id'],
				'nilai'    => $i->post('nilai'),
			);
			$this->mProfil->edit_tentang($data);
			$this->session->set_flashdata('sukses', 'Success');

			redirect(base_url('admin/profil/tentang_nilai'));
		}
	}


	public function sambutan()
	{

		$site      = $this->mConfig->list_config();
		$sambutan = $this->mProfil->list_sambutan();

		$data = array(
			'title'		=> 'Sambutan - ' . $site['nameweb'],
			'sambutan'	=> $sambutan,
			'site'		=> $site,
			'isi'		=> 'admin/profil/sambutan/list'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	public function create_sambutan()
	{

		$site = $this->mConfig->list_config();

		$v = $this->form_validation;
		$v->set_rules('image_name', 'Nama Gambar', 'required');

		if ($v->run()) {

			$config['upload_path'] 		= './assets/upload/image/';
			$config['allowed_types'] 	= 'gif|jpg|png';
			$config['max_size']			= '1000'; // KB			
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('image')) {

				$data = array(
					'title'			=> 'Create Sambutan - ' . $site['nameweb'],
					'site'			=> $site,
					'error'			=> $this->upload->display_errors(),
					'isi'			=> 'admin/profil/sambutan/create'
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
				$slugImage = url_title($this->input->post('image_name'), 'dash', TRUE);
				$data = array(
					'image'			=> $upload_data['uploads']['file_name'],
					'image_name'	=> $i->post('image_name'),
					'sambutan'			=> $i->post('sambutan')
				);
				$this->mProfil->create_sambutan($data);
				$this->session->set_flashdata('sukses', 'Success');
				redirect(base_url('admin/profil/sambutan'));
			}
		}
		// Default page
		$data = array(
			'title'		=> 'Create Sambutan - ' . $site['nameweb'],
			'site'		=> $site,
			'isi'		=> 'admin/profil/sambutan/create'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	public function edit_sambutan($sambutan_id)
	{

		$sambutan	= $this->mProfil->detail_sambutan($sambutan_id);

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
						'title'		=> 'Edit Sambutan - ' . $sambutan['image_name'],
						'sambutan'	=> $sambutan,
						'error'		=> $this->upload->display_errors(),
						'isi'		=> 'admin/profil/sambutan/edit'
					);
					$this->load->view('admin/layout/wrapper', $data);
				} else {

					//hapus foto lama
					if ($sambutan['image'] != "") {
						unlink('./assets/upload/image/' . $sambutan['image']);
						unlink('./assets/upload/image/thumbs/' . $sambutan['image']);
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
						'sambutan_id'		=> $sambutan['sambutan_id'],
						'image'			=> $upload_data['uploads']['file_name'],
						'image_name'	=> $i->post('image_name'),
						'sambutan' => $i->post('sambutan')
					);
					$this->mProfil->edit_sambutan($data);
					$this->session->set_flashdata('sukses', 'Success');
					redirect(base_url('admin/profil/sambutan'));
				}
			} else {
				$i = $this->input;
				$data = array(
					'sambutan_id'		=> $sambutan['sambutan_id'],
					'image_name'	=> $i->post('image_name'),
					'sambutan' => $i->post('sambutan')
				);
				$this->mProfil->edit_sambutan($data);
				$this->session->set_flashdata('sukses', 'Success');
				redirect(base_url('admin/profil/sambutan'));
			}
		}

		$data = array(
			'title'		=> 'Edit Sambutan - ' . $sambutan['image_name'],
			'sambutan'	=> $sambutan,
			'isi'		=> 'admin/profil/sambutan/edit'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	public function delete_sambutan($sambutan_id)
	{
		$data = array('sambutan_id'	=> $sambutan_id);
		$this->mProfil->delete_sambutan($data);
		$this->session->set_flashdata('sukses', 'Success');
		redirect(base_url('admin/profil/sambutan'));
	}

	// function page profil sejarah 
	public function sejarah()
	{

		$site  		= $this->mConfig->list_config();
		$sejarah  		= $this->mProfil->index_sejarah();

		$data = array(
			'title'		=> 'Sejarah - ' . $site['nameweb'],
			'site'		=> $site,
			'sejarah'		=> $sejarah,
			'isi'		=> 'admin/profil/sejarah/list'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	public function edit_sejarah($sejarah_id)
	{
		$sejarah = $this->mProfil->detailsejarah($sejarah_id);
		$site    = $this->mConfig->list_config();

		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules('deskripsi', 'Deskripsi', 'required');

		if ($valid->run() === FALSE) {

			$data = array(
				'title'    => 'Edit Sejarah',
				'sejarah'    => $sejarah,
				'isi'    => 'admin/profil/sejarah/edit'
			);
			$this->load->view('admin/layout/wrapper', $data);
		} else {

			$i = $this->input;
			if ($i->post('deskripsi') == true) {

				$data = array(
					'sejarah_id'    => $sejarah['sejarah_id'],
					'deskripsi'    => $i->post('deskripsi'),

				);
			}

			$data = array(
				'sejarah_id'    => $sejarah['sejarah_id'],
				'deskripsi'    => $i->post('deskripsi'),
			);
			$this->mProfil->editsejarah($data);
			$this->session->set_flashdata('sukses', 'Success');

			redirect(base_url('admin/profil/sejarah'));
		}
	}

	// end page profil sejarah	

	public function pejabat()
	{
		$site  = $this->mConfig->list_config();
		$pejabat = $this->mProfil->index();

		$data = array(
			'title'        => 'Pejabat - ' . $site['nameweb'],
			'pejabat'        => $pejabat,
			'isi'        => 'admin/profil/pejabat/list'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Add a new item
	public function create()
	{
		$pejabat    = $this->mProfil->listPejabat();
		$site    = $this->mConfig->list_config();

		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules('nama_pejabat', 'Nama Pejabat', 'required');
		$valid->set_rules('jabatan', 'Jabatan', 'required');

		if ($valid->run() === FALSE) {

			$data = array(
				'title'    => 'Create Pejabat - ' . $site['nameweb'],
				'pejabat'    => $pejabat,
				'isi'    => 'admin/profil/pejabat/create'
			);
			$this->load->view('admin/layout/wrapper', $data);
		} else {

			$i = $this->input;

			$slug = url_title($this->input->post('nama_pejabat'), 'dash', TRUE);
			$data = array(
				'nama_pejabat'    => $i->post('nama_pejabat'),
				'jabatan'    => $i->post('jabatan'),
			);
			$this->mProfil->createPejabat($data);
			$this->session->set_flashdata('sukses', 'Pejabat telah ditambah');
			redirect(base_url('admin/pejabat/index'));
		}
	}

	//Update one item
	public function edit($pejabat_id)
	{
		$pejabat  = $this->mProfil->detailPejabat($pejabat_id);
		$site    = $this->mConfig->list_config();

		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules('nama_pejabat', 'Nama Pejabat', 'required');
		$valid->set_rules('jabatan', 'Jabatan', 'required');

		if ($valid->run() === FALSE) {

			$data = array(
				'title'    => 'Edit Pejabat - ' . $pejabat['nama_pejabat'],
				'pejabat'    => $pejabat,
				'isi'    => 'admin/profil/pejabat/edit'
			);
			$this->load->view('admin/layout/wrapper', $data);
		} else {

			$i = $this->input;
			if ($i->post('nama_pejabat') == true) {

				$data = array(
					'pejabat_id'    => $pejabat['pejabat_id'],
					'nama_pejabat'        => $i->post('nama_pejabat'),
					'jabatan'        => $i->post('jabatan'),
				);
			}

			$data = array(
				'pejabat_id'    => $pejabat['pejabat_id'],
				'nama_pejabat'        => $i->post('nama_pejabat'),
				'jabatan'        => $i->post('jabatan'),
			);
			$this->mProfil->editPejabat($data);
			$this->session->set_flashdata('sukses', 'Success');

			redirect(base_url('admin/pejabat/'));
		}
	}

	//Delete one item
	public function delete_pejabat($pejabat_id)
	{
		$data = array('pejabat_id'    => $pejabat_id);
		$this->mProfil->deletePejabat($data);
		$this->session->set_flashdata('sukses', 'Success');
		redirect(base_url('admin/pejabat'));
	}
	// end pejabat

	//page struktur
	public function struktur()
	{

		$site      = $this->mConfig->list_config();
		$struktur = $this->mProfil->list_struktur();

		$data = array(
			'title'		=> 'Struktur- ' . $site['nameweb'],
			'struktur'	=> $struktur,
			'site'		=> $site,
			'isi'		=> 'admin/profil/struktur/list'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	public function create_struktur()
	{

		$site = $this->mConfig->list_config();

		$v = $this->form_validation;
		$v->set_rules('image_name', 'Nama Gambar', 'required');

		if ($v->run()) {

			$config['upload_path'] 		= './assets/upload/image/';
			$config['allowed_types'] 	= 'gif|jpg|png';
			$config['max_size']			= '1000'; // KB			
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('image')) {

				$data = array(
					'title'			=> 'Create struktur - ' . $site['nameweb'],
					'site'			=> $site,
					'error'			=> $this->upload->display_errors(),
					'isi'			=> 'admin/profil/struktur/create'
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
				$slugImage = url_title($this->input->post('image_name'), 'dash', TRUE);
				$data = array(
					'image'			=> $upload_data['uploads']['file_name'],
					'image_name'	=> $i->post('image_name'),
				);
				$this->mProfil->create_struktur($data);
				$this->session->set_flashdata('sukses', 'Success');
				redirect(base_url('admin/profil/struktur'));
			}
		}
		// Default page
		$data = array(
			'title'		=> 'Create struktur - ' . $site['nameweb'],
			'site'		=> $site,
			'isi'		=> 'admin/profil/struktur/create'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	public function edit_struktur($struktur_id)
	{

		$struktur	= $this->mProfil->detail_struktur($struktur_id);

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
						'title'		=> 'Edit struktur - ' . $struktur['image_name'],
						'struktur'	=> $struktur,
						'error'		=> $this->upload->display_errors(),
						'isi'		=> 'admin/profil/struktur/edit'
					);
					$this->load->view('admin/layout/wrapper', $data);
				} else {

					//hapus foto lama
					if ($struktur['image'] != "") {
						unlink('./assets/upload/image/' . $struktur['image']);
						unlink('./assets/upload/image/thumbs/' . $struktur['image']);
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
						'struktur_id'		=> $struktur['struktur_id'],
						'image'			=> $upload_data['uploads']['file_name'],
						'image_name'	=> $i->post('image_name')
					);
					$this->mProfil->edit_struktur($data);
					$this->session->set_flashdata('sukses', 'Success');
					redirect(base_url('admin/profil/struktur'));
				}
			} else {
				$i = $this->input;
				$data = array(
					'struktur_id'		=> $struktur['struktur_id'],
					'image_name'	=> $i->post('image_name'),
				);
				$this->mProfil->edit_struktur($data);
				$this->session->set_flashdata('sukses', 'Success');
				redirect(base_url('admin/profil/struktur'));
			}
		}

		$data = array(
			'title'		=> 'Edit struktur - ' . $struktur['image_name'],
			'struktur'	=> $struktur,
			'isi'		=> 'admin/profil/struktur/edit'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	public function delete_struktur($struktur_id)
	{
		$data = array('struktur_id'	=> $struktur_id);
		$this->mProfil->delete_struktur($data);
		$this->session->set_flashdata('sukses', 'Success');
		redirect(base_url('admin/profil/struktur'));
	}
}
