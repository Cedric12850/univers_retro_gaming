<?php 
class Genre {
    private $genre_id;
    private $genre_name;

   

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