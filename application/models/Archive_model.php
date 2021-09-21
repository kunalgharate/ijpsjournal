<?php  
  
class Archive_model extends CI_Model {
    public function fetch_volume() {

        $this->db->order_by("volume","ASC");
        $query =$this->db->get("issue");
        return $query->result();
    }
   public function get_all_Archiveissue() {
        $this->db->where('volume');
        $this->db->order_by('id','desc');
      
        
        $objQuery = $this->db->get('issue');
        return $objQuery->result_array();
    }
  
}