<?php 
class ConsoleGame {
    private $tableInt_genre_id;
    private $tableInt_game_genre_id;

    public function __construct($tableInt_genre_id, $tableInt_game_genre_id)
    {
        $this-> tableInt_genre_id=$tableInt_genre_id;
        $this-> tableInt_game_genre_id=$tableInt_game_genre_id;
    }

    //Méthode magique get
    public function getTableIntGenreId(){
        return $this->tableInt_genre_id;
    }
    public function getTableIneGameGenreId(){
        return $this->tableInt_game_genre_id;
    }

    //Méthode magique set
    public function setTableIntGenreId(){
        return $this->tableInt_genre_id;
    }
    public function setTableIneGameGenreId(){
        return $this->tableInt_game_genre_id;
    }
}
