<?php

/**
 *
 */
class Signup extends CI_Controller
{

  public function index()
  {
    // code...
    $this->load->helper('url');
    $this->load->view('signup');
  }

}


 ?>
