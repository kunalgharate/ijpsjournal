<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImpactFactor extends CI_Controller {
	
	public function index()
	{
		
		$this->load->view('includes/header');
		$this->load->view('impactfactor');
		$this->load->view('includes/footer');
     
	}

	
}
