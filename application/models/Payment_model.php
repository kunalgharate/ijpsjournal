<?php  
  
class Payment_model extends CI_Model { 

public function create($formArray)
{
    $this->db->insert('payment', $formArray);

}
}