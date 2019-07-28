<?php defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller
{
	public function __construct (){
		parent::__construct();
		$this->load->model('news_model');
		$this->load->model('pages_model');
	}

	public function index()
	{
		// Storing currently selected language into "$data" array and into a single variable "$site_lang"
		$data['site_lang'] = $this->session->userdata('site_lang');
		$site_lang = $data['site_lang'];

		// Declaring an array index of "$data" called "langcode" that will hold the value of the language code
		$data['langcode'] = "";
		
		if(!$site_lang || $site_lang == 'english'){
			$data['langcode'] = 'en';
		} else{
			$data['langcode'] = 'bg';	
		}	


		$data['records'] = $this->news_model->get($data['langcode']);
		$data['page_records'] = $this->pages_model->get($data['langcode'], 7);
		// Storing the array containing the translation of all the user interface elements. This array is stored
		// inside of each language's folder in application/languages, in a file called "ui_lang.php"
		$data['ui'] = $this->lang;

		// Storing the translated title of the page into "$data"		
		$data['title'] = $this->lang->line('news');

		// Loading the views and passing the array to them. This will make the values stored in $data available
		// from the view files
		$this->load->view('inc/header_view' , $data);
		$this->load->view('news_view' , $data);
		$this->load->view('inc/footer_view' , $data);		
	}
}