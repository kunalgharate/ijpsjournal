<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CopyrightForm extends CI_Controller {
	
	public function index()
	{
		
		$this->load->view('includes/header');
		$this->load->view('copyrightform');
		$this->load->view('includes/footer');
     
	}
	function download($filename = NULL) {
        // load download helder
        $this->load->helper('download');
        // read file contents
        $data = file_get_contents(base_url('/uploads/copyrightform/'.$filename));
        force_download($filename, $data);
    }

	

	
}
