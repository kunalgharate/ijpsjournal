<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editorialpolicy extends CI_Controller {
	
	public function index()
	{
		
		$this->load->view('includes/header');
		$this->load->view('editorialpolicy');
		$this->load->view('includes/footer');
     
	}

	
}
