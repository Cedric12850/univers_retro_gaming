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
    <div class="row">
        <form class="col s12" id="suscribe" action="" method="post">
            <div class="row">
                <div class="input-field col s6">
                    <input class="validate" type="text" name="firstName">
                    <label for="firstName">Nom:</label>
                </div>
                <div class="input-field col s6">
                    <input class="validate" type="text" name="lastName">
                    <label for="lastName">Prénom:</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input class="validate" type="text" name="pseudo">
                    <label for="pseudo">Pseudo:</label>
                </div>
                <div class="input-field col s6">
                    <input type="text" name="birthday" class="validate datepicker">
                    <label for="birthday">Date de naissance:</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input type="email" name="email" class="validate">
                    <label for="email">Email:</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input type="text" name="adresse" class="validate">
                    <label for="adresse">Adresse:</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input type="text" name="town" class="validate">    
                    <label for="town">Ville:</label>
                </div>
                <div class="input-field col s6">
                    <input type="text" name="town_cp" class="validate">
                    <label for="town_cp">Code postal:</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input type="password" name="password" class="validate">
                    <label for="password">Mot de passe:</label>
                </div>
            </div>
            
            <input class="btn waves-effect waves-light" type="submit" value="Valider">

        </form>
    </div>
</div>


<?php require_once 'partials/footer.php' ?>