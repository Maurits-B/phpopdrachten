<?php
$authUsers = Array(
    "Abu"=> "bekend",
    "Nordin"=> "onbekend",
    "BasZ"=> "654321",
    "Rosalie"=> "bloemblaadjes",
    "Maurits"=> "frikandelspeciaal"
);

foreach ($authUsers as $username => $password){
    if ($_POST['username'] == $username && $_POST['password']== $password) {
        session_start();
        $_SESSION['username'] = $_POST['username'];
        header('location: welkom.php');
    }
    else {
    //$message = "Ongeldige username/wachtwoord
    //{$_POST['username']}, probeer het nog eens.";
        header('location: opdracht61.php');
    }
}