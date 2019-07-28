<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller
{
	// Loading the parent constructor and the model we will pull info from
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pages_model');
	}

	public function index()
	{
		$data['site_lang'] = $this->session->userdata('site_lang');
		$site_lang = $data['site_lang'];		
		$data['langcode'] = "";

		if(!$site_lang || $site_lang == 'english'){
			$data['langcode'] = 'en';
		} else{
			$data['langcode'] = 'bg';	
		}	

		$data['records'] = $this->pages_model->get($data['langcode'], 6);

		$data['ui'] = $this->lang;
		$data['title'] = $this->lang->line('company');

		$this->load->view('inc/header_view' , $data);
		$this->load->view('company_view' , $data);
		$this->load->view('inc/footer_view', $data);		
	}
}