<?php
class UserComment
{
    private $id_comment;
    private $comment;
    private $tableInt_autor_id;
    private $tableInt_comment_id;
    

    //Méthode magique get
    public function getCommentId(){
        return $this->id_comment;
    }
    public function getComment(){
        return $this->comment;
    }
    public function getTableIntAutorId(){
        return $this->tableInt_autor_id;
    }
    public function getTableIntCommentId(){
        return $this->tableInt_comment_id;
    }
    
    //Méthode magique set
    public function setComment(){
        return $this->comment;
    }
    public function setTableIntAutorId(){
        return $this->tableInt_autor_id;
    }
    public function setTableIntCommentId(){
        return $this->tableInt_comment_id;
    }
    
}
