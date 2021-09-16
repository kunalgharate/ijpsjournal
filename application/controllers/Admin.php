<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {    
  public function index()
    {
        
        
        $this->load->view('login');
        
        
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
    public function dashboard(){
    $this->load->model('Admin_model');
    $arrData['menuscript_data'] = $this->Admin_model->get_all_menuscript_data();
    return $this->load->view('dashboard',$arrData);
    }
    public function add_issue(){
        $this->load->view('add_issue');
    }
  
    public function create_issue(){
        $config1=['upload_path' => './upload/issue_paper/' , 'allowed_types' => 'pdf|docs|docx|doc',];
        $this->load->library('upload',$config1);
        $this->upload->initialize($config1);
        $this->upload->do_upload('userfile');
        $post=$this->input->post();
		$data=$this->upload->data();
        $issue_paper=base_url("issue_paper/".$data['raw_name'].$data['file_ext']);
        $issue_paper=$this->upload->data();

        $config2=['upload_path' => './upload/certificate/' , 'allowed_types' => 'pdf|docs|docx|doc',];
        $this->upload->initialize($config2);
        $this->upload->do_upload('certificate');
        $certificate=$this->upload->data();
      
		$this->load->model('Admin_model');
		if($this->form_validation->run( 'add_admin_rules'));
		{
			$this->load->model('Admin_model');
			
			
            $post=$this->input->post();
            $certi=$this->upload->data();
			$certificate=base_url("certificate/".$certi['file_name']);
          
			$formArray = array( 
                'paper_title' => $this->input->post('paper_title'),
			    'authorname' => $this->input->post('authorname'),
			    'volume' => $this->input->post('volume'),
			    'doi'=> $this->input->post('doi'),
                'issue_paper'=> "upload/issue_paper/".$data['raw_name'].$data['file_ext'],
			    'certificate'=> "upload/certificate/".$certi['file_name'],
			);
		$this->Admin_model->create_issue($formArray);
		$this->load->view('add_issue');

			 
		}
     

    }


    public function issue_data()
    {
        $this->load->model('Admin_model');
        
        $arrData['issue_data'] = $this->Admin_model->get_all_issue_data();
		$this->load->view('issue_data',$arrData);
        

        
    }


    public function issueupdate($id) {
        $this->load->model('Admin_model');
       $arrData= $this->Admin_model->find_issue($id);
        $this->load->view('issueupdate',$arrData);
    }
    public function issue_update($id) {

        $config1=['upload_path' => './upload/issue_paper/' , 'allowed_types' => 'pdf|docs|docx|doc',];
        $this->load->library('upload',$config1);
        $this->upload->initialize($config1);
        $this->upload->do_upload('userfile');
        $post=$this->input->post();
		$data=$this->upload->data();
        $issue_paper=base_url("issue_paper/".$data['raw_name'].$data['file_ext']);
        $issue_paper=$this->upload->data();

        
        $config2=['upload_path' => './upload/certificate/' , 'allowed_types' => 'pdf|docs|docx|doc',];
        $this->upload->initialize($config2);
        $this->upload->do_upload('certificate');
        $certificate=$this->upload->data();
       
        	
        $post=$this->input->post();
        $certi=$this->upload->data();
        $certificate=base_url("certificate/".$certi['file_name']);
      

            #$post=$this->input->post(); 
            $this->load->model('Admin_model','issue_update');
            $formArray = array( 
                'paper_title' => $this->input->post('paper_title'),
			    'authorname' => $this->input->post('authorname'),
			    'volume' => $this->input->post('volume'),
			    'doi'=> $this->input->post('doi'),
                'issue_paper'=> "issue_paper/".$data['raw_name'].$data['file_ext'],
			    'certificate'=> $this->input->post('certificate') ,
			);
      
        $formArray=$this->input->post();
       
        print_r($formArray);
        
            $this->load->model('Admin_model');
            $this->Admin_model->issue_update($id,$formArray);
            return redirect('admin/issue_data');
           
      
}

    public function issuedelete() 
    {
    $id=$this->input->post('id');
    $this->load->model('Admin_model','delete');
     if($this->delete->del($id))
    {
        
        echo "Try again";

    }
    else{
        #echo "Delete successfully";
        return redirect('admin/issue_data');
    }
        
    }
    public function logout()
    {
        $this->session->sess_destroy();
    
        redirect('/admin');
    }

}

    

