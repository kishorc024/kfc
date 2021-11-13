<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	
	public function __construct()
    {
		parent::__construct();	
		$this->load->model('CookieModel', 'cookie');
	} 

	public function index() 
	{
		$data['tab'] = "index";
		$data['webOrMobile'] = $this->cookie->webOrMobile();		
        $data['meta_title'] = $this->cookie->meta_title;;
		$data['meta_description'] = $this->cookie->meta_description;
		$data['meta_image'] = $this->cookie->meta_image;
		$data['meta_url'] = $this->cookie->meta_url;        
		$data['meta_keywords'] = $this->cookie->meta_keywords;    
		$this->load->view('layout/header',$data);
		$this->load->view('user/contact');
		$this->load->view('layout/footer');
	
	}

	public function save()
	{

		$this->contact->save();
		$this->session->set_flashdata('success_msg', 'Thank you, we have received your message.');

		redirect(base_url('contact'));

	}

	
	
}