<?php 
class Pegi {
    private $pegi_id;
    private $pegi_img;

    //Méthode magique get
    public function getPegiId(){
        return $this->pegi_id;
    }
    public function getPegiImg(){
        return $this->pegi_img;
    }

    //Méthode magique set
    public function setPegiId(){
        return $this->pegi_id;
    }
    public function setPegiImg(){
        return $this->pegi_img;
    }
}