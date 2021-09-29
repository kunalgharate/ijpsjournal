<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {    
 
    
  
    public function dashboard(){
        if(!$this->session->userdata("id"))
        {
            redirect('login');
        }
        else{	
            $this->load->model('Admin_model');
            $arrData['menuscript_data'] = $this->Admin_model->get_all_menuscript_data();
            return $this->load->view('dashboard',$arrData);
        }
    }
    public function add_issue(){
        if(!$this->session->userdata("id"))
        {
            redirect('login');
        }
        else{	
        $this->load->view('add_issue');
        }
    }
  
    public function create_issue(){
        if(!$this->session->userdata("id"))
        {
            redirect('login');
        }
        else{	
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
                'issue_id' => $this->input->post('issue_id'),
			    'doi'=> $this->input->post('doi'),
                'issue_paper'=> "upload/issue_paper/".$data['raw_name'].$data['file_ext'],
			    'certificate'=> "upload/certificate/".$certi['file_name'],
			);
		$this->Admin_model->create_issue($formArray);
        $this->session->set_flashdata('add_issue', 'Issue Successfully Added.');
		$this->load->view('add_issue','refresh');

			 
		}
    }

    }


    public function issue_data()
    {
        if(!$this->session->userdata("id"))
        {
            redirect('login');
        }
        else{	
        $this->load->model('Admin_model');
        
        $arrData['issue_data'] = $this->Admin_model->get_all_issue_data();
		$this->load->view('issue_data',$arrData);
        
        }

    }


    public function issueupdate($id) {
        if(!$this->session->userdata("id"))
        {
            redirect('login');
        }
        else{	
        $this->load->model('Admin_model');
       $arrData= $this->Admin_model->find_issue($id);
        $this->load->view('issueupdate',$arrData);
        }
    }
    public function issue_update($id) {
        if(!$this->session->userdata("id"))
        {
            redirect('login');
        }
        else{	

        $config1=['upload_path' => './upload/issue_paper/' , 'allowed_types' => 'pdf|docs|docx|doc',];
        $this->load->library('upload',$config1);
        $this->upload->initialize($config1);
        $this->upload->do_upload('userfile');
        $post=$this->input->post();
		$data=$this->upload->data();
        $issue_paper=base_url("issue_paper/".$data['raw_name'].$data['file_ext']);
        $issue_paper=$this->upload->data();
        
        if($issue_paper['file_name'] == null){
            $old_issue_file = $this->input->post('old_issue_file');
            $new_issue_file = $old_issue_file;
            
        } 
        else{
             $new_issue_file ="upload/issue_paper/". $issue_paper['file_name'];
             
        }

    
        
        $config2=['upload_path' => './upload/certificate/' , 'allowed_types' => 'pdf|docs|docx|doc',];
        $this->upload->initialize($config2);
        $this->upload->do_upload('certificate');
        $certificate=$this->upload->data();
        $this->load->model('Admin_model');
        
        if($certificate['file_name'] == null){
            $old_certificate = $this->input->post('old_certificate');
            $new_certificate = $old_certificate;
           
        } 
        else{
             
            $new_certificate  = "upload/certificate/".$certificate['file_name'];
             
        }
           
            $post=$this->input->post();
            $certi=$this->upload->data();
			$certificate=base_url("certificate/".$certi['file_name']);
            print_r($certificate);
            #$post=$this->input->post(); 
            $this->load->model('Admin_model','issue_update');
            $formArray = array( 
                'paper_title' => $this->input->post('paper_title'),
			    'authorname' => $this->input->post('authorname'),
			    'volume' => $this->input->post('volume'),
                'issue_id' => $this->input->post('issue_id'),
			    'doi'=> $this->input->post('doi'),
                'issue_paper'=> $new_issue_file,
			    'certificate'=> $new_certificate ,
			);
      
            $this->load->model('Admin_model');
            $this->Admin_model->issue_update($id,$formArray);
            $this->session->set_flashdata('issue_data', 'Successfully Updated.');
            return redirect('admin/issue_data','refresh');
    } 
    }
    
    

    public function issuedelete() 
    {
    if(!$this->session->userdata("id"))
     {
        redirect('login');
    }
    else{	
    $id=$this->input->post('id');
    $this->load->model('Admin_model','delete');
     if($this->delete->del($id))
     {
    
        
        echo "Try again";

    }
    else{
        echo "Delete successfully";
        return redirect('admin/issue_data');
    }   
    }     
    }
    #paperstatus

    public function paper_status(){
        if(!$this->session->userdata("id"))
        {
            redirect('login');
        }
        else{	
        $this->load->model('Admin_model');
        
        $arrData['paperstatus_data'] = $this->Admin_model->get_all_paperstatus();
		$this->load->view('paper_status',$arrData);
        }
        
    }

    public function create_status(){
        if(!$this->session->userdata("id"))
        {
            redirect('login');
        }
        else{	
        $this->load->model('Admin_model');
		if($this->form_validation->run( 'add_admin_rules'));
		{
			$this->load->model('Admin_model');
			

          
			$formArray = array( 
                'Article_id' => $this->input->post('Article_id'),
			    'Name' => $this->input->post('Name'),
			    'Title' => $this->input->post('Title'),
                'status' => $this->input->post('status'),
			    
			);
		$this->Admin_model->create_status($formArray);
        
		$this->session->set_flashdata('paper_status', 'Successfully Status Created.');
        return redirect('admin/paper_status');
		
        }
			 
		}
    }

        
        public function paperstatusupdate($id) {
            if(!$this->session->userdata("id"))
            {
                redirect('login');
            }
            else{	
            $this->load->model('Admin_model');
           $arrData= $this->Admin_model->find_status($id);
            $this->load->view('paperstatusupdate',$arrData);
            }
        }
        

        public function pstatusupdate($id){
            if(!$this->session->userdata("id"))
            {
                redirect('login');
            }
            else{	
            $this->load->model('Admin_model');
            if($this->form_validation->run( 'add_admin_rules'));
            {
                $this->load->model('Admin_model');
                
    
              
                $formArray = array( 
                    'Article_id' => $this->input->post('Article_id'),
                    'Name' => $this->input->post('Name'),
                    'Title' => $this->input->post('Title'),
                    'status' => $this->input->post('status'),
                    
                );
            $this->Admin_model->update_status($id,$formArray);
            return redirect('admin/paper_status');
            $this->load->view('paper_status');
    
                 

        }
    }
     
    }

    public function pstatusdelete() 
    {
     if(!$this->session->userdata("id"))
     {
            redirect('login');
    }
 else{	
    $id=$this->input->post('id');
    $this->load->model('Admin_model','delete');
     if($this->delete->delete($id))
     {
    
        
        echo "Try again";

    }
    else{
        echo "Delete successfully";
        return redirect('admin/paper_status');
    }

    }
}

#contact data 
public function contact_data ()
{
    if(!$this->session->userdata("id"))
    {
        redirect('login');
    }
    else{	
    $this->load->model('Admin_model');
    
    $arrData['contact_data'] = $this->Admin_model->contact_data();
    $this->load->view('contactdata',$arrData);
    
    }

}
    public function logout()
    {
        $this->session->sess_destroy();
    
        redirect('/login');
    }



    

}