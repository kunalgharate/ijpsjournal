<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Archive extends CI_Controller {
	public function index()
	{ 
		$this->load->model('Archive_model');
		$arrdata['Archivedata']= $this->Archive_model->fetch_Arch_data();
		$this->load->view('includes/header');
			$this->load->view('Archive',$arrdata);
			$this->load->view('includes/footer');
			
		

	}
	public function archive_data()
	{
		$this->load->model('Archive_model');
			
			$arrData['Archive'] = $this->Archive_model->get_all_Archiveissue();
			
		$this->load->view('includes/header');
			$this->load->view('Archive',$arrData);
			$this->load->view('includes/footer');

	
	
		
     
	}
	
}
