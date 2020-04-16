<?php
$login = array(
    "Maurits" => "lol",
    "Admin" => "Admin",
    "Freek" => "2002",
    "Root" => "codeMaster",
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
        else
        {
            $message = 'De gebruikersnaam en / of het wachtwoord klopt niet';
        }
    }
}