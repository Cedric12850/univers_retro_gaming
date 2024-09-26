<?php 
class ConsoleGame {
    private $tableInt_console_id;
    private $tableInt_console_game_id;

    public function __construct($tableInt_console_id, $tableInt_console_game_id)
    {
        $this-> tableInt_console_id=$tableInt_console_id;
        $this-> tableInt_console_game_id=$tableInt_console_game_id;
    }

    //Méthode magique get
    public function getTableIntConsoleId(){
        return $this->tableInt_console_id;
    }
    public function getTableIneConsoleGameId(){
        return $this->tableInt_console_game_id;
    }

    //Méthode magique set
    public function setTableIntConsoleId(){
        return $this->tableInt_console_id;
    }
    public function setTableIneConsoleGameId(){
        return $this->tableInt_console_game_id;
    }
}

