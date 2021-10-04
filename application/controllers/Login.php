<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Login_model');
    }
	
	public function index()
	{
        if($this->session->userdata("id"))
        {
            redirect('admin/dashboard');
        }
        else{	
		$this->load->view('login');
         }
		
	}

	public function login()
    {
        $this->load->library('session');
        $this->load->library('form_validation','fv');
        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules('username', 'username' ,'requir|alpha');
        $this->form_validation->set_rules('password' ,'password', 'required|max_length[6]');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
        
        if( $this->form_validation->run() == FALSE )
        {
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $this->load->model('Login_model');
            $login_id=$this->Login_model->isvalidate($username,$password);
            if($login_id)
            {
                $this->load->library('session');
                $this->session->set_userdata('id',$login_id);
                     return redirect('admin/dashboard');
                
               # echo "Login succesfully";


            }
            else{
                $this->session->set_flashdata('notmatch', 'Username or Password Not match');
                return redirect('login');
                
               # echo "Username or Password Not match";

            }


        }
        else
        {
            echo "Somthing was wrong";

        }
    }

	
}
