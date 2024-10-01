<?php
require_once 'partials/header.php';



if(isset($_POST)&& !empty($_POST)) {
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];   
    $user = UsersManager::connectUser($pseudo);
    // $user = $user[0]; 
        if($user) {
            
            $registered_password = $user->getPassword();
            $isCredentialsOk = password_verify($password, $registered_password);
        if($isCredentialsOk){
            $_SESSION['user'] = [
                'id' => $user->getUser_id(),
                'pseudo' => $user->getPseudo()
            ];
            header('location:index.php');
        }else{
            echo 'Erreur de mot de passe';
        }
    }else{
        echo 'Pseudo Inconnu';
    }
}


    require_once './vues/loginVue.php';

