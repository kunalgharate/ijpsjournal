<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Currentissue extends CI_Controller {
	
	public function index()
	{
	
		$this->load->view('includes/header');
		$this->load->view('currentissue');
		$this->load->view('includes/footer');
     
	}

	
}
