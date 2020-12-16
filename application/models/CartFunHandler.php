<?php

class CartFunHandler extends CI_Model{
	public function get_cart_item($email)
	{
		$query = "
			SELECT
				c.user_email as email, p.product_name as product_name,
				p.product_image as image,c.quantity as quantity,p.description as description,p.price as price 
		  	FROM
				cart as c
			INNER JOIN
				product as p
			ON
				p.id = c.product_id
			WHERE
				user_email = '$email'
		";
		$result =$this->db->query($query);
		return $result->result();
	}

	public function get_store_list()
	{
		$query = "SELECT * FROM pet_store";
		$result = $this->db->query($query);
		return $result->result();
	}
}

?>

