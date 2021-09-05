<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddCertificate extends CI_Controller {
	
	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('addcertificate');
		$this->load->view('includes/footer');
	}

	public function demo()
	{
		$this->load->view('demo');
	}

	
}
