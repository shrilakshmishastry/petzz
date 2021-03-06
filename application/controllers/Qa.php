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
            redirect(base_url('/petzz/forum'));
        }else{
            $this->load->view('askQuestion');
        }
    }

    public function index_for_answer()
    {
        $url = parse_url($_SERVER['REQUEST_URI']);
        $this->load->helper('url');
        preg_match_all('!\d+!', $url['path'], $matches);
        $res = $this->QaFunHandler->get_answer_list($matches[0][0]);
        $data['values'] = $res;
        $this->load->view('answer',$data);

    }

    public function ask_question()
    {
        $title = $_POST['title'];
        $email = $this->session->userdata('email');
        echo $email;
        $description = $_POST['description'];
        echo $title;
        echo $description;
        $res =   $this->QaFunHandler->addQuestion($title,$description,$email);
        echo $res;
    }

    public function answer_Question()
    {
        $question = json_decode($_POST['question']);
        $answer = $_POST['answer'];
        echo print_r($question);
        $email = $this->session->userdata('email');
        $res = $this->QaFunHandler->addAnswer($question->id,$answer,$email);
        echo $res;
    }
}

?>