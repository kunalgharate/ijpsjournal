<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Currentissue extends CI_Controller {
	
	public function index()
	{
		$this->load->model('Currentissue_model');
			
			$arrData['Currentissue'] = $this->Currentissue_model->get_all_currentissue();
		$this->load->view('includes/header');
		$this->load->view('currentissue',$arrData);
		$this->load->view('includes/footer');
     
	}

	
}
