<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CopyrightForm extends CI_Controller {
	
	public function index()
	{
		
		$this->load->view('includes/header');
		$this->load->view('copyrightform');
		$this->load->view('includes/footer');
     
	}

	
}
