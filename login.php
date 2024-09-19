<?php
require_once 'partials/header.php';

if(isset($_POST)&& !empty($_POST)) {
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];
    $userArray = connectUser($pseudo);  
    $user = $userArray[0];  
        if($user) {
            
            $registered_password = $user['password'];
            $isCredentialsOk = password_verify($password, $registered_password);
        if($isCredentialsOk){
            $_SESSION['user'] = [
                'id' => $user['user_id'],
                'pseudo' => $user['pseudo']
            ];
            header('location:index.php');
        }else{
            echo 'Erreur de mot de passe';
        }
    }else{
        echo 'Pseudo Inconnu';
    }
}
?>


<div>
    <form action="" method="post">
        <input type="text" name="pseudo" placeholder="Pseudo">
        <input type="password" name="password" placeholder="Mot de passe">
        <input id="btnStyle2" type="submit" value="Se connecter">
    </form>
</div>


<?php require_once 'partials/footer.php' ?>