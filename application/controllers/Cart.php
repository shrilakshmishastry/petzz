<?php
class Cart extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		// loading database
		$this->load->database();
		// loading modal
		$this->load->model('CartFunHandler');
	}

	public function index()
	{
		$this->load->helper('url');
		if (!(strlen($this->session->userdata('email'))>0)){
			redirect(base_url('/petzz/'));
		}
		else{
			$email = $this->session->userdata('email');
			$result = $this->CartFunHandler->get_cart_item($email);
			$total = 0;
			foreach ($result as $val){
				$total+=$val->price;
			}
			$result_petstore_list = $this->CartFunHandler->get_store_list();
			$data['values'] = ['res'=>$result,'total'=>$total,'pet_store'=>$result_petstore_list];
			$this->load->view('cart',$data);
		}



	}

	public function remove_cart_item()
	{
		$id = $_POST['id'];
		$res = $this->CartFunHandler->remove_cart_item($id);
		$email = $this->session->userdata('email');
		$result = $this->CartFunHandler->get_cart_item($email);
		$total = 0;
		foreach ($result as $val){
			$total+=$val->price;
		}
		echo $total;
	}

	public function add_cart_item()
	{
		$id = $_POST['id'];
		$email = $this->session->userdata('email');
		$res = $this->CartFunHandler->add_cart_item($id,$email);
		echo $res;
	}
}

?>
