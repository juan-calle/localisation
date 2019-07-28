<?php

// Class that initialises the language_helper after controllers have been loaded
class LanguageLoader
{
	function initialize() 
	{
		// Storing a copy of the CI super object
		$ci =& get_instance();

		// Loading the helper managing language
		$ci->load->helper('language');

		// Assigning the site's language held in Session's userdata array stored in the  and 
		$siteLang = $ci->session->userdata('site_lang');
		if ($siteLang)
		{
			$ci->lang->load('ui', $siteLang);
		}
		else 
		{
			$ci->lang->load('ui', 'english');
		}
	}
}