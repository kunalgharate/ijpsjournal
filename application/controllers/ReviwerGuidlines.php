<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReviwerGuidlines extends CI_Controller {
	
	public function index()
	{
		
		$this->load->view('includes/header');
		$this->load->view('ReviewerGuidlines');
		$this->load->view('includes/footer');
     
	}

	
}
