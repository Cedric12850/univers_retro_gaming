<?php
require_once 'partials/header.php';


$autor_id = $_GET['id'];
$gamesByUserId = GameManager::showGameByAutorId($autor_id);



require_once './vues/gameByAutorVue.php';
