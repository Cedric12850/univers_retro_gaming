<?php
class UserComment{
    private $id_comment;
    private $comment;
    private $tablent_autor_id;
    private $tableint_comment_id;
    

    public function __construct($id_comment, $comment, $tablent_autor_id, $tableint_comment_id)
    {
        $this-> id_comment=$id_comment ;
        $this-> comment=$comment ;
        $this-> tablent_autor_id=$tablent_autor_id ;
        $this-> tableint_comment_id=$tableint_comment_id ;
    }

    //Méthode magique get
    public function getConsoleId(){
        return $this->id_comment;
    }
    public function getComment(){
        return $this->comment;
    }
    public function getTableIntAutorId(){
        return $this->tablent_autor_id;
    }
    public function getTableIntCommentId(){
        return $this->tableint_comment_id;
    }
    
    //Méthode magique set
    public function setComment(){
        return $this->comment;
    }
    public function setTableIntAutorId(){
        return $this->tablent_autor_id;
    }
    public function setTableIntCommentId(){
        return $this->tableint_comment_id;
    }
    
}
