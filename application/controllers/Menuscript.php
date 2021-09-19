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
		$config=['upload_path' => './upload/menuscript/' , 'allowed_types' => 'pdf|docs|docx','required',];
		$this->load->library('upload',$config);
		$this->load->model('Menuscript_model');
		$this->form_validation->set_rules('authorname','Name','required');
		$this->form_validation->set_rules('papertitle','text','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('country','Name','required');
		if($this->form_validation->run()  && $this->upload->do_upload());
		{
			$this->load->model('Menuscript_model');
			
			$post=$this->input->post();
			$data=$this->upload->data();
			$file=base_url("upload/menuscript/".$data['raw_name'].$data['file_ext']);
			$formArray = array( 
			'authorname' => $this->input->post('authorname'),
			'papertitle'=> $this->input->post('papertitle'),
			'email'=> $this->input->post('email'),
			'country'=> $this->input->post('country'),
			'file'=> "upload/menuscript/".$data['raw_name'].$data['file_ext'],
			
		);
		$this->Menuscript_model->create($formArray);
		$this->load->view('includes/header');
		$this->load->view('manuscript');
		$this->load->view('includes/footer');

			 
		}
     
	}

}
