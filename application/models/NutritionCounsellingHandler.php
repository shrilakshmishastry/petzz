<?php

/**
 *
 */
class NutritionCounsellingHandler extends CI_Model{

	// function __construct(argument)
	// {
	//   // code...
	// }
	public function get_product_details()
	{
		// code...
		$query = "SELECT * from product where  product_category='nutrition-counselling'";
		$result =$this->db->query($query);

		return $result->result();
	}

}




?>
