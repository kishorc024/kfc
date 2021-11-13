<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	
	public function __construct()
    {
		parent::__construct();
		//$this->load->model('BlogModel', 'blog');
		$this->load->model('CookieModel', 'cookie');
	} 

	public function index() 
	{
		$data['tab'] = "blog";
		$data['webOrMobile'] = $this->cookie->webOrMobile();		
        $data['meta_title'] = $this->cookie->meta_title;;
		$data['meta_description'] = $this->cookie->meta_description;
		$data['meta_image'] = $this->cookie->meta_image;
		$data['meta_url'] = $this->cookie->meta_url;        
		$data['meta_keywords'] = $this->cookie->meta_keywords;    
		//$data['result'] = $this->blog->lists();
		$this->load->view('layout/header',$data);
		$this->load->view('user/blogs');
		$this->load->view('layout/footer');	

	}
	public function view($urltitle) 
		{
			$data['tab'] = "blog";
			$data['webOrMobile'] = $this->cookie->webOrMobile();		
			$data['meta_title'] = $this->cookie->meta_title;;
			$data['meta_description'] = $this->cookie->meta_description;
			$data['meta_image'] = $this->cookie->meta_image;
			$data['meta_url'] = $this->cookie->meta_url;        
			$data['meta_keywords'] = $this->cookie->meta_keywords;  
			//$data['data'] = $this->blog->getbyurltitle($urltitle);
			$this->load->view('layout/header',$data);
			$this->load->view('user/blog');
			$this->load->view('layout/footer');	
		}
	
	
}