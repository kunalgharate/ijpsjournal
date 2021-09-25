<?php  
  
class checkpaperstatus_model extends CI_Model { 

    public function get_paperstatus($Article_id) {
        $objQuery=$this->db->select("Name","Title","status")
                ->where($Article_id,'Article_id')
                ->get('paperstatus');
                 return $objQuery->row();
    }
}
