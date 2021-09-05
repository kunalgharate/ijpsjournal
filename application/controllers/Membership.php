<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Membership extends CI_Controller {
	
	public function index()
	{
		
		$this->load->view('includes/header');
		$this->load->view('memberships');
		$this->load->view('includes/footer');
     
	}

	
}
