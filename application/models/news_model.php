<?php defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model
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
	*	$this->products_model->get('en'); 
	*		Retrieves all the records in the table "dbAH.series_translation" in the language passed as a parameter
	*
	*/
	
	public function get($langcode = null/*, $newsId = null*/)
	{	

		if ($langcode === null)
		{
			$query = $this->db->get('news_translation');
		} else
		{
			$query = $this->db->get_where('news_translation', ['language_id' => $langcode/*, 'news_translation_id' => $newsId*/]);
		}

	return $query->result_array();
	}
}
