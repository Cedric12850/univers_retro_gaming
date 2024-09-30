<?php

require_once './models/dbconnect.php';
require_once './models/entities/Genre.php';

class GenreManager
{
    public static function getGenreByGameId($id)
    {
        $dbh = dbconnect();
        $query = "SELECT * FROM genre
            JOIN game_genre ON genre.genre_id = game_genre.tableInt_genre_id
            Where game_genre.tableInt_game_genre_id = :id";         
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();   
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, 'Genre');
        return $results;
    }
}