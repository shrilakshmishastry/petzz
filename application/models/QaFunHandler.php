<?php

class QaFunHandler extends CI_Model{
    public function addQuestion($title,$description,$email)
    {
        $query = " INSERT INTO question (title, description, user_email) values ('$title','$description','$email')";
        $res = $this->db->query($query);
        return $res;
    }

    public function addAnswer()
    {
        return "answer";
    }
}

?>