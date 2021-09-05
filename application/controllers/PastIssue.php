<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PastIssue extends CI_Controller {
	
	public function index()
	{
		
		$this->load->view('includes/header');
		$this->load->view('pastissue');
		$this->load->view('includes/footer');
     
	}

	
}
