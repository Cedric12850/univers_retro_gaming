<?php 
class Game {
    private $game_id;
    private $game_titre;
    private $game_year;
    private $game_description;
    private $game_img;
    private $pegi_id;
    private $autor_id;
    private $date_article;

 //constructeru non-obligatoire (PS: d'ailleurs dans cette page il me fait planter le code --> Décommenter et lire l'erreur)
    // public function __construct($game_id, $game_titre, $game_year, $game_description, $game_img, $pegi_id, $autor_id, $date_article)
    // {
    //     $this-> game_id= $game_id ;
    //     $this-> game_titre= $game_titre ;
    //     $this-> game_year= $game_year ;
    //     $this-> game_description= $game_description ;
    //     $this-> game_img= $game_img ;
    //     $this-> pegi_id= $pegi_id ;
    //     $this-> autor_id= $autor_id ;
    //     $this-> date_article= $date_article ;
    // }

    //Méthode magique get
    public function getGameId(){
        return $this->game_id;
    }
    public function getGameTitre(){
        return $this->game_titre;
    }
    public function getGameYear(){
        return $this->game_year;
    }
    public function getGameDescription(){
        return $this->game_description;
    }
    public function getGameImg(){
        return $this->game_img;
    }
    public function getPegiId(){
        return $this->pegi_id;
    }
    public function getAutorId(){
        return $this->autor_id;
    }
    public function getDateArticle(){
        return $this->date_article;
    }

    //Méthode magique set
    public function setGameTitre(){
        return $this->game_titre;
    }
    public function setGameYear(){
        return $this->game_year;
    }
    public function setGameDescritpion(){
        return $this->game_description;
    }
    public function setGameImg(){
        return $this->game_img;
    }
    public function setPegiId(){
        return $this->pegi_id;
    }
    public function setAutorId(){
        return $this->autor_id;
    }
    public function setDateArticle(){
        return $this->date_article;
    }

}
