<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() { 
        parent::__construct(); 
         
        // Load form validation ibrary & user model 
        // $this->load->library('form_validation');         
        // User login status 
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 
    } 
	public function index()
	{	
		$this->load->view('elements/header');
		$this->load->view('home');
	}
}
