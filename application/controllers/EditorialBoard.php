<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditorialBoard extends CI_Controller {
	
	public function index()
	{
		
		$this->load->view('includes/header');
		$this->load->view('editorialboard');
		$this->load->view('includes/footer');
     
	}

	
}
