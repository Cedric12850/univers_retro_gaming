<?php

require_once './models/dbconnect.php';
require_once './models/entities/Genre.php';

class GenreManager
{
    public static function getGenreByGameId()
    {
        $dbh = dbconnect();
        //$query = "SELECT * FROM game";
        $query = "SELECT * FROM genre
            JOIN game_genre ON genre.genre_id = game_genre.tableInt_genre_id
            join game ON game.game_id = game_genre.tableInt_game_genre_id";          
        $stmt = $dbh->prepare($query);
        $stmt->execute();
     
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, 'Genre');
        return $results;
    }
}