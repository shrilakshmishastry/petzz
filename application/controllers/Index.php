<?php

/**
 *
 */
class Index extends CI_Controller
{

  public function home()
  {
    // code...
    $this->load->helper('url');
    $this->load->view('index');    
  }

}


 ?>
