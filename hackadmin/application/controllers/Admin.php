<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	  {
	    parent::__construct();
	    $this->load->helper('url');
			$this->load->library('session');
	    $this->load->model('M_admin', 'admin');
	  }

	public function index()
	{
		// if ($this->session->has_userdata('username')){

  	//$data['username'] = $this->session->has_userdata('username');
    $this->load->view('header');
		$this->load->view('sidemenu');
    //$this->load->view('home', $data);
		$this->load->view('index');
    $this->load->view('footer');
    // } else {
    //   redirect('admin/login');
    // }
	}

	public function haha()
	{
		$this->load->view('header');
		$this->load->view('sidemenu');
		$this->load->view('welcome_message');
		$this->load->view('footer');
	}

	public function login()
	{
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}
}
