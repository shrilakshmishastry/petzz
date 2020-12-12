<?php

/**
 *
 */
class PetAdoption extends CI_Controller
{

  public function index()
  {
    // code...
    $this->load->helper('url');
    $this->load->view('petAdoption');
  }
}


 ?>
