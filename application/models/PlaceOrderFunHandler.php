<?php

class PlaceOrderFunHandler extends CI_Model{
	public function place_order($data,$total)
	{
		$date =  date("Y-m-d");
		$query = "INSERT INTO order_detail (order_date,total) VALUES ('$date','$total')";
		$this->db->query($query);
		$insert_id = $this->db->insert_id();
		echo $insert_id;
		$data_arr = array();
		foreach ($data as $row){
			$cart_id = $row['cart_id'];
			$r_query = "DELETE FROM cart WHERE id = '$cart_id'";
			$this->db->query($r_query);
			$order_id = $insert_id;
			$order_total =$row['price'];
//			echo print_r($row['price']);
			$data_arr[] = "($order_id,$order_total)";
		}
//		echo print_r($data_arr);
		$query1 = "INSERT INTO order_items (order_id,order_total) VALUES ";
		$query1.=implode(',',$data_arr);
		$res =  $this->db->query($query1);
//		echo $res;
		return $res;
	}
}

?>
