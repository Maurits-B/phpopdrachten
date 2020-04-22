<?php
$login = array(
    "Maurits" => "lol",
    "Admin" => "Admin",
    "Freek" => "2002",
    "Root" => "codeMaster",
    "User1" => "User1",
    "User2" => "User2",
    "User3" => "User3",
    "User4" => "User4",
    "User5" => "User5",
    "User6" => "User6",
    );
$message = "";
$showLoginScreen = true;

if (isset($_POST['username']))
{
    foreach ($login as $username => $password)
    {
        if ($_POST['password'] == $password && $_POST['username'] == $username)
        {
            $showLoginScreen = false;
        }
        elseif ($_POST['password'] == "" || $_POST['username'] == "")
        {
            $message = "De username of password zijn niet ingevuld";
        }
        else
        {
            $message = 'De gebruikersnaam en / of het wachtwoord klopt niet';
        }
    }
}