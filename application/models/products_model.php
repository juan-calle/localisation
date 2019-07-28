<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Products_model extends CI_Model
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
	
	public function get($id = null)
	{	

		if ($id === null)
		{
			$query = $this->db->get('series_translation');
		} else
		{
			$query = $this->db->get_where('series_translation', ['language_id' => $id]);
		}

	return $query->result_array();
	}
}
