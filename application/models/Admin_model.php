<?php  
  
class Admin_model extends CI_Model { 
    public function isvalidate($username,$password)
    {
      $q=$this->db->where(['username'=>$username,'password'=>$password])
           ->get('account');
           if($q->num_rows())
           {
               return True;

           }
           else
           {
               return false;
           }
           
    }
    public function get_all_menuscript_data() {
            $this->db->select('*');
            $this->db->from('menuscript');
            $objQuery = $this->db->get();
            return $objQuery->result_array();
        }
    


}  
  