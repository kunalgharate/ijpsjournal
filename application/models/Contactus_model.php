<?php  
  
class Contactus_model extends CI_Model { 

public function send($formArray)
{
    $this->db->insert('contact', $formArray);

}
}