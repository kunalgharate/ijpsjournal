<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {    
  public function index()
    {
        
        $this->load->view('includes/header');
        $this->load->view('login');
        $this->load->view('includes/footer');
        
    }
    
    public function login()
    {
        $this->load->library('form_validation','fv');
        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules('username', 'username' ,'requir|alpha');
        $this->form_validation->set_rules('password' ,'password', 'required|max_length[6]');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
        
        if( $this->form_validation->run() == FALSE )
        {
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $this->load->model('Admin_model');
            $login_id=$this->Admin_model->isvalidate($username,$password);
            if($login_id)
            {
                $this->session->set_userdata('id',$login_id);
                return redirect('admin/dashboard');
                
                echo "Login succesfully";


            }
            else{
                echo "Username or Password Not match";

            }


        }
        else
        {
            echo "Somthing was wrong";

        }
    }
     public function dashboard()
	{    
        $this->load->model('Admin_model');
        $arrData['menuscript_data'] = $this->Admin_model->get_all_menuscript_data();
		$this->load->view('dashboard',$arrData);
        
	 
    }

    public function logout()
{
    $this->session->sess_destroy();

    redirect('/admin');
}

    

    
}
