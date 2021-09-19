<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class plagirism extends CI_Controller {
	
	public function index()
	{
		
		$this->load->view('includes/header');
		$this->load->view('plagirism');
		$this->load->view('includes/footer');
     
	}

	
}
