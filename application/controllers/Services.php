<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {
	
	public function __construct()
    {
		parent::__construct();
	
		$this->load->model('CookieModel', 'cookie');
	} 

	public function index() 
	{
		$data['tab'] = "functional";
		$data['webOrMobile'] = $this->cookie->webOrMobile();		
        $data['meta_title'] = $this->cookie->meta_title;;
		$data['meta_description'] = $this->cookie->meta_description;
		$data['meta_image'] = $this->cookie->meta_image;
		$data['meta_url'] = $this->cookie->meta_url;        
		$data['meta_keywords'] = $this->cookie->meta_keywords;    
		$this->load->view('layout/header',$data);
		$this->load->view('user/services');
		$this->load->view('layout/footer');
	
	}
	public function IVF_Treatment() 
	{
		$data['tab'] = "functional";
		$data['webOrMobile'] = $this->cookie->webOrMobile();		
        $data['meta_title'] = $this->cookie->meta_title;;
		$data['meta_description'] = $this->cookie->meta_description;
		$data['meta_image'] = $this->cookie->meta_image;
		$data['meta_url'] = $this->cookie->meta_url;        
		$data['meta_keywords'] = $this->cookie->meta_keywords;    
		$this->load->view('layout/header',$data);
		$this->load->view('user/IVF');
		$this->load->view('layout/footer');
	
	}
	public function IUI_Treatment() 
	{
		$data['tab'] = "functional";
		$data['webOrMobile'] = $this->cookie->webOrMobile();		
        $data['meta_title'] = $this->cookie->meta_title;;
		$data['meta_description'] = $this->cookie->meta_description;
		$data['meta_image'] = $this->cookie->meta_image;
		$data['meta_url'] = $this->cookie->meta_url;        
		$data['meta_keywords'] = $this->cookie->meta_keywords;    
		$this->load->view('layout/header',$data);
		$this->load->view('user/IUI');
		$this->load->view('layout/footer');
	
	}
	public function ICSI_Treatment() 
	{
		$data['tab'] = "functional";
		$data['webOrMobile'] = $this->cookie->webOrMobile();		
        $data['meta_title'] = $this->cookie->meta_title;;
		$data['meta_description'] = $this->cookie->meta_description;
		$data['meta_image'] = $this->cookie->meta_image;
		$data['meta_url'] = $this->cookie->meta_url;        
		$data['meta_keywords'] = $this->cookie->meta_keywords;    
		$this->load->view('layout/header',$data);
		$this->load->view('user/ICSI');
		$this->load->view('layout/footer');
	
	}


	
	
}