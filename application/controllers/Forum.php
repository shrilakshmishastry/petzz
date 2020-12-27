<?php
class Forum extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        // loading database
        $this->load->database();
        // loading modal
        $this->load->model('QaFunHandler');
    }

    public function index()
    {
        $this->load->helper('url');
        $result = $this->QaFunHandler->get_qa_list();
        $data['values'] =$result;
        $this->load->view('forum',$data);

    }

}

?>
