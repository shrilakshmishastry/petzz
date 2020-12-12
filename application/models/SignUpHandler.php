<?php

/**
 *
 */
class SignUpHandler extends CI_Model{

	// function __construct(argument)
  // {
  //   // code...
  // }
  public function userexist($email)
  {
    // code...
    $query = "SELECT COUNT(email) from pet_user WHERE email='$email'";
    $result =$this->db->query($query);

    return $result->result();
  }
  public function saverecords($name,$email,$password)
  {
    // code...
    $query = "INSERT INTO pet_user VALUES('','$name','$email','$password')";
    $result  = $this->db->query($query);
    return $result;
  }
}




 ?>
