<?php

class QaFunHandler extends CI_Model{
    public function addQuestion($title,$description,$email)
    {
        $query = "INSERT INTO question (title,description,user_email) values('$title','$description','$email') ";
        $res = $this->db->query($query);
        return $res;
    }

    public function addAnswer($id,$answer,$email)
    {
        $query = "INSERT INTO answers(question_id,answer,answered_by) values('$id','$answer','$email') ";
        $res = $this->db->query($query);
        return $res;
    }

    public function get_qa_list()
    {
        $query = "SELECT * FROM question";
        $res = $this->db->query($query);
        return $res->result();
    }

    public function get_answer_list($id)
    {
        $query = "SELECT * FROM answers WHERE question_id='$id'";
        $res = $this->db->query($query)->result();
        $query1 = "SELECT * FROM question where id ='$id'";
        $res1 = $this->db->query($query1)->result();
        $totalRes = [
            'ques' => $res1,
            'ans' => $res,
    ];
        return $totalRes;
    }
}

?>