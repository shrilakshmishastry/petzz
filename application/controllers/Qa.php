<?php
class Qa extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        // loading database
        $this->load->database();
        // loading modal
        $this->load->model('QaFunHandler');
    }

    public function index_for_question()
    {
        $this->load->helper('url');
        if (strlen($this->session->userdata('email'))==0){
            redirect(base_url('/petzz/'));
        }else{
            $this->load->view('askQuestion');
        }
    }

    public function index_for_answer()
    {
        $this->load->helper('url');
        if (strlen($this->session->userdata('email'))==0){
            redirect(base_url('/petzz/'));
        }else{
            $this->load->view('answer');
        }
    }

    public function ask_question()
    {
        $title = $_POST['title'];
        $email = $this->session->userdata('email');
        echo $email;
        $description = $_POST['description'];
        $res =   $this->QaFunHandler->addQuestion($title,$description,$email);
        echo $res;
    }

    public function answer_Question()
    {

    }
}

?>