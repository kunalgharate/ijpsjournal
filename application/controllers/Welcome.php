<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('homepage');
		$this->load->view('includes/footer');
	}

	public function demo()
	{
		$this->load->view('demo');
	}

	
}