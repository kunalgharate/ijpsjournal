<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class publicationarea extends CI_Controller {    
  public function index(){
  $this->load->view('includes/header');
  $this->load->view('publicationarea');
  $this->load->view('includes/footer');

}


}
