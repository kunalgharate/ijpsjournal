<?php  
  
class Manuscript_model extends CI_Model { 

public function create($formArray)
{
    $this->db->insert('manuscript', $formArray);

}
}