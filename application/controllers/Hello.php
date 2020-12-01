<?php
/**
 *
 */

/**
 *
 */




class Hello extends CI_Controller
{
  function __construct()
  {
    // code...
      parent::__construct();
      $this->load->database();
      $this->load->model('Hello_Model');
  }

  public function index()
  {
    // code...
    echo "Hello World";
  }
  public function about()
  {
    // code...
  $this->load->view('about');
  }

  public function savedata()
  {
    // code...
    $this->load->view('registration');
    echo $this->input->post('name');
    if($this->input->post('save')){
      $n = $this->input->post('name');
      $e = $this->input->post('email');
      $m = $this->input->post('mobile');
      $this->Hello_Model->saverecords($n,$e,$m);
      echo "Records saved successfully";
    }
  }

}


 ?>
