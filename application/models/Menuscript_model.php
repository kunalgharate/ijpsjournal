<?php  
  
class Menuscript_model extends CI_Model { 

public function create($formArray)
{
    $this->db->insert('menuscript',$formArray);

}

}
?>