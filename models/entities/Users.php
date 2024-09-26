<?php 

class User {
    private $user_id;
    private $firstName;
    private $lastName;
    private $pseudo;
    private $birthdate;
    private $adresse;
    private $town;
    private $town_cp;
    private $email;
    private $password;

    public function __construct($user_id, $firstName, $lastName, $pseudo, $birthdate, $adresse, $town, $town_cp, $email, $password)
    {
        $this-> user_id=$user_id;
        $this-> firstName=$firstName;
        $this-> lastName=$lastName;
        $this-> pseudo=$pseudo;
        $this-> birthdate=$birthdate;
        $this-> adresse=$adresse;
        $this-> town=$town;
        $this-> town_cp=$town_cp;
        $this-> email=$email;
        $this-> password=$password;
    }

    //Mutateur get
    public function getUser_id(){
        return $this->user_id;
    }
    public function getFirstName(){
        return $this->firstName;
    }
    public function getLastName(){
        return $this->lastName;
    }
    public function getPseudo(){
        return $this->pseudo;
    }
    public function getBirthdate(){
        return $this->birthdate;
    }
    public function getAdresse(){
        return $this->adresse;
    }
    public function getTown(){
        return $this->town;
    }
    public function getTown_cp(){
        return $this->town_cp;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    
    //Mutateur set
    
    public function setFirstName(){
        return $this->firstName;
    }
    public function setLastName(){
        return $this->lastName;
    }
    public function setPseudo(){
        return $this->pseudo;
    }
    public function setBirthdate(){
        return $this->birthdate;
    }
    public function setAdresse(){
        return $this->adresse;
    }
    public function setTown(){
        return $this->town;
    }
    public function setTown_cp(){
        return $this->town_cp;
    }
    public function setEmail(){
        return $this->email;
    }
    public function setPassword(){
        return $this->password;
    }
    }

