<?php

/**
 *
 */
class OrderSummary extends CI_Controller
{
	public function __construct()
	{
		// code...
		parent::__construct();
		// loading database
		$this->load->database();
		// loading modal
		$this->load->model('OrderSummaryFunHandler');

	}

	public function index()
	{
		// code...
		$this->load->helper('url');
		if (!(strlen($this->session->userdata('email'))>0)){
			redirect(base_url('/petzz/'));
		}else{

			$email = $this->session->userdata('email');
			$res = $this->OrderSummaryFunHandler->get_order_list($email);
			$data['values'] = $res;
			$this->load->view('orderSummary',$data);
		}

	}

}


?>
