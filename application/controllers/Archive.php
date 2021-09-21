<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Archive extends CI_Controller {
	/*public function index()
	{ 
		$this->load->model('Archive_model');
		$data['volume']= $this->Archive_model->fetch_volume();
		$this->load->view('includes/header');
			$this->load->view('Archive',$data);
			$this->load->view('includes/footer');

		

	}*/
	public function index()
	{
		$this->load->model('Archive_model');
			
			$arrData['Archive'] = $this->Archive_model->get_all_Archiveissue();
			
		$this->load->view('includes/header');
			$this->load->view('Archive',$arrData);
			$this->load->view('includes/footer');

	
	
		
     
	}
	
}
