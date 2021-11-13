<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("session");
    }
    

    public function index()
    {
        $this->clearCookie('usertype');
        $this->clearCookie('id');
        $this->clearCookie('customerid');
        $this->session->unset_userdata('usertype');
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('customerid');
        redirect(base_url());
    }

    public function clearCookie($name)
    {
        $cookie = array(
            'name' => $name,
            'value' => null,            
            'expire' => '-31556926',
        );
        $this->input->set_cookie($cookie);
    }

}
