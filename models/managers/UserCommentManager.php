<?php
require_once './models/dbconnect.php';
require_once './models/entities/UserComment.php';

class UserCommentManager {

    public static function getComments($id)
    {
        $dbh = dbconnect();
        $query = "SELECT * FROM user_comment
            WHERE tableInt_comment_id = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();    
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, 'UserComment');
        return $results;
    }
        
    public static function getPseudoComment($id)
    {
        $dbh = dbconnect();
        $query = "SELECT * FROM user_comment
            WHERE tableInt_autor_id = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'UserComment');    
        $result = $stmt->fetch();
        return $result;
    }
}