<?php 
require_once 'partials/header.php';
    if(isset($_POST)&& !empty($_POST)) {

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $pseudo =$_POST['pseudo'];
        $birthdate = $_POST['birthday'];
        $adresse = $_POST['adresse'];
        $town = $_POST['town'];
        $town_cp = $_POST['town_cp'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $hashPassword = password_hash($password, PASSWORD_BCRYPT);

        addUser(
            $firstName,
            $lastName,
            $pseudo,
            $birthdate,
            $adresse,
            $town,
            $town_cp,
            $email,
            $hashPassword
        );
   
    header('location:login.php');
     }
?>

<div>
    <h2>Inscrivez-vous.</h2>
    <form id="suscribe" action="" method="post">
        <p>Nom: <input type="text" name="firstName"></p>
        <p>Prénom: <input type="text" name="lastName"></p>
        <p>Pseudo: <input type="text" name="pseudo"></p>
        <p>Email: <input type="email" name="email"></p>
        <p>Date de naissance: <input type="date" name="birthday"></p>
        <p>Adresse: <input type="text" name="adresse"></p>
        <p>Ville: <input type="text" name="town"> </p>
        <p>Code postal: <input type="text" name="town_cp"></p>
        <p>Mot de passe: <input type="password" name="password"></p>
        <input id="btnStyle2" type="submit" value="Valider">

    </form>
    
</div>


<?php require_once 'partials/footer.php' ?>