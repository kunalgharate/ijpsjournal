<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PayFee extends CI_Controller {
	
	public function index()
	{
		
		$this->load->view('includes/header');
		$this->load->view('payfee');
		$this->load->view('includes/footer');
     
	}

	
}