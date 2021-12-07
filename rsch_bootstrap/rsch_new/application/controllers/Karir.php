<?php
/*
    @Copyright Indra Rukmana
    @Class Name : Home(Front)
	*/
defined('BASEPATH') or exit('No direct script access allowed');

class Karir extends CI_Controller
{

	// Main Page Home
	// public function index() {

	// 	$site  		= $this->mConfig->list_config();
	// 	$lastKarirs = $this->mKarirs->listLastKarirsPub();

	// 	// Pagination
	// 	$this->load->library('pagination');
	// 	$config['base_url'] 		= base_url().'karir/index/';
	// 	$config['total_rows'] 		= count($this->mKarirs->totalKarirs());
	// 	$config['use_page_numbers'] = TRUE;
	// 	$config['num_links'] 		= 5;
	// 	$config['uri_segment'] 		= 3;
	// 	$config['per_page'] 		= 10;
	// 	$config['first_url'] 		= base_url().'karir/';
	// 	$this->pagination->initialize($config); 
	// 	$page 		= ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) * $config['per_page'] : 0;
	// 	$karirs 	= $this->mKarirs->perPageKarirs($config['per_page'], $page);
	// 	// End Pagination		

	// 	$data = array(	'title'		=> 'Karir - '.$site['nameweb'],
	// 					'site'		=> $site,
	// 					'karirs'	=> $karirs,
	// 					'lastKarirs'=> $lastKarirs,
	// 					'pagin' 	=> $this->pagination->create_links(),												
	// 					'isi'		=> 'front/karir/news');
	// 	$this->load->view('front/layout/wrapper',$data);
	// }

	// Read Karir
	public function detil($slugKarir)
	{

		$site  		= $this->mConfig->list_config();
		$karir 		= $this->mKarirs->readKarir($slugKarir);
		$karirId 	= $karir['karir_id'];
		$count  	= $this->mKarirs->countCommentByKarir($karirId);


		$data = array(
			'title'		=> $karir['title'] . ' - ' . $site['nameweb'],
			'site'		=> $site,
			'karir'		=> $karir,
			'count'		=> $count,
			'isi'		=> 'front/karir/read'
		);
		$this->load->view('front/layout/wrapper', $data);
	}

	public function index()
	{

		$content  	= $this->mKarirs->listContent();
		$site  		= $this->mConfig->list_config();
		$karir 		= $this->mKarirs->listLastKarirsPub();
		$infoRs     = $this->mInfoRs->index();

		$data = array(
			'title'		=> 'Rawat Inap - ' . $site['nameweb'],
			'site'		=> $site,
			'content' 	=> $content,
			'karir' 	=> $karir,
			'infoRs'	=> $infoRs,
			'isi'		=> 'front/karir/news'
		);
		$this->load->view('front/layout/wrapper', $data);
	}
}
