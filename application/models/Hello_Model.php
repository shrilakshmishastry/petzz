<?php

/**
 *
 */
class Hello_Model extends CI_Model
{
  public function saverecords($name,$email,$mobile)
  {
    // code...
    $query = "insert into user1 values('','$name','$email','$mobile')";
    $this->db->query($query);
  }
}



 ?>
