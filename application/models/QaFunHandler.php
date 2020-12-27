<?php

class QaFunHandler extends CI_Model{
    public function addQuestion($title,$description,$email)
    {
        $query = " INSERT INTO question (title, description, user_email) values ('$title','$description','$email')";
        $res = $this->db->query($query);
        return $res;
    }

    public function addAnswer($id,$answer)
    {
        $query = "INSERT INTO answers(question_id,answer) values('$id','$answer') ";
        $res = $this->db->query($query);
        return $res;
    }

    public function get_qa_list()
    {
        $query = "SELECT * FROM question";
        $res = $this->db->query($query);
        return $res->result();
    }
}

?>