<?php  
  
class Currentissue_model extends CI_Model {
    public function get_all_currentissue() {
        $this->db->select('*');
        $this->db->from('issue')
                  ->order_by('id' , 'asc')
                 ->limit(30);
        
        $objQuery = $this->db->get();
        return $objQuery->result_array();
    }
}
