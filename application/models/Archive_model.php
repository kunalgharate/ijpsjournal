<?php  
  
class Archive_model extends CI_Model {
    public function fetch_Arch_data() {

        $this->db->select('*');
        $this->db->from('issue');
        $this->db->order_by('id','asc');
        
        $objQuery = $this->db->get();
        return $objQuery->result_array();
    }
   public function get_all_Archiveissue() {
        $this->db->where('issue_id');
        $this->db->order_by('id','desc');
      
        
        $objQuery = $this->db->get('issue');
        return $objQuery->result_array();
    }
  
}