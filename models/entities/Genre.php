<?php 
class Genre {
    private $genre_id;
    private $genre_name;

    public function __construct($genre_id, $genre_name)
    {
        $this-> genre_id=$genre_id;
        $this-> genre_name=$genre_name;
    }

    //Méthode magique get
    public function getGenreId(){
        return $this->genre_id;
    }
    public function getGenreName(){
        return $this->genre_name;
    }

    //Méthode magique set
    public function setGenreId(){
        return $this->genre_id;
    }
    public function setTableIneGameGenreID(){
        return $this->genre_name;
    }
}