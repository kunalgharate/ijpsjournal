<?php  
  
class Admin_model extends CI_Model { 
    
    public function get_all_menuscript_data() {
            $this->db->select('*');
            $this->db->from('menuscript')
                    ->order_by('id','desc');
            $objQuery = $this->db->get();
            return $objQuery->result_array();
        }
    public function create_issue($formArray)   {
        $this->db->insert('issue', $formArray);
    }
    public function get_all_issue_data() {
        $this->db->select('*');
        $this->db->from('issue')
             ->order_by('id','desc');
        $objQuery = $this->db->get();
        return $objQuery->result_array();
    }
    public function del($id) {

       $this->db->delete('issue',['id'=>$id]);
    }
    
    public function find_issue($id)
    {
        $objQuery=$this->db->select()
                ->where('id',$id)
                ->get('issue');
                return $objQuery->row();
    }
    public function issue_update($id,$formArray){
    
    return $this->db->where('id',$id)
                    ->update('issue',$formArray);

   

    }


}  
  