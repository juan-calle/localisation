<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Wheretobuy extends CI_Controller
{
	public function index($site_lang = "")
	{	
		// Storing currently selected language into "$data" array and into a single variable "$site_lang"		
		$data['site_lang'] = $this->session->userdata('site_lang');
		$site_lang = $data['site_lang'];

		// Storing the array containing the translation of the all the user interface elements. This array is stored
		// inside of each language's folder in application/languages, in a file called "ui_lang.php"
		$data['ui'] = $this->lang;

		// Storing the translated title of the page into "$data"		
		$data['title'] = $this->lang->line('wheretobuy');

		// Declaring an array index of "$data" called "langcode" that will hold the value of the language code
		// Depending on it, some elements in the view will be display or not 
		$data['langcode'] = "";

		if(!$site_lang || $site_lang == 'english'){
			$data['langcode'] = 'en';
			$data['display_en'] = '';
			$data['display_bg'] = 'none';
		} else{
			$data['langcode'] = 'bg';	
			$data['display_en'] = 'none';
			$data['display_bg'] = '';
		}	

		// Loading the views and passing the array to them. This will make the values stored in $data available
		$this->load->view('inc/header_view' , $data);
		$this->load->view('wheretobuy_view', $data);	
		$this->load->view('inc/footer_view', $data);	
	}
}

	
