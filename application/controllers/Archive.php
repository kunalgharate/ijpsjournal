<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Archive extends CI_Controller {
	public function index()
	{ 
		$this->load->model('Archive_model');
		$arrdata['Archivedata']= $this->Archive_model->fetch_Arch_data();
		$finalarray = array();
		foreach($arrdata['Archivedata'] as $data)
		{

			// Print on frontend 
			$finalarray[date('Y', strtotime($data['issue_date']))][$data['volume']][$data['issue_id']] = $data['issue_id'];
		}
		$finaldata['Archivedata'] = $finalarray;
		echo "<pre>";
	//	print_r($arrdata['Archivedata']);
		print_r($finalarray);
		exit;
		$this->load->view('includes/header');
			$this->load->view('Archive',$finaldata);
			$this->load->view('includes/footer');

		

			
		

	}
	// public function archive_data()
	// {
	// 	$this->load->model('Archive_model');
			
	// 		$arrData['Archive'] = $this->Archive_model->get_all_Archiveissue();
	// 		echo "<pre>";
	// 		print_r($arrData['Archive']);
	// 		exit;
	// 		$this->load->view('includes/header');
	// 		$this->load->view('Archive',$arrData);
	// 		$this->load->view('includes/footer');

	
	
		
     
	// }
	
}
