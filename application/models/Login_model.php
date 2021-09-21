<?php  
  
class Login_model extends CI_Model { 
    
    public function isvalidate($username,$password)
    {
      $q=$this->db->where(['username'=>$username,'password'=>$password])
           ->get('account');
           
           if($q->num_rows())
           {
               return $q->row()->id;

           }
           else
           {
               return false;
           }
           
    }
}