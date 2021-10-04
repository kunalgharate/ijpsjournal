<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accesspolicy extends CI_Controller {
	
	public function index()
	{
		
		$this->load->view('includes/header');
		$this->load->view('accesspolicy');
		$this->load->view('includes/footer');
     
	}

	
}
