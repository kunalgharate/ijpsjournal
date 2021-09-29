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
    public function get_all_paperstatus() {
        $this->db->select('*');
        $this->db->from('paperstatus')
             ->order_by('id','desc');
        $objQuery = $this->db->get();
        return $objQuery->result_array();
    }


    public function create_status( $formArray){
        $this->db->insert('paperstatus', $formArray);

    }
    public function delete($id) {

        $this->db->delete('paperstatus',['id'=>$id]);
     }
     
     public function find_status($id)
     {
         $objQuery=$this->db->select()
                 ->where('id',$id)
                 ->get('paperstatus');
                 return $objQuery->row();
     }
    public function update_status($id,$formArray){
    
        return $this->db->where('id',$id)
                        ->update('paperstatus',$formArray);
    
       
    
    }
   # contact_data
   public function contact_data() {
    $this->db->select('*');
    $this->db->from('contact')
            ->order_by('id','desc');
    $objQuery = $this->db->get();
    return $objQuery->result_array();
}
}  
  