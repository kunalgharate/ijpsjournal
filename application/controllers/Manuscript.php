<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manuscript extends CI_Controller {
	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('manuscript');
		$this->load->view('includes/footer');

	}
	
	public function create()
	{
		$this->load->library('session');
		$config=['upload_path' => './upload/manuscript/' , 'allowed_types' => 'pdf|docs|docx','required',];
		$this->load->library('upload',$config);
		$this->load->model('Manuscript_model');
		$this->form_validation->set_rules('authorname','Name','required');
		$this->form_validation->set_rules('papertitle','text','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('contact','text','required');
		$this->form_validation->set_rules('country','Name','required');
		if($this->form_validation->run()  && $this->upload->do_upload());
		{
			$this->load->model('Manuscript_model');
			
			$post=$this->input->post();
			$data=$this->upload->data();
			$file=base_url("upload/manuscript/".$data['raw_name'].$data['file_ext']);
			$formArray = array( 
			'authorname' => $this->input->post('authorname'),
			'papertitle'=> $this->input->post('papertitle'),
			'email'=> $this->input->post('email'),
			'contact'=> $this->input->post('contact'),
			'country'=> $this->input->post('country'),
			'file'=> "upload/manuscript/".$data['raw_name'].$data['file_ext'],
			
		);

		$this->Manuscript_model->create($formArray);

		$this->session->set_flashdata('message', 'Successfully Submited.');
		$this->load->view('includes/header');
		$this->load->view('manuscript');
		$this->load->view('includes/footer');


	}
     
	}

}
