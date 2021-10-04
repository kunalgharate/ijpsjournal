<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class ContactUs extends CI_Controller {
	
	function __construct() { 
		parent::__construct(); 
		$this->load->library('session'); 
		$this->load->helper('form'); 
	 } 
	
	public function index()
	{
		
		$this->load->view('includes/header');
		$this->load->view('contactus');
		$this->load->view('includes/footer');
     
	}
	public function send()
	{
		$this->load->library('session');
		$this->load->model('Contactus_model');
		$this->form_validation->set_rules('authorname','Name','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('message','text','required');
		if($this->form_validation->run() );
		{
			$this->load->model('Contactus_model');
			
			$post=$this->input->post();
		
			$formArray = array( 
			'name' => $this->input->post('name'),
			'email'=> $this->input->post('email'),
			'message'=> $this->input->post('message'),
	
			
		);

		$this->Contactus_model->send($formArray);

		$this->session->set_flashdata('contact', 'Successfully Submited.');
		$this->load->view('includes/header');
		$this->load->view('contactus');
		$this->load->view('includes/footer');


	}
     
	}


	/*#public function send_mail() { 
		$from_email = "ajinfotics@gmail.com"; 
		$to_email = $this->input->post('email');
		$message=$this->input->post('message'); 
  
		
		$this->load->library('email'); 
  
		$this->email->from($from_email, 'Your Name'); 
		$this->email->to($to_email);
		$this->email->subject('IJPS Contact'); 
		$this->email->message($message); 
  

		if($this->email->send()) {
		$this->session->set_flashdata("email_sent","Email sent successfully."); 
		redirect('contactus'); 
		}
		else{ 
		$this->session->set_flashdata("email_sent","Error in sending Email."); 
		redirect('contactus'); 
	 } */
  }

?>

	

