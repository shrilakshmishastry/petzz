<?php

/**
 *
 */
class OrderSuccessFul extends CI_Controller
{
	public function __construct()
	{
		// code...
		parent::__construct();
		// loading database
		$this->load->database();
		// loading modal
		$this->load->model('PlaceOrderFunHandler');
		$this->load->model('CartFunHandler');

	}
    public function index()
    {
      // code...
      // code...
      $this->load->helper('url');
      $this->load->view('orderSuccessful');
    }

	public function place_order()
	{
		$data = $_POST['data'];
		$email = $this->session->userdata('email');
		$result = $this->CartFunHandler->get_cart_item($email);
		$total = 0;
		foreach ($result as $val){
			$total+=$val->price;
		}
		$res = $this->PlaceOrderFunHandler->place_order($data,$total);
		echo $res;

    }


}


 ?>
