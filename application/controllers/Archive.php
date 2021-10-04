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
		#echo "<pre>";
	//	print_r($arrdata['Archivedata']);
		#print_r($finaldata);
		#exit;
		$this->load->view('includes/header');
			$this->load->view('Archive',$finaldata);
			$this->load->view('includes/footer');

		
	}
	public function Archive_issue($year,$issue,$issue_id)
	{
	 	$this->load->model('Archive_model');
		 $issue_date = $year;
		 $volume =$issue;
		 $issue_id;
		
			$arrData['Archiveissue'] = $this->Archive_model->get_all_Archiveissue($volume, $issue_id);
		# echo "<pre>";
		#print_r($arrData);
		# exit;
		$this->load->view('includes/header');
		$this->load->view('Archive_issue',$arrData);
		$this->load->view('includes/footer');

	
	
		
     
	 }
	
}
