<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menuscript extends CI_Controller {
	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('manuscript');
		$this->load->view('includes/footer');

	}
	
	public function create()
	{
		$this->load->model('Menuscript_model');
		$this->form_validation->set_rules('authorname','Name','required');
		$this->form_validation->set_rules('papertitle','text','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('country','Name','required');
		$this->form_validation->set_rules('file','filename','required');
        
		if($this->form_validation->run()== false) {
		$this->load->view('includes/header');
		$this->load->view('manuscript');
		$this->load->view('includes/footer');
		}else{
			$formArray= array();
			$formArray['authorname ']=$this->input->post('authorname');
			$formArray['papertitle']=$this->input->post('papertitle');
			$formArray['email']=$this->input->post('email');
			$formArray['country']=$this->input->post('country');
			$formArray['file']=$this->input->post('file');
			$formArray['issuedate'] = date('D-M-Y');

		}
     
	}

}
