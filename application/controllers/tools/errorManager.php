<?php defined('BASEPATH') OR exit('No direct script access allowed');

class ErrorManager extends CI_Controller 
{
    public function index() 
    {   
        $data['title'] = $this->lang->line('error');
        $data['ui'] = $this->lang;
        $data['site_lang'] = $this->session->userdata('site_lang'); 
        $site_lang = $data['site_lang'];
        $data['langcode'] = "";

        if(!$site_lang || $site_lang == 'english'){
        	$data['langcode'] = 'en';
        } else{
        	$data['langcode'] = 'bg';	
        }	

        $this->load->view('inc/header_view', $data);          
        $this->load->view('errors/html/error_404', $data);            
        $this->load->view('inc/footer_view', $data);      
                   
    }
} 


