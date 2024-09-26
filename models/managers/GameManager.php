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
        $query = "SELECT * FROM game 
            join users on autor_id = user_id
            join game_genre on tableInt_game_genre_id = game_id
            join genre on genre_id = tableInt_genre_id ";           
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
            JOIN users ON user_id = autor_id
            join game_genre on tableInt_game_genre_id = game_id
            join genre on genre_id = tableInt_genre_id
            WHERE game_id = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, 'Game');
        return $results;
    }

}