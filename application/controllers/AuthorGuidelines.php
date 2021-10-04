<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthorGuidelines extends CI_Controller {
	
	public function index()
	{
		
		$this->load->view('includes/header');
		$this->load->view('authorguidelines');
		$this->load->view('includes/footer');
     
	}

	
}
