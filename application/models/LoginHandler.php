<?php

/**
 *
 */
class LoginHandler extends CI_Model{

	// function __construct(argument)
	// {
	//   // code...
	// }
	public function userexist($email)
	{
		// code...
		$query = "SELECT * from pet_user WHERE email='$email' ";
		$result =$this->db->query($query);

		return $result->result();
	}


}
?>
