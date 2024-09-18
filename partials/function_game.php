<?php
if (isset($_POST)&& !empty($_POST)) {
    if(!(isset($_SESSION['user']))) {
        echo 'Veuillez vous connecter pour envoyer votre ajout de console';
            header ('location:login.php');
        }else{
            echo 'Merci pour votre ajout.';
            header('location:game.php');
        }        
        $game_titre = $_POST['game_titre'];
        $game_year = $_POST['game_year'];
        $game_description = $_POST['game_description'];
        $game_img = $_POST['game_img'];
        $pegi = $_POST['addPegiIntoGame'];
        // $autor_id = $_POST['addAutorIntoGame'];   En atttente de réparation pour afficher le nom de l'auteur
        // $idInsertGame récupère l'id de 'linsertGameIntoDB pour l'utiliser ensuite dans l'ajout du genre
        $idInsertGame = insertGameIntoDB(
            $game_titre,
            $game_year,
            $game_description,
            'test',
            $pegi,
            "2024/06/25",
            $autor_id
        );
        addGenreToGame (
            1,
            $idInsertGame
        );
        echo 'Jeu bien ajouté';
        var_dump($autor_id);
    }

//affichage des jeux, genres et pegi
$games = getAllGame();
$genres = getAllGenre();
$pegis = getAllPegi();

//upload de l'image
if(isset($_FILES['game_img'])&& !empty($_FILES['game_img'])){
    $tmpName = $_FILES['game_img']['tmpName'];
    $name = $_FILES['game_img']['name'];
    $type = $_FILES['game_img']['type'];
    $size = $_FILES['game_img']['size'];
    $error = $_FILES['game_img']['error'];

    move_uploaded_file($tmpName, './src/upload/'.$name );
}

//Delete a game by user or admin
// if(isset($_POST)) {
//     $resetgame = $_POST['game_titre'];
//     $resetgame = deleteThisGame('game_titre');
// }

//Affichage des jeu par auteur de l'article

?>