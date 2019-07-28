<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Support extends CI_Controller
{
	public function index()
	{
		// Storing currently selected language into "$data" array and into a single variable "$site_lang"
		$data['site_lang'] = $this->session->userdata('site_lang');
		$site_lang = $data['site_lang'];

		// Storing the array containing the translation of the all the user interface elements. This array is stored
		// inside of each language's folder in application/languages, in a file called "ui_lang.php"
		$data['ui'] = $this->lang;

		// Storing the translated title of the page into "$data"		
		$data['title'] = $this->lang->line('support');

		// Declaring an array index of "$data" called "langcode" that will hold the value of the language code
		// and will hide an element of the view depending on it.
		$data['langcode'] = "";

		if(!$site_lang || $site_lang == 'english'){
			$data['langcode'] = 'en';
			$data['visibility'] ='';
		} else{
			$data['langcode'] = 'bg';	
			$data['visibility'] ='hidden';
		}	

		// Loading the views and passing the array to them. This will make the values stored in $data available
		$this->load->view('inc/header_view' , $data);
		$this->load->view('support_view' , $data);
		$this->load->view('inc/footer_view' , $data);		
	}
}