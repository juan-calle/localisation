<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller
{
	// Loading the parent constructor and the model we will pull info from
	public function __construct()
	{
		parent::__construct();
		$this->load->model('products_model'); 
	}

	public function index()
	{
		// Storing currently selected language into "$data" array and into a single variable "$site_lang"
		$data['site_lang'] = $this->session->userdata('site_lang');
		$site_lang = $data['site_lang'];

		// Declaring an array index of "$data" that will hole the value of the language code depending on the selected language		
		if(!$site_lang || $site_lang == 'english'){
			$data['langcode'] = 'en';
		} else{
			$data['langcode'] = 'bg';	
		}	

		// Storing in an array called 'records' all the records matching the selected language
		$data['records'] = $this->products_model->get($data['langcode']);
					// echo "<pre>";
					// print_r($data['records']);
					// echo "</pre><br>";		


		// Storing the array containing the translation of the all the user interface elements. This array is stored
		// in application/languages, inside of each language's folder, in a file called "ui_lang.php"
		$data['ui'] = $this->lang;

		// Storing the title of the page into "$data"
		$data['title'] = $this->lang->line('products');




		// Loading the views and passing the array $data to them. This will make the values stored in $data available
		// from the view files
		$this->load->view('inc/header_view' , $data);
		$this->load->view('products_view' , $data);
		$this->load->view('inc/footer_view' , $data);		
	}
}