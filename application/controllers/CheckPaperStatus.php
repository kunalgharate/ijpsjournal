<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CheckPaperStatus extends CI_Controller {
	
	public function index()
	{
		
		$this->load->view('includes/header');
		$this->load->view('checkpaperstatus');
		$this->load->view('includes/footer');
     
	}

	public function paper_status(){
        $this->load->model('Checkpaperstatus_model');
		$Article_id=$this->input->post();
	 
        $arrData['statusview'] = $this->Checkpaperstatus_model->get_paperstatus($Article_id);
		
		$this->load->view('includes/header');
		$this->load->view('status',$arrData);
        $this->load->view('includes/footer');
    }
}
