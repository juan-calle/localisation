<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pages_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	*
	*
	* @usage
	*	
	*	$this->pages_model->get('en'); 
	*		Retrieves all the records in the table "dbAH.pages_translation" where the language matches the one passed as a parameter
	*
	*/
	
	public function get($langcode = null, $pageId = null)
	{	

		if ($langcode === null)
		{
			$query = $this->db->get('pages_translation');
		} else
		{
			$query = $this->db->get_where('pages_translation', ['language_id' => $langcode, 'pages_translation_id' => $pageId]);
		}

	return $query->result_array();
	}
}
