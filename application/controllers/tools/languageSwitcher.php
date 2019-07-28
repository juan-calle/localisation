<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
*
*
* Class that makes english language the default one if none is selected. and redirects the page 
*
*
*/

class LanguageSwitcher extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	function switchLang($language = "")
	{
		$language = ($language != "") ? $language : "english";
		$this->session->set_userdata('site_lang', $language);

		redirect($_SERVER['HTTP_REFERER']);

	}
}