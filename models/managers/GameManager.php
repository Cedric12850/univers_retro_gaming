<?php
require_once './models/dbconnect.php';
require_once './models/entities/Game.php';

class GameManager
{
    //récupère tous les jeux avec les users
    public static function getAllGame() 
    {
        $dbh = dbconnect();
        //$query = "SELECT * FROM game";
        $query = "SELECT * FROM game";
        $stmt = $dbh->prepare($query);
        $stmt->execute();
     
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, 'Game');
        return $results;
    }

    //afficher les jeux par id
    public static function showGameByid($id) {
        $dbh = dbconnect();
        $query = "SELECT * 
            FROM game
            WHERE game_id = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Game');
        $result = $stmt->fetch();
        return $result;
    }

    //afficher les jeux par autor_id
    public static function showGameByAutorId($id) {
        $dbh = dbconnect();
        $query = "SELECT * 
            FROM game
            WHERE autor_id = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, 'Game');
        return $results;
    }

}