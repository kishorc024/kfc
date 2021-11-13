<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
		parent::__construct();
		
		$this->load->model('DBModel', 'dbmodel');
		$this->load->library("session");
		$this->load->helper('cookie');
		$this->load->model('TestimonialModel', 'testimonial');
        $this->load->model('BlogModel', 'blog');

    }

    public function index()
    {
        
		
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/layout/footer');
        
    }
    

    public function testimonial($id)
    {
        $this->load->helper('cookie');        
        $data['id']= $id;
		$data['data']=  $this->testimonial->getbyid($id);
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/testimonial',$data);
        $this->load->view('admin/layout/footer');
    }
    
    public function testimonials()
     {
        $this->load->helper('cookie');        
        $data['result'] = $this->testimonial->lists();
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/testimonials');
        $this->load->view('admin/layout/footer');
     }
     public function savetestimonial()
	{
		$this->testimonial->save();
		redirect(base_url('admin/testimonials'));
	}
	
	public function deletetestimonial($id)
	{
		$this->testimonial->delete($id);
		redirect(base_url('admin/testimonials'));
	}

    public function blog($id)
    {
        $this->load->helper('cookie');        
        $data['id']= $id;
		$data['data']=  $this->blog->getbyid($id);
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/blog',$data);
        $this->load->view('admin/layout/footer');
    }
    
    public function blogs()
     {
        $this->load->helper('cookie');        
        $data['result'] = $this->blog->lists();
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/blogs');
        $this->load->view('admin/layout/footer');
     }
     public function saveblog()
	{
		$this->blog->save();
		redirect(base_url('admin/blogs'));
	}
	
	public function deleteblog($id)
	{
		$this->blog->delete($id);
		redirect(base_url('admin/blogs'));
	}

   
	

  
}
