<?php
class Console{
    private $console_id;
    private $console_name;
    private $console_year;
    private $console_description;
    private $console_img;

    public function __construct($console_id, $console_name, $console_year, $console_description, $console_img)
    {
        $this-> console_id=$console_id ;
        $this-> console_name=$console_name ;
        $this-> console_year=$console_year ;
        $this-> console_description=$console_description ;
        $this-> console_img=$console_img ;
    }

    //Méthode magique get
    public function getConsoleId(){
        return $this->console_id;
    }
    public function getConsoleName(){
        return $this->console_name;
    }
    public function getConsoleYear(){
        return $this->console_year;
    }
    public function getConsoleDescription(){
        return $this->console_description;
    }
    public function getConsoleImg(){
        return $this->console_img;
    }

    //Méthode magique set
    public function setConsoleName(){
        return $this->console_name;
    }
    public function setConsoleYear(){
        return $this->console_year;
    }
    public function setConsoleDescription(){
        return $this->console_description;
    }
    public function setConsoleImg(){
        return $this->console_img;
    }

}
